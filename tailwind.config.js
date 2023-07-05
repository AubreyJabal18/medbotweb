/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily:{
        'roboto': ['Roboto', 'sans-serif']
        
      },
      backgroundImage: {
      'gradient-136': 'linear-gradient (136deg, var(--tw-gradient-stops))',
      'homepage-accent': "url('/images/homepage/homepage-top-banner.png')",
      },
    },
  },
  plugins: [],
}

