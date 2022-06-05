const path = require("path");
const ENTRY = {
    app:"./src/js/app.js",
    main:"./src/js/index.js"
};
module.exports = {
    watch:true,
    entry: ENTRY,
    output: {
        filename: "[name]/index.js",
        path: path.resolve(__dirname, "dist"),
    },
    module: {
        rules: [
            {
                test: /\.(sa|sc|c)ss$/,
                use: [
                    {
                        loader: 'style-loader',
                        options: { injectType: "singletonStyleTag" }
                    },
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
        ]
    },
    resolve: {
        extensions: ['.js', '.jsx', '.scss']
    }
}