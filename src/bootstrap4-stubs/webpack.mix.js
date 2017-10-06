let mix = require('laravel-mix');

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
    .copy('node_modules/bootstrap.native/dist/bootstrap-native-v4.min.js', 'public/js/bootstrap-native-v4.min.js')
    .copy('node_modules/bootstrap.native/dist/polyfill.min.js', 'public/js/polyfill.min.js')
    .sass('resources/assets/sass/app.scss', 'public/css');

if (mix.inProduction()) {
    mix.version();
}else{

}
