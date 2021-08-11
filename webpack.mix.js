const mix = require("laravel-mix");

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

// CSS
mix.sass("resources/sass/landing.scss", "public/css");
mix.sass("resources/sass/admin.scss", "public/css");
mix.sass("resources/sass/authpage.scss", "public/css");

// JS
mix.js("resources/js/app.js", "public/js");
mix.js("resources/js/main.js", "public/js");
