/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './app/Views/**/*.php',
    './node_modules/flowbite/**/*.js',
    './public/js/index.js'
  ],
  theme: {
    extend: {
      colors: {
        myWhite: '#f6f8f8',
        myBlack: '#131313'
      }
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
}
