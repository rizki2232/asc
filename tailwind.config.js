import defaultTheme from "tailwindcss/defaultTheme";

/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "/**/*.{html, php}",
  ],
  theme: {
    extend: {
      colors: {
        primary: "#00137D",
      },
      fontFamily: {
        sans: ["Onest", ...defaultTheme.fontFamily.sans],
      },
    },
  },
};
