import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            boxShadow: {
                framed: '-50px -50px 0 -40px #FEF08A, 50px 50px 0 -40px #FEF08A',
            },
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: '#CCD6F6',
                secondary: '#8892B0',
                jesse: '#FEF08A'
            },
            backgroundImage: {
                'radial-gradient': 'radial-gradient(circle, #002855, #001524)',
              },
        },
    },
    plugins: [],
};
