import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/js/app.js',
                'resources/css/register_style.css',
                'resources/css/login_style.css',
            ],
            refresh: true,
        }),
    ],
});
