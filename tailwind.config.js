/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      spacing: {
        15: '3.8rem',
        97: '26.5rem',
        100: '45.5rem',
      }
    },
  },
  plugins: [],
}
