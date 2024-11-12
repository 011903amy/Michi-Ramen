/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./dist/*.{html,js}"],
  theme: {
    container: {
      center: true,
      padding: "2rem",
    },
    extend: {
      colors: {
        light: "#ffff",
        dark: "#0000",
        primary: "#F6AD49",
        secondary: "#F8F5EB",
        tertiary: "#E60033",
        footer: "#433D3C",
      },
      fontFamily: {
        montserrat: "Montserrat",
        economica: "Economica",
        coming_soon: "Coming Soon",
      },

      backgroundImage: {
        wood: "url('../image/wood.jpg')",
        menu: "url('../image/bg.png')",
      },
    },
  },
  plugins: [],
};

