import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */

module.exports = {
    theme: {
      extend: {
        gridTemplateRows: {
          // Simple 16 row grid
          '16': 'repeat(16, minmax(0, 1fr))',
  
          // Complex site-specific row configuration
          'layout': '200px minmax(900px, 1fr) 100px',
        }
      }
    }
  }

export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [forms],
};
