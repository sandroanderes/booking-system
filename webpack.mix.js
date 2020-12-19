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
    .js('resources/assets/js/frontend/navigation.js', 'public/js/frontend')
    .js('resources/assets/js/frontend/filter.js', 'public/js/frontend')
    .js('resources/assets/js/frontend/location.js', 'public/js/frontend')
    .js('resources/assets/js/backend/privateLink.js', 'public/js/backend')
    .js('resources/assets/js/frontend/functions.js', 'public/js/frontend')
    .js('resources/assets/js/backend/openinghours.js', 'public/js/backend')
    .js('resources/assets/js/frontend/fixed-footer.js', 'public/js/frontend')
    .js('resources/assets/js/backend/specifications.js', 'public/js/backend')
    .js('resources/assets/js/backend/template.js', 'public/js/backend')
    .js('resources/assets/js/frontend/frontend-calendar.js', 'public/js/frontend');  

if (mix.inProduction()) {
    mix.version();
}
