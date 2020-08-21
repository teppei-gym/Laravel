const mix = require("laravel-mix");
const glob = require("glob");

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

const ignoreFile = "";

//css のコンパイル
glob.sync("resources/sass/**/*.scss", {
    ignore: ignoreFile
}).map(function(file) {
    let output = file.replace(/resources\/sass/, "public/css");

    mix.sass(file, output.replace(/\.scss/, ".css"));
});
