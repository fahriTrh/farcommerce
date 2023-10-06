import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
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
                roboto: ['Roboto'],
                notoSerif: ['Noto Serif', 'serif'],
            },
            colors: {
                primary: 'rgb(39,65,86)',
                accent: 'rgb(29,28,31)',
                grays: 'rgb(245,245,245)',
                mask: 'rgb(39,65,86)',
            },
            keyframes: {
                slideEffect: {
                    '0%': {opacity: '0'},
                    '100%': {opacity: '1'}
                }
            },
            animation: {
                'slide-effect': 'slideEffect 1s linear forwards',
            }
        },
    },

    plugins: [
        forms,
        require('tailwindcss-textshadow'),
        require('tailwind-scrollbar-hide'),
    ],
};
