import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import taos from 'taos/plugin';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [
        forms,
        taos,
    ],

    safelist: [
        '!duration-[0ms]',
        '!delay-[0ms]',
    ],
};