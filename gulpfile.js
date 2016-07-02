var elixir = require('laravel-elixir');

var bootstrapDir = "vendor/twbs/bootstrap/";
var fontAwesomeDir = "vendor/components/font-awesome/";
/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.copy(bootstrapDir + "fonts", "public/fonts")
    	.copy(bootstrapDir + "dist/js/bootstrap.min.js", "public/js/bootstrap.min.js")
    	.copy(fontAwesomeDir + "fonts", "public/fonts")
    .less(['app.less', 'custom.less']);
});
