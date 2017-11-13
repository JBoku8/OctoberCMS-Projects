var elixir = require('laravel-elixir');

require('laravel-elixir-livereload');


elixir.config.assetsPath = 'themes/mytheme/assets';
elixir.config.publicPath = 'themes/mytheme/assets/compiled';


elixir(function (mix) {
    // mix.sass('styles.scss');


    mix.scripts([
        'jquery.js',
        'app.js'
    ]);

    mix.livereload([
        'themes/mytheme/**/*.htm',
        'themes/mytheme/assets/compiled/js/*.js'
    ]);
});