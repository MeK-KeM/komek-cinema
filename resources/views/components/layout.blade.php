@props(['title' => 'KOMEK by ticket'])

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="KOMEK by ticket — афиша кинотеатра, расписание сеансов и онлайн-покупка билетов.">
    <title>{{ $title }}</title>
    @vite(['resources/js/app.js'])
</head>
<body>
    <div class="page">
        {{ $slot }}
    </div>
</body>
</html>
