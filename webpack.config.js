const NODE_ENV = process.env.NODE_ENV || 'development';
const webpack = require('webpack');

module.exports = {
    context: __dirname + '/resources/assets',
    entry: {
        main: './js/main'
    },
    output: {
        path: __dirname + '/public/js',
        filename: '[name].js',
        library: 'liga'
    },

    watch: NODE_ENV == 'development',
    watchOption: {
        aggregateTimeout: 100
    },

    devtool: NODE_ENV == 'development' ? 'cheap-inline-module-source-map' : null,

    plugins: [
        new webpack.NoErrorsPlugin(),
        new webpack.DefinePlugin({
            NODE_ENV: JSON.stringify(NODE_ENV)
        }),
        new webpack.optimize.CommonsChunkPlugin({
            name: 'common'
        })
    ],

    resolve: {
        modulesDirectories: ['node_modules'],
        extensions: ['', '.js']
    },

    resolveLoaders: {
        modulesDirectories: ['node_modules'],
        moduleTemplates: ['*-loader', '*'],
        extensions: ['', '.js']
    },

    module: {
        loaders: [{
            test: /\.js$/,
            loader: 'babel?presets[]=es2015'
        }]
    }
};

if (NODE_ENV == 'production') {
    module.exports.plugins.push(
        new webpack.optimize.UglifyJsPlugin({
            compress: {
                warnings: false,
                drop_console: true,
                unsafe: true
            }
        })
    );
}

