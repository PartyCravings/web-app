const Encore = require('@symfony/webpack-encore');
// require offline-plugin
const OfflinePlugin = require('offline-plugin');
// manifest plugin
const ManifestPlugin = require('webpack-manifest-plugin');

const commonChunk = require("webpack/lib/optimize/CommonsChunkPlugin");

const HtmlCriticalPlugin = require("html-critical-webpack-plugin");


var path = Encore.isProduction() ? 'https://assets.partycravings.com/build' : '/build';

Encore
    // directory where all compiled assets will be stored
    .setOutputPath('web/build/')

    // what's the public path to this directory (relative to your project's document root dir)
    .setPublicPath(path)

    // empty the outputPath dir before each build
    .cleanupOutputBeforeBuild()

    // will output as web/build/app.js
    .addEntry('app', './assets/js/main.js')

    .addEntry('home', './assets/js/home.js')

    .addEntry('login', './assets/js/login.js')

    // will output as web/build/img.js
    .addEntry('img', './assets/img/images.js')

    .addEntry('slider', './assets/js/jquery.jssor.js')

    .addEntry('sticklr', './assets/js/jquery.sticklr.js')

    // will output as web/build/global.css
    .addStyleEntry('global', './assets/css/global.scss')

    // allow sass/scss files to be processed
    .enableSassLoader()

    // allow legacy applications to use $/jQuery as a global variable
    //.autoProvidejQuery()

    /*.enableReactPreset()

    .configureBabel(function(babelConfig) {
        // add additional presets
        babelConfig.presets.push('es2017');

        // no plugins are added by default, but you can add some
        babelConfig.plugins.push('styled-jsx/babel');
    })*/
    .enableSourceMaps(!Encore.isProduction())

    .addPlugin(new commonChunk({
    name: 'chunck',
    async: true
    }))

    .addPlugin(new ManifestPlugin({
    fileName: 'manifest-main.json',
    basePath: '/build/',
    seed: {
        short_name: "PartyCraving",
        name: "PartyCravings Inc.",
        start_url: "/",
        icons: [{
            src: "/build/images/256.png",
            sizes: "256x256",
            type: "image/png"
        },
            {
                src: "/build/images/512.png",
                sizes: "512x512",
                type: "image/png"
            }
        ],
        background_color: "#FF8300",
        theme_color: "#FF8300",
        display: "standalone",
        orientation: "portrait",
        gcm_sender_id: "314804067424"
    }
    }))
    // push offline-plugin it must be the last one to use
    .addPlugin(new OfflinePlugin({
    strategy: "changed",
    responseStrategy: "cache-first",
    publicPath: '/build/',
        caches: {
            // offline plugin doesn't know about build folder
            // if I added build in it , it will show something like : OfflinePlugin: Cache pattern [build/images/*] did not match any assets
                        additional: [
                ':externals:'
            ]/*,
            optional: [
                ':rest:'
            ],*/
        },
        externals: [
            '/',
            'https://fonts.googleapis.com/css?family=Quicksand:400,700,400italic,700italic&subset=latin'
            ],
    ServiceWorker: {
        events: Encore.isProduction(),
        entry: "./assets/js/sw.js",
        cacheName: "partycravings",
        navigateFallbackURL: '/',
        navigateFallbackForRedirects: false,
        minify: Encore.isProduction(),
        output: "./../sw.js",
        scope: "/"
    },
    AppCache: {
        caches: ["additional"],
        FALLBACK: {
                '/': '/'
        }
    }
    }))

    /*.addPlugin(
        new HtmlCriticalPlugin({
      base: 'web',
      src: 'styles.html',
      dest: 'compiled-styles.html',
      inline: true,
      minify: true,
      extract: true,
      width: 375,
      height: 565,
      penthouse: {
        blockJSRequests: false,
      }
    }))*/
    // create hashed filenames (e.g. app.abc123.css)
    .enableVersioning()
;
if (Encore.isProduction()) {
    Encore.setManifestKeyPrefix('build/');
}

// export the final and modified configuration
module.exports = Encore.getWebpackConfig();
