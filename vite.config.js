import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['public/build/assets/app-tN_rTdP3.css', 'public/build/assets/app-D2jpX1vH.js'],
            refresh: true,
        }),
    ],
});
