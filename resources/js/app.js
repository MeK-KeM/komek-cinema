import '../scss/app.scss';

// Montserrat web font — self-hosted via @fontsource, bundled by Vite (no CDN)
import '@fontsource/montserrat/400.css';
import '@fontsource/montserrat/500.css';
import '@fontsource/montserrat/600.css';
import '@fontsource/montserrat/700.css';
import '@fontsource/montserrat/800.css';

document.addEventListener('DOMContentLoaded', () => {
  // --- Date tabs: switch the active day ---
  const tabs = document.querySelectorAll('[data-tab]');
  tabs.forEach((tab) => {
    tab.addEventListener('click', () => {
      tabs.forEach((t) => t.classList.remove('is-active'));
      tab.classList.add('is-active');
    });
  });

  // --- Mobile navigation toggle ---
  const navbar = document.querySelector('[data-navbar]');
  const burger = document.querySelector('[data-burger]');
  if (navbar && burger) {
    burger.addEventListener('click', () => {
      const open = navbar.classList.toggle('is-open');
      burger.setAttribute('aria-expanded', String(open));
    });
  }
});
