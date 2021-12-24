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

mix.js('resources/js/app.js', 'public/js')
// .js('resources/js/navbar.js', 'public/js')
// .js('resources/js/footer.js', 'public/js')
// .js('resources/js/modals.js', 'public/js')
// .js('resources/js/home.js', 'public/js')
// .js('resources/js/aboutme.js', 'public/js')
// .js('resources/js/contact.js', 'public/js')
// .js('resources/js/blog.js', 'public/js')
// .js('resources/js/projects.js', 'public/js')
// .js('resources/js/til.js', 'public/js')
    .vue()
    .sass('resources/sass/app.scss', 'public/css')
    .sass('resources/sass/navbar.scss', 'public/css')
    .sass('resources/sass/footer.scss', 'public/css')
    .sass('resources/sass/modals.scss', 'public/css')
    .sass('resources/sass/home.scss', 'public/css')
    .sass('resources/sass/aboutme.scss', 'public/css')
    .sass('resources/sass/contact.scss', 'public/css')
    .sass('resources/sass/blog.scss', 'public/css')
    .sass('resources/sass/projects.scss', 'public/css')
    .sass('resources/sass/til.scss', 'public/css')
    ;
