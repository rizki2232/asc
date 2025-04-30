/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./*.php",
    "./views/**/*.php",
    "./src/**/*.{html,js}",
  ],
  theme: {
    extend: {
      colors: {
        primary: "#11235A",
      },
      fontFamily: {
        sans: ["Onest", "sans-serif"],
      },
    },
  },
  plugins: [],
}
