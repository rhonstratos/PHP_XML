const path = require("path");
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
/* const webpack = require("webpack") */
const ENTRY = {
    //app:"./src/js/app.js",
    main: "./src/js/index.js"
};
module.exports = {
    watch: true,
    entry: ENTRY,
    output: {
        filename: "js/[name].js",
        path: path.resolve(__dirname, "dist"),
    },
    plugins: [
        new MiniCssExtractPlugin({
            filename: "style/styles.css"
        }),
        /* new webpack.ProvidePlugin({
            $: 'jquery',
            jQuery: 'jquery',
            "window.jQuery": "jquery"
        }) */
    ],
    module: {
        rules: [
            {
                test: /\.(sa|sc|c)ss$/,
                use: [
                    MiniCssExtractPlugin.loader,
                    { loader: 'css-loader' },
                    {
                        loader: 'postcss-loader',
                        options: {
                            postcssOptions: {
                                plugins: function () {
                                    return [
                                        require('autoprefixer')
                                    ];
                                }
                            }
                        }
                    },
                    { loader: 'sass-loader' }
                ]
            },
            {
                test: /\.(woff|woff2|eot|ttf|otf)$/,
                type: 'asset/resource',
            },
            /*
            {
                test: /\.(woff|woff2|eot|ttf|otf)$/,
                use: [{
                    loader: 'file-loader',
                    options: {
                        outputPath: 'fonts'
                    }
                }]
            },*/
            {
                test: /\.(png|jpg|gif)$/,
                type: 'asset/resource',
                use: [{
                    loader: 'file-loader',
                    options: {
                        outputPath: 'images'
                    }
                }],
            }
        ]
    },
    resolve: {
        extensions: ['*', '.js', '.jsx', '.scss']
    }
}