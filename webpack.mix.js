const mix = require('laravel-mix');




/*
 |--------------------------------------------------------------------------
 | Mix Asset Managementrequire('dotenv').config();
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .copy('resources/images', 'public/images')
    .copy('resources/fonts', 'public/fonts')
    .styles(['resources/css/fontawesome.css', 'resources/css/owl.css', 'resources/css/style.css'], 'public/css/all.css')
    .sourceMaps();