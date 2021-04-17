const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');
require('laravel-mix-purgecss');
require('dotenv').config();

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
   // .js('resources/js/mixins/utility.js', 'public/js/mixins')
    .js('resources/js/healthyfood/soyprotein/qualityTest.js', 'public/js/healthyfood/soyprotein')
    .js('resources/js/healthyfood/soyprotein/purchaseSingle.js', 'public/js/healthyfood/soyprotein')
    .js('resources/js/healthyfood/soyprotein/purchaseMulti.js', 'public/js/healthyfood/soyprotein')
    .js('resources/js/healthyfood/soyprotein/contact.js', 'public/js/healthyfood/soyprotein')
    .sass('resources/sass/app.scss', 'public/css')
    .options({
        processCssUrls: false,
        postCss: [ tailwindcss('./tailwind.config.js') ],
    });
