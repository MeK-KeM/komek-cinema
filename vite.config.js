import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            // app.js imports the SCSS entrypoint and the bundled Montserrat font
            input: ['resources/js/app.js'],
            refresh: true,
        }),
    ],
});
