const mix = require('laravel-mix');

mix.js('resources/js/dashboard.js', 'public/js')
   // .sass('resources/sass/app.scss', 'public/css')
   .sass('resources/sass/dashboard.scss', 'public/css')
   // .copy('node_modules/startbootstrap-sb-admin-2/vendor/fontawesome-free/webfonts', 'public/webfonts')
   // .copy('node_modules/bootstrap-select/dist/js/i18n/', 'public/js/bootstrap-select/i18n')
   .options({
        processCssUrls: false,
        postCss: [
            require('autoprefixer')({
                overrideBrowserslist: ['last 6 versions'],
                grid: true,
                cascade: false
            })
        ]
    })
   .browserSync('tam-rh.test')
   .disableSuccessNotifications();
