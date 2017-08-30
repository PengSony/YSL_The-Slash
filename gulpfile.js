var gulp = require('gulp');
var elixir = require('laravel-elixir');

elixir(function (mix) {
    mix.sass('styleWelcome2.scss');
});
elixir(function (mix) {
    mix.sass('News.scss');
});
