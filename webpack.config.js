const path               = require('path');
const webpack            = require('webpack');
const BrowserSync        = require('browser-sync-webpack-plugin');
const CleanWebpackPlugin = require('clean-webpack-plugin');
const ExtractTextPlugin  = require('extract-text-webpack-plugin');
const UglifyJSPlugin     = require('uglifyjs-webpack-plugin');

// Paths
const DEV                = process.env.NODE_ENV !== 'production';
const appPath            = `${path.resolve(__dirname)}`;
const proxyUrl           = 'localhost:8888';

// Theme
const themeName          = 'theprescript-theme';
const themePath          = `/wp-content/themes/${themeName}/skin`;
const themeFullPath      = `${appPath}${themePath}`;
const themePublicPath    = `${themePath}/public`;
const themeEntry         = `${themeFullPath}/assets/application.js`;
const themeOutput        = `${themeFullPath}/public`;

// Outputs
const outputJs           = 'scripts/[name].js';
const outputCss          = 'styles/[name].css';
const outputFile         = '[name].[ext]';
const outputImages       = `images/${outputFile}`;
const outputFonts        = `fonts/${outputFile}`;

const BrowerSyncPlugin = new BrowserSync({
  host: 'localhost',
  port: 3000,
  proxy: proxyUrl,
  files: [
    {
      match: ['wp-content/themes/**/*.php', 'wp-content/plugins/**/*.php']
    }
  ]
});

const allPlugins = [
  new CleanWebpackPlugin([themeOutput]),
  new ExtractTextPlugin(outputCss),
  BrowerSyncPlugin,
  new webpack.optimize.ModuleConcatenationPlugin(),
  new webpack.DefinePlugin({
    'process.env': {
      NODE_ENV: JSON.stringify(process.env.NODE_ENV || 'development')
    }
  })
]

if (!DEV) {
  allPlugins.push(
    new UglifyJSPlugin({
      comments: false,
      sourceMap: false,
      warnings: false
    })
  );
}

const allModules = {
  rules: [
    {
      test: /\.js$/,
      use: ['babel-loader', 'eslint-loader'],
      exclude: /node_modules/
    },
    {
      test: /\.(png|svg|jpg|jpeg|gif|ico)$/,
      exclude: [/fonts/],
      use: `file-loader?name=${outputImages}`
    },
    {
      test: /\.(eot|svg|otf|ttf|woff|woff2)$/,
      exclude: [/images/],
      use: `file-loader?name=${outputFonts}`
    },
    {
      test: /\.scss$/,
      use: ExtractTextPlugin.extract({
        fallback: 'style-loader',
        use: [
          {loader: 'css-loader', options: {sourceMap: true}},
          {loader: 'postcss-loader', options: {sourceMap: true}},
          {loader: 'sass-loader', options: {sourceMap: true,}}
        ]
      })
    }
  ]
};

let devtool = '';
if (DEV) {
  devtool = 'source-map';
}

module.exports = [
  {
    context: path.join(__dirname),
    entry: {
      application: [themeEntry]
    },
    output: {
      path: themeOutput,
      publicPath: themePublicPath,
      filename: outputJs
    },
    devtool,
    module: allModules,
    plugins: allPlugins,
    stats: 'minimal'
  }
];
