let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

// Set project paths
let localDomain = 'mabr-practice.test';
// let assetsPath  = `resources/assets`;
let publicPath  = `public`;

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css')

// Setup BrowserSync
.browserSync({
 proxy: localDomain,
 host: localDomain,
 notify: false,
 browser: 'google chrome',
 open: 'external',
 injectChanges: true,
 files: [
   `**/*.php`,
   `${publicPath}/**/*.js`,
   `${publicPath}/**/*.css`
 ]
})

// Setup versioning (cache-busting)
if (mix.inProduction()) {
 mix.version();
 mix.babel(`${publicPath}/js/main.js`, `${publicPath}/js/main.js`);
}
