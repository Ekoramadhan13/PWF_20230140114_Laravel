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
                sans: ['Inter', 'Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                navy: {
                    950: '#0b1120', // Matte deep background
                    900: '#1e293b', // Card surface
                    800: '#334155', // Borders/Hover
                },
                brand: {
                    primary: '#4f46e5', // Solid Indigo
                    secondary: '#6366f1',
                }
            }
        },
    },

    plugins: [forms],
};
