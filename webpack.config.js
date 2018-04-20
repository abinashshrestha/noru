const path = require('path');
const UglifyJSPlugin = require('uglifyjs-webpack-plugin');
const webpack = require('webpack');
const BrowserSyncPlugin = require('browser-sync-webpack-plugin');

const settings = {
    // The BrowserSync hostname
    host: 'localhost',
    // The port to run BrowserSync's server on
    port: 8000,

    // A target to proxy all BrowserSync requests to.
    // This can be a local web server, Vagrant or a docker container.
    // This is your local/VM WordPress development site.
    proxy: 'localhost:3030',

    // If you have your Site URL for WordPress set to anything else other than the proxy address,
    // we need to override all URL. In this example I am overriding my site at http://training-ground.local
    urlOverride: /training-ground\.local/g
};

/*const ExtractTextPlugin = require("extract-text-webpack-plugin");*/
/*const extractSass = new ExtractTextPlugin({
    filename: ".dist/css/[name].min.css",
});*/

module.exports = {
    entry: './js/app.js',
    devServer: {
        contentBase: './dist',
        hot: true
    },
    plugins: [
        // Adding our UglifyJS plugin
        new UglifyJSPlugin(),
        new webpack.NamedModulesPlugin(),
        new webpack.HotModuleReplacementPlugin(),
        new BrowserSyncPlugin({
            host: settings.host,
            port: settings.port,
            proxy: settings.proxy,
            rewriteRules: [
                {
                    match: settings.urlOverride,
                    fn: function (req, res, match) {
                        return settings.host + ':' + settings.port;
                    }
                }
            ]
        })

        // extractSass
    ],
    output: {
        filename: 'app.js',
        path: path.resolve(__dirname, 'dist/js')
    },
    module: {
        rules: [
            {
                test: /\.css$/,
                use: [
                    'style-loader',
                    'css-loader'
                ]
            },
            {
                test: /\.js$/,
                exclude: /(node_modules|bower_components)/,
                use: {
                    loader: 'babel-loader',
                    options: {
                        presets: ['babel-preset-env']
                    }
                }
            },
            {
                test: /\.scss$/,
                use: [{
                    loader: "style-loader" // creates style nodes from JS strings
                }, {
                    loader: "css-loader?sourceMap" // translates CSS into CommonJS
                }, {
                    loader: "postcss-loader?sourceMap" // compiles PostCSS to CSS
                }, {
                    loader: "sass-loader?sourceMap" // compiles Sass to CSS
                }]

                /*use: extractSass.extract({
                    use: [{
                        loader: "css-loader",
                        options: {
                            minimize: true
                        }
                    }, {
                        loader: "sass-loader"
                    }],
                    // use style-loader in development
                    fallback: "style-loader"
                })*/
            },
            {
                test: /\.(png|svg|jpg|gif)$/,
                use: [
                    {
                        loader: 'url-loader',
                        options: {
                            fallback: 'file-loader',
                            limit: 8192,
                            name: 'images/[name]-[hash].[ext]'
                        }
                    }
                ]
            },
            {
                test: /\.(eot|otf|woff|woff2|ttf|svg)(\?\S*)?$/,
                use: [
                    'url-loader'
                ]
            }
        ]
    }
};