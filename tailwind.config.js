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

        },
    },
    daisyui: {
        themes: [
            {
                dayMode: {

                    "primary": "#00b0de",

                    "secondary": "#a99700",

                    "accent": "#d61d00",

                    "neutral": "#e6e6e6",

                    "base-100": "#d4d3d3",

                    "info": "#00f1ff",

                    "success": "#83f536",

                    "warning": "#eb5800",

                    "error": "#f89",

                    "base-300": "#fff",

                },
            },
            {
                darkMode : {
                    "primary": "#ff0092",

                    "secondary": "#0073ff",

                    "accent": "#977b00",

                    "neutral": "#121d30",

                    "base-100": "#2c2a30",

                    "info": "#4ad7ff",

                    "success": "#a9e930",

                    "warning": "#ffbe00",

                    "error": "#ff5274",

                    "base-300":"#35333a",
                }
            },
        ],
    },

    plugins: [forms,require("daisyui")],
};
