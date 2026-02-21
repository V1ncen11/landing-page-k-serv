import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
    // WAJIB: Biar manifest.json lahir langsung di public/build/
    build: {
        manifest: 'manifest.json',
    },
});