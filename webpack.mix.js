let mix = require('laravel-mix');

mix.sass('.src/scss/main.scss', 'assets/css')
	.options({
		processCssUrls: false,
		postCss: [
			require('css-mqpacker'),
		],
	});

mix.combine(['.src/js/main.js'], 'assets/js/main.js', 'assets/js')