module.exports = {
  purge: ['./index.html', './src/**/*.{vue,js,ts,jsx,tsx}'],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      height:{
        116: '31rem'
      }
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
