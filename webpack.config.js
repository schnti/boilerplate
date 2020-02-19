const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const path = require('path');

module.exports = {
    mode: 'production',
    entry: ['./src/main.js', './src/scss/styles.scss'],
    output: {
        filename: 'main.js',
        path: path.resolve(__dirname, 'public/assets/'),
    },
    module: {
        rules: [
            {
                test: /\.(sa|sc|c)ss$/,
                use: [
                    {
                        loader: MiniCssExtractPlugin.loader,
                        options: {
                            hmr: true,
                        },
                    },
                    'css-loader',
                    'postcss-loader',
                    'sass-loader',
                ],
            },
            {
                test: /\.(js)$/,
                use: ['babel-loader']
            }
        ],
    },
    resolve: {
        extensions: ['*', '.js']
    },
    plugins: [
        new MiniCssExtractPlugin({
            filename: 'main.css',
        }),
    ],
};