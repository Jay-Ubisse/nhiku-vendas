/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./**/*.php"],
  theme: {
    screens: {
      'mobile': '320px',
      'tablet': '481px',
      'laptop': '1024px',
      'desktop': '1024px',
    },
    fontFamily: {
      'inter': 'Inter, sans-serif',
    },
    fontSize: {
      '2xs': ['14px', '20px'],
      xs: ['16px', '24px'],
      base: ['20px', '28px'],
      lg: ['24px', '32px'],
    },
    fontWeight: {
      thin: 100,
      extralight: 200,
      ligth: 300,
      regular: 400,
      semibold: 600,
      bold: 700,
     },
    extend: {
      colors: {
        'blue-binario': '#023E8A',
        'gray-binario': '#D9D9D9',
      },
    },
  },
  plugins: [],
}
