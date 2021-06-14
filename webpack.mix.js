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

mix.js('client/src/js/app.js', 'client/dist/js')
    .js('client/src/js/demo/chart-area-demo.js', 'client/dist/js/demo')
    .js('client/src/js/demo/chart-pie-demo.js', 'client/dist/js/demo')
    .js('client/src/js/demo/chart-bar-demo.js', 'client/dist/js/demo')
    .js('client/src/js/demo/datatables-demo.js', 'client/dist/js/demo')
    .sass('client/src/scss/style.scss', 'client/dist/css');
