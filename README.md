# KOMEK by ticket — афиша кинотеатра

Вёрстка макета (Figma) кинотеатра **KOMEK by ticket** на **Laravel** с использованием
Blade-компонентов, SCSS и Vite. Реализованы десктопная версия (по макету) и
адаптивная мобильная версия.

## Стек

- **Laravel** (PHP) + **Blade**-шаблоны и компоненты
- **SCSS** → CSS, сборка через **Vite** (`laravel-vite-plugin`)
- **HTML5 / CSS3 / JavaScript** (vanilla, без сторонних JS-библиотек)
- Шрифт **Montserrat** подключён локально (`@fontsource`), без CDN
- Все изображения — **SVG** (логотип, иконки соцсетей, способы оплаты,
  постеры-плейсхолдеры и фон-баннер)

## Структура

```
resources/
├── js/app.js              # точка входа Vite: импорт SCSS, шрифта, JS (табы, мобильное меню)
├── images/hero.svg        # фон-баннер «Аквамен» (используется как background-image)
├── scss/                  # стили, разбитые на партиалы
│   ├── app.scss           # точка входа
│   ├── _variables.scss    # дизайн-токены (цвета, отступы, брейкпоинты)
│   └── _base.scss  _hero.scss  _header.scss  _tabs.scss  _movies.scss  _footer.scss
└── views/
    ├── afisha.blade.php           # главная страница (данные афиши)
    └── components/                # Blade-компоненты
        ├── layout.blade.php       # HTML-каркас + @vite
        ├── site-header.blade.php  # hero + контактная строка + навигация
        ├── site-footer.blade.php  # подвал
        ├── date-tabs.blade.php    # фильтр по датам
        ├── movie-card.blade.php   # карточка фильма
        ├── session.blade.php      # кнопка сеанса
        ├── logo.blade.php  socials.blade.php  icon.blade.php  # SVG-графика
public/images/posters/             # постеры фильмов (SVG)
routes/web.php                     # маршрут «/» + демо-данные афиши
```

## Запуск

```bash
composer install
npm install
npm run build      # или: npm run dev  (с hot-reload)

cp .env.example .env
php artisan key:generate
php artisan serve  # http://127.0.0.1:8000
```

## Примечания по макету

- Доступа к исходному файлу Figma не было — в работе использовался экспорт-скриншот.
  Поэтому фон-баннер и постеры выполнены как **аккуратные SVG-плейсхолдеры**
  (векторные, локальные, масштабируемые). Чтобы получить полную визуальную точность,
  достаточно заменить файлы:
  - фон: `resources/images/hero.svg` (используется как `background-image`);
  - постеры: `public/images/posters/*.svg`.
- Карточка **«Когда не загрузилась афиша»** в макете намеренно показана без постера —
  отрисовывается плейсхолдер «нет изображения» (так и задумано в дизайне).
- Мобильная версия (адаптив) сделана по своему усмотрению: контактная строка
  перестраивается в колонку, навигация скрывается под «бургер», лента дат
  горизонтально прокручивается, сетка фильмов 4 → 3 → 2 → 1 колонки.

## Анимации / hover

- Подчёркивание пунктов меню, подъём иконок соцсетей, затемнение кнопок,
  лёгкий zoom постера при наведении на карточку, переключение активной даты и
  мобильное меню — на vanilla JS (`resources/js/app.js`).
