const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.copyDirectory('node_modules/jquery/dist', 'public/vendor/jquery')
   .copyDirectory('node_modules/bootstrap/dist', 'public/vendor/bootstrap')
   .copyDirectory('node_modules/owl.carousel/dist', 'public/vendor/owl.carousel')
   .copyDirectory('node_modules/font-awesome', 'public/vendor/font-awesome')
   .copy('resources/assets/frontend/js/main.js', 'public/js/main.js')
   .copy('resources/assets/frontend/css/styles.css', 'public/css/styles.css')
   // TODO: dev
   .copy('node_modules/holderjs', 'public/vendor/holderjs');
