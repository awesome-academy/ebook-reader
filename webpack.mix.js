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
    .copy('resources/assets/frontend/css/simple.css', 'public/css/simple.css')
    .copy('resources/assets/frontend/images/0_48.png', 'public/upload/avatars/0_48.png')
    .copy('resources/assets/frontend/images/0_128.png', 'public/upload/avatars/0_128.png')
    .copy('resources/assets/frontend/images/0_256.png', 'public/upload/avatars/0_256.png')
    // TODO: dev
    .copy('node_modules/holderjs', 'public/vendor/holderjs');

mix.copyDirectory('vendor/bower_components', 'public/bower_components');
mix.js('resources/assets/custom.js', 'public/js');
