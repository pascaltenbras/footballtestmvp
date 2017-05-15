const elixir = require('laravel-elixir');

elixir.config.sourcemaps = false;

elixir((mix) => {

	mix.less([
		'agency.less'
		], 'public/css/agency.min.css');

	mix.less([
		'own.less'
		], 'public/css/own.css');

	mix.scripts([
		'agency.js',
		'contact_me.js',
		'jsBootstrapValidation.js'
		], 'public/js/front.js');


	mix.scripts([
		'mustache.js'
		], 'public/js/mustache.js');

});