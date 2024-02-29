import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import react from "@vitejs/plugin-react";

export default defineConfig({
    plugins: [
        laravel({
            input: [
                "resources/css/app.css",
                "resources/js/app.js",
                "resources/js/latest-books.js",
                "resources / js / book - search.js",

                "resources/js/user-list/main.jsx",
            ],
            refresh: true,
        }),
        react(),
    ],
});
