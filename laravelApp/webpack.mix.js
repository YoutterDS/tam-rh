const mix = require('laravel-mix');

mix.setPublicPath('./../www/')
    .js('resources/js/dashboard.js', 'app/js').sourceMaps()
    .sass('resources/css/dashboard.scss', 'app/css').sourceMaps()
    .options({
        processCssUrls: false,
        postCss: [
            require('autoprefixer')({
                overrideBrowserslist: ['last 6 versions'],
                grid: false,
                cascade: false
            })
        ]
    })
    .browserSync('tam-rh-l8.test');
