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
            },
            height: {
                "10v": "10vh",
                "65v": "65vh",
                "15v": "15vh",
            },
            colors: {
                "header": "#162b3b",
                "footer": "#a39da0",
                "main": "#244761",
                "nav": "#1f3b54",
            }

        },
    },
    daisyui: {
        themes: [
            {
                mytheme: {

                    "primary": "#00b0de",

                    "secondary": "#a99700",

                    "accent": "#d61d00",

                    "neutral": "#162b3b",

                    "base-100": "#202f42",

                    "info": "#00f1ff",

                    "success": "#83f536",

                    "warning": "#eb5800",

                    "error": "#ff0044",
                },
            },
        ],
    },

    plugins: [forms,require("daisyui")],
};
