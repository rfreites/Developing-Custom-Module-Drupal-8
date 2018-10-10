const mix = require('laravel-mix');

mix
  .sass('scss/style.scss', 'css/')
  .js('scripts/main.js', 'js');

mix.options({
  processCssUrls: false
});