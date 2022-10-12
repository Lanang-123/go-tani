const defaultTheme = require('tailwindcss/defaultTheme');

/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Nunito', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'ijo-tua' : '#065C5F',
                'ijo-muda' : '#06B3B9',
                'abu' : '#D9D9D9',
                'ijo-muda2' : '#B3F0F2'
            }
        },
    },

    plugins: [require('@tailwindcss/forms')],
};
