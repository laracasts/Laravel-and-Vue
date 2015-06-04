var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

//elixir.config.babel.enabled = false;

elixir(function(mix) {
    mix.scripts([
        'vendor/vue.min.js',
        'vendor/vue-resource.min.js'
    ], 'public/js/vendor.js')
});
