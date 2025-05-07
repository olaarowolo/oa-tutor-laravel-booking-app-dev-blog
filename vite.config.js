import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
                'resources/css/pages/packages.css', // ✅ Added this line
                'resources/css/partials/footer.css', // ✅ Added this line
            ],
            refresh: true,
        }),
    ],
});
