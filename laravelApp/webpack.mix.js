const mix = require('laravel-mix');

mix.setPublicPath('./../www/')
    .js('resources/js/dashboard.js', 'app/js').sourceMaps()
    .js('resources/js/dashboard/clock.js', 'app/js')
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
    .browserSync('tam-rh.test');
