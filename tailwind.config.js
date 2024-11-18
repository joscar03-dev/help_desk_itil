/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './resources/**/*.blade.php', // Archivos Blade
    './resources/**/*.js',        // Archivos JS
    './resources/**/*.vue',       // Archivos Vue (si usas Vue)
  ],
  theme: {
    extend: {},
  },
  plugins: [],
}

