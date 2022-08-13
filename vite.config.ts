// noinspection JSUnusedGlobalSymbols

import { defineConfig } from "vite"
import laravel from "laravel-vite-plugin"

export default defineConfig({
    build: {
        minify: true
    },
    server: {
        host: "0.0.0.0",
        hmr: {
            host: "localhost"
        },
        watch: {
            usePolling: true
        }
    },
    plugins: [
        laravel({
            input: [
                "resources/js/app.js",
                "resources/js/waves.js",
                "resources/css/app.css",
                "resources/css/login.css"
            ],
            refresh: [
                "routes/**",
                "resources/views/**"
            ]
        })
    ]
})
