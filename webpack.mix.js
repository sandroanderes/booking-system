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
    .js('resources/assets/js/functions.js', 'public/js')
    .js('resources/assets/js/openinghours.js', 'public/js')
    .js('resources/assets/js/fixed-footer.js', 'public/js')
    .js('resources/assets/js/specifications.js', 'public/js')
    .js('resources/assets/js/template.js', 'public/js')
    .js('resources/assets/js/frontend-calendar.js', 'public/js');  

if (mix.inProduction()) {
    mix.version();
}
