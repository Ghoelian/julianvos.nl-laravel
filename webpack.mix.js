const mix = require('laravel-mix');
const path = require('path');

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
    .disableNotifications()
    .alias({
        ziggy: path.resolve('vendor/tightenco/ziggy/dist'),
    })
    .js('resources/js/app.js', 'public/js')
    .js('resources/js/home.js', 'public/js')
    .postCss('resources/css/bootstrap.css', 'public/css')
    .postCss('resources/css/app.css', 'public/css')
    .postCss('resources/css/material.css', 'public/css');
