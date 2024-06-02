import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import path from 'path'

export default defineConfig({
    server: {
        //修正docker讀取不到
        host: '0.0.0.0',
        hmr: {
            host: 'localhost',
        },
        // watch: {
        //     usePolling: true,
        // },
    },
    plugins: [
        laravel({
            input: [
                'resources/js/app.js',
                'resources/js/app_ui.js',
                'resources/js/health.js',
                // 'resources/js/other.js',
            ],
            refresh: true,
        }),
    ],
    resolve: {
        alias: {
            '~bootstrap': path.resolve(__dirname, 'node_modules/bootstrap'),
        }
    },
});

