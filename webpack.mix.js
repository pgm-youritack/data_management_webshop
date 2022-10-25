let mix = require('laravel-mix');
mix.sass('resources/scss/index.scss', 'public/css');
mix.browserSync({
    proxy: 'localhost:8000'
});
mix.scripts('node_modules/bootstrap/dist/js/bootstrap.js','public/js/bootstrap.js')