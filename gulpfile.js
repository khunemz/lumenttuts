var elixir = require('laravel-elixir');


elixir(function(mix) {
    mix.styles('*.css', 'public/css/');
    mix.scripts(['jquery.min.js',
        'bootstrap.min.js' ,
        '*.js'
    ],'public/js/');
});
