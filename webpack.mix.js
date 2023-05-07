const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js(['resources/js/app.js'], 'public/js').postCss('resources/css/app.css', 'public/css', [
    require('tailwindcss'),
    require('autoprefixer'),
]);

mix.styles(
    [
        "resources/css/adminlte.min.css",
        "resources/css/adminlte.components.min.css",
        "resources/css/adminlte.core.min.css",
        "resources/css/adminlte.extra-components.min.css",
        "resources/css/adminlte.light.min.css",
        "resources/css/adminlte.pages.min.css",
        "resources/css/adminlte.plugins.min.css",
        "resources/css/plugin/fontawesome/all.min.css",
        "resources/css/plugin/tempusdominus/tempusdominus-bootstrap-4.min.css",
        "resources/css/plugin/tempusdominus/tempusdominus-bootstrap-4.min.css",
        "resources/css/plugin/icheck/icheck-bootstrap.min.css",
        "resources/css/plugin/jqvmap/jqvmap.min.css",
        "resources/css/plugin/overlayscrollbars/OverlayScrollbars.min.css",
        "resources/css/plugin/daterangepicker/daterangepicker.css",
        "resources/css/plugin/summernote/summernote-bs4.min.css"

    ],
    'public/css/app.css'
);

mix.scripts(
    [
        "resources/js/plugin/jquery/jquery.min.js",
        "resources/js/plugin/jquery-ui/jquery-ui.min.js",
        "resources/js/plugin/bootstrap/bootstrap.bundle.min.js",
        "resources/js/plugin/chart/Chart.min.js",
        "resources/js/plugin/sparklines/sparkline.js",
        "resources/js/plugin/jqvmap/jquery.vmap.min.js",
        "resources/js/plugin/jqvmap/jquery.vmap.usa.js",
        "resources/js/plugin/jquery-knob/jquery.knob.min.js",
        "resources/js/plugin/moment/moment.min.js",
        "resources/js/plugin/daterangepicker/daterangepicker.js",
        "resources/js/plugin/tempusdominus/tempusdominus-bootstrap-4.min.js",
        "resources/js/plugin/summernote/summernote-bs4.min.js",
        "resources/js/plugin/overlayscrollbars/jquery.overlayScrollbars.min.js",
        "resources/js/adminlte.min.js",
        "resources/js/dashboard.js",
    ],
    'public/js/app.js'
);
