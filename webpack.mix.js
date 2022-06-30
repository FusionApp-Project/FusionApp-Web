const mix = require('laravel-mix');

mix.setPublicPath('public');
mix.setResourceRoot('../');

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
    ])
    .css('resources/css/fontawesome.css', 'public/css')
    .css('resources/css/login.css', 'public/css');