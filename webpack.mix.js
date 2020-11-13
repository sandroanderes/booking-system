const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix
    .js('resources/js/app.js', 'public/js')
    .sass('resources/assets/scss/main.scss', 'public/css')
    .js('resources/assets/js/navigation.js', 'public/js')
    .js('resources/assets/js/filter.js', 'public/js')
    .js('resources/assets/js/location.js', 'public/js')
    .js('resources/assets/js/privateLink.js', 'public/js')
    .js('resources/assets/js/openingshours.js', 'public/js');

if (mix.inProduction()) {
    mix.version();
}
