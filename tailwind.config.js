/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/views/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {
      fontFamily: {
        basement: "BasementGrotesque-Black, sans-serif",
        display: "BasementGrotesque-Display, sans-serif",
        space: "SpaceMono-Regular, sans-serif",
        inter: "Inter-Regular, sans-serif",
        montreal: "Neue-Montreal-Medium, sans-serif",
        delight: "Neue-Montreal-Regular-400, sans-serif",
      },
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
};
