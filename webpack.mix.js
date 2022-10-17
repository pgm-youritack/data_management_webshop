let mix = require('laravel-mix');
mix.sass('resources/scss/index.scss', 'public/css');
mix.browserSync({
    proxy: 'localhost:8000'
});