const DEV = process.env.NODE_ENV !== 'production';

const path = require('path');

const themeName = 'theprescript';
const fontsPath = path.join(__dirname, `wp-content/themes/${themeName}/skin/assets/fonts`);

const plugins = [
  require('autoprefixer'),
  require('postcss-font-magician')({
    hosted: [fontsPath],

    // This method doesent support subsets so if you are using subsets this can't help you!
    variants: {
      'Lato': {
        100: [],
        300: [],
        400: [],
        700: []
      }
    },
    foundries: ['google']
  }),
  require('css-mqpacker')
];

// Use only for production build
if (!DEV) {
  plugins.push(require('cssnano'));
}

module.exports = {plugins};
