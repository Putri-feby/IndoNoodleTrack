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
                sans: ['Montserrat', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'primary': '#00A0B2',
                'primary-light': '#CCF2F4',
                'tertiary': '#F4F9F9',
                'teal': {
                    '50': '#f0fdfc',
                    '100': '#ccf2f4',
                    '200': '#99e6e9',
                    '300': '#66d9de',
                    '400': '#33cdd3',
                    '500': '#00A0B2',
                    '600': '#008895',
                    '700': '#007078',
                    '800': '#00585c',
                    '900': '#00403f',
                },
            },
        },
    },

    plugins: [forms],
};
