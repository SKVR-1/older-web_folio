/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    screens: {
      sm: '480px',
      md: '768px',
      lg: '976px',
      xl: '1440px',
    },

    fontWeight: {
      thin: '100',
      hairline: '100',
      extralight: '200',
      light: '300',
      normal: '400',
      medium: '500',
      semibold: '600',
      bold: '700',
      extrabold: '800',
      
    },

    outline: {
      whiteoutline: '1px solid #fffff',

    },
    
    colors: {
      'blue': '#1fb6ff',
      'black': '#000',
      'white': '#fff',
      'purple': '#7e5bef',
      'orange': '#ff7849',
      'pink': '#e91e63',
      'green': '#13ce66',
      'yellow': '#ffc82c',
      'gray-dark': '#273444',
      'gray': '#8492a6',
      'gray-light': '#d3dce6',

      'silver': {
        '50': '#f7f7f7',
        '100': '#ededed',
        '200': '#dfdfdf',
        '300': '#c4c4c4',
        '400': '#adadad',
        '500': '#999999',
        '600': '#888888',
        '700': '#7b7b7b',
        '800': '#676767',
        '900': '#545454',
        '950': '#363636',
    },
    
    'chartreuse-yellow': {
      '50': '#feffe4',
      '100': '#fbffc4',
      '200': '#f5ff90',
      '300': '#e8ff50',
      '400': '#d8ff14',
      '500': '#bae600',
      '600': '#90b800',
      '700': '#6d8b00',
      '800': '#566d07',
      '900': '#485c0b',
      '950': '#253400',
  },

    'bahia': {
      '50': '#fafce9',
      '100': '#f4f8cf',
      '200': '#e9f2a4',
      '300': '#d6e76f',
      '400': '#c2d843',
      '500': '#b2ce27',
      '600': '#809719',
      '700': '#617417',
      '800': '#4d5c18',
      '900': '#424e19',
      '950': '#222b08',
  },
},
    
    fontFamily: {
      html: ['poppins', 'sans-serif'],
      
    },
    
    extend: {
      spacing: {
        '128': '32rem',
        '144': '36rem',
      },
      borderRadius: {
        '4xl': '2rem',
      }
    }
  }
}