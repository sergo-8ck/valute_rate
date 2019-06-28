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

mix.styles([
  'resources/assets/front/css/bootstrap.min.css',
  'resources/assets/front/css/starter-template.css',
], 'public/css/front.css');

mix.scripts([
  'resources/assets/front/js/jquery-3.1.1.js',
  'resources/assets/front/js/popper.min.js',
  'resources/assets/front/js/bootstrap.min.js',
], 'public/js/front.js');

mix.copy('resources/assets/front/images', 'public/images');