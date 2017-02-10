const { mix } = require('laravel-mix');



mix.js('resources/assets/js/site/app.js', 'public/js')
   .js('resources/assets/js/admin/admin.js', 'public/js')
   .sass('resources/assets/sass/site/app.scss', 'public/css')
   .sass('resources/assets/sass/admin/admin.scss', 'public/css');
