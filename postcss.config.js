const DEV = process.env.NODE_ENV !== 'production';

const path = require('path');

const themeName = 'theprescript-theme';
const fontsPath = path.join(__dirname, `wp-content/themes/${themeName}/skin/assets/fonts`);

const plugins = [
  require('postcss-import')(),
  require('stylelint')(),
  require("postcss-cssnext")(),
  require('css-mqpacker')(),
  require("postcss-reporter")({ clearReportedMessages: true })
];

// Use only for production build
if (!DEV) {
  plugins.push(require('cssnano'));
}

module.exports = {plugins};
