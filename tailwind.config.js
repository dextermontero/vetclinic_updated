/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      transformOrigin: {
        "0": "0%",
      },
      zIndex: {
        "-1": "-1",
      },
      spacing: {
        15: '3.8rem',
        97: '26.5rem',
        98: '34rem',
        'center': '43rem',
        100: '45.5rem',
      }
    },
  },
  plugins: [],
}
