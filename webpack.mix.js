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

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        require('postcss-import'),
        require('tailwindcss'),
    ])
    .webpackConfig(require('./webpack.config'))
    .sass('resources/assets/scss/main.scss', 'public/css')
    .sass('resources/assets/scss/backend.scss', 'public/css')
    .js('resources/assets/js/frontend/navigation.js', 'public/js/frontend')
    .js('resources/assets/js/frontend/calendar-search.js', 'public/js/frontend')
    .js('resources/assets/js/backend/privateLink.js', 'public/js/backend')
    .js('resources/assets/js/backend/openinghours.js', 'public/js/backend')
    .js('resources/assets/js/frontend/fixed-footer.js', 'public/js/frontend')
    .js('resources/assets/js/backend/specifications.js', 'public/js/backend')
    .js('resources/assets/js/backend/template.js', 'public/js/backend')
    .js('resources/assets/js/frontend/frontend-calendar.js', 'public/js/frontend')
    .js('resources/assets/js/frontend/reservation.js', 'public/js/frontend');  
