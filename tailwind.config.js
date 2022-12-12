/** @type {import('tailwindcss').Config} */

module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
  theme: {
      extend: {
      backgroundImage: {
          'hero-pattern': "url('../public/img/dns.jpg')')",
      },
      },
  },
    colors:{
        'blueGray-800' :'#0d3144'
    },
  plugins: [],
}
