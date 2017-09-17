var path = require('path');
var Encore = require('@symfony/webpack-encore');
// require offline-plugin
var OfflinePlugin = require('offline-plugin');
// manifest plugin
var ManifestPlugin = require('webpack-manifest-plugin');

var commonChunk = require("webpack/lib/optimize/CommonsChunkPlugin");


Encore
    // directory where all compiled assets will be stored
    .setOutputPath('web/build/')

    // what's the public path to this directory (relative to your project's document root dir)
    .setPublicPath('/build')

    // empty the outputPath dir before each build
    .cleanupOutputBeforeBuild()

    // will output as web/build/app.js
    .addEntry('app', './assets/js/main.js')

    // will output as web/build/global.css
    .addStyleEntry('global', './assets/css/global.scss')

    // allow sass/scss files to be processed
    .enableSassLoader()

    // allow legacy applications to use $/jQuery as a global variable
    .autoProvidejQuery()

    .enableReactPreset()

    .configureBabel(function(babelConfig) {
        // add additional presets
        babelConfig.presets.push('es2017');

        // no plugins are added by default, but you can add some
        // babelConfig.plugins.push('styled-jsx/babel');
    })
    .enableSourceMaps(!Encore.isProduction())

    // create hashed filenames (e.g. app.abc123.css)
    //.enableVersioning()
;

// fetch webpack config, then modify it!
var config = Encore.getWebpackConfig();
config.plugins.push(new commonChunk({
    name: 'chunck',
    async: true
}));
config.plugins.push(new ManifestPlugin({
    fileName: 'manifest.json',
    basePath: '/build/',
    seed: {
        "short_name": "PartyCraving",
        "name": "PartyCravings Inc.",
        "start_url": "/",
        "icons": [{
            "src": "/build/images/256.png",
            "sizes": "256x256",
            "type": "image/png"
        },
            {
                "src": "/build/images/512.png",
                "sizes": "512x512",
                "type": "image/png"
            }
        ],
        "background_color": "#2196F3",
        "theme_color": "#2196F3",
        "display": "standalone",
        "orientation": "portrait",
        "gcm_sender_id": "314804067424"
    }
}));
// push offline-plugin it must be the last one to use
config.plugins.push(new OfflinePlugin({
    "strategy": "changed",
    "responseStrategy": "cache-first",
    "publicPath": "/build/",
        "caches": {
            // offline plugin doesn't know about build folder
            // if I added build in it , it will show something like : OfflinePlugin: Cache pattern [build/images/*] did not match any assets
            "main": [
                '*.json',
                '*.css',
                '*.js',
                'fonts/*',
                'images/*'
            ],
        },
    "ServiceWorker": {
        "events": Encore.isProduction(),
        "entry": "./assets/js/sw.js",
        "cacheName": "partycravings",
        "navigateFallbackURL": '/',
        "minify": Encore.isProduction(),
        "output": "./../sw.js",
        "scope": "/"
    },
    "AppCache": {
        "caches": ["main"]
    }
}));

// export the final and modified configuration
module.exports = config;