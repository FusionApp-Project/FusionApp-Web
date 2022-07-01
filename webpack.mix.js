const mix = require('laravel-mix');

mix.setPublicPath('public');
mix.setResourceRoot('../');

mix.js('resources/js/app.js', 'public/js')
    .js('resources/js/waves.js', 'public/js')
    .sass('resources/css/app.scss', 'public/css')
    .sass('resources/css/login.scss', 'public/css');
