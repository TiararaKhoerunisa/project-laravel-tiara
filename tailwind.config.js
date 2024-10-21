/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        'dark-gray': '#333333',
        'light-pink': '#F5A9A9',
        'red': '#DC3545',
    }
    },
  },
  plugins: [],
}

