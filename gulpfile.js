var elixir = require('laravel-elixir');

elixir(function(mix) {
    mix.sass(['app.scss'])
        .phpUnit()
        .styles([
            'libs/fonts.css',
            'libs/bootstrap-datetimepicker.min.css',
            'libs/select2.min.css',
            'libs/futurico.css',
            'libs/fileinput.min.css',
            'nav.css'
        ], 'public/css/allLibries.css')
        .scripts([
            'libs/jquery.min.js',
            'libs/bootstrap.min.js',
            'libs/bootstrap-datetimepicker.min.js',
            'libs/jquery.fittext.min.js',
            'libs/select2.min.js',
            'master.js',
            'libs/fileinput/js/fileinput.min.js',
            'libs/checkbox/icheck.min.js'
        ], 'public/js/allLibries.js')
});
