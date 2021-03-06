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

    // will output as web/build/img.js
    .addEntry('img', './assets/img/images.js')

    .addEntry('offline', './assets/js/offline.js')

    .addEntry('slider', './assets/js/jquery.jssor.js')

    .addEntry('sticklr', './assets/js/jquery.sticklr.js')

    .addEntry('sticky', './assets/js/jquery.sticky.js')

    .addEntry('lockfixed', './assets/js/jquery.sticky.lockfixed.min.js')

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
        short_name: "Cravings",
        name: "PartyCravings Inc.",
        start_url: "/",
        "icons": [
  {
   "src": "\/android-icon-36x36.png",
   "sizes": "36x36",
   "type": "image\/png",
   "density": "0.75"
  },
  {
   "src": "\/android-icon-48x48.png",
   "sizes": "48x48",
   "type": "image\/png",
   "density": "1.0"
  },
  {
   "src": "\/android-icon-72x72.png",
   "sizes": "72x72",
   "type": "image\/png",
   "density": "1.5"
  },
  {
   "src": "\/android-icon-96x96.png",
   "sizes": "96x96",
   "type": "image\/png",
   "density": "2.0"
  },
  {
   "src": "\/android-icon-144x144.png",
   "sizes": "144x144",
   "type": "image\/png",
   "density": "3.0"
  },
  {
   "src": "\/android-icon-192x192.png",
   "sizes": "192x192",
   "type": "image\/png",
   "density": "4.0"
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
    safeToUseOptionalCaches: true,
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
            '/offline',
            'https://fonts.googleapis.com/css?family=Quicksand:400,700,400italic,700italic&subset=latin'
            ],
    ServiceWorker: {
        events: Encore.isProduction(),
        entry: "./assets/js/sw.js",
        cacheName: "partycravings",
        navigateFallbackURL: '/offline',
        navigateFallbackForRedirects: false,
        minify: Encore.isProduction(),
        output: "./../sw.js",
        scope: "/"
    },
    AppCache: {
        caches: ["additional"],
        FALLBACK: {
                '/': '/offline'
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
