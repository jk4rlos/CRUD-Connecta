import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';
import vue from '@vitejs/plugin-vue';

export default defineConfig({
    content: ["./resources/**/*.html", "./resources/**/*.js", "./resources/**/*.php"],
    theme: {
      extend: {},
    },
    plugins: [
        laravel([
            'resources/css/app.css',
            'resources/js/app.js',
        ]),
        vue(),
        tailwindcss(),
    ],
});
