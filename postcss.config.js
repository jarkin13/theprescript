const DEV = process.env.NODE_ENV !== 'production';

const path = require('path');

const themeName = 'theprescript-theme';
const fontsPath = path.join(__dirname, `wp-content/themes/${themeName}/skin/assets/fonts`);

const plugins = [
  require('autoprefixer'),
  require('css-mqpacker')
];

// Use only for production build
if (!DEV) {
  plugins.push(require('cssnano'));
}

module.exports = {plugins};
