require('dotenv').config();
let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Alias config
 |--------------------------------------------------------------------------
 |
 | Here we override the vue alias to refer to the runtime dist that excludes
 | the string html runtime compiler, as everything is compiled before hand
 | in the app.js build.
 */
mix.webpackConfig({
    resolve: {
        alias: {
            'vue$': 'vue/dist/vue.runtime.esm.js',
        }
    }
});

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

mix.js('resources/assets/js/app.js', 'public/js')
    .sass('resources/assets/sass/app.scss', 'public/css')
    .copy('resources/assets/images', 'public/images')
    .browserSync({
        proxy: process.env.APP_URL,
        open : false
    })
    .version();
