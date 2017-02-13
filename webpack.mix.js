const { mix } = require('laravel-mix');


/**
 * run once unless itms been updated, comment out when done
 * copy some stuff prior to working
 */
mix.copy('node_modules/normalize.css/normalize.css', 'resources/assets/sass/vendor/_normalize.scss')

/**
 * Site main assets
 */
mix.js('resources/assets/js/site/landing.js', 'public/js')
   .sass('resources/assets/sass/site/landing.scss', 'public/css')
   .sass('resources/assets/sass/site/landing-foot.scss', 'public/css')
   .sass('resources/assets/sass/site/head.scss', 'public/css')
   .sass('resources/assets/sass/site/foot.scss', 'public/css');
/**
 * Admin based assets
 */
mix.js('resources/assets/js/admin/admin.js', 'public/js');
