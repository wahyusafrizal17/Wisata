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
            colors: {
                brand: {
                    50: '#EFF7FD',
                    100: '#D9EEFA',
                    200: '#B3DDF4',
                    300: '#8DCCEE',
                    400: '#5AA6D6',
                    500: '#3D8FC8',
                    600: '#2F78B7',
                    700: '#265F92',
                    800: '#1D476D',
                    900: '#142F48',
                },
            },
            fontFamily: {
                sans: ['Plus Jakarta Sans', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [forms],
};
