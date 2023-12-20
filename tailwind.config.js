import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './vendor/laravel/jetstream/**/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            animation: {
                'bounce-slow': 'bounceSlow 5s ease infinite',
                'fade-in-down': 'fade-in-down 0.5s ease-out',
                'ping-slow': 'ping-slow 1s cubic-bezier(0, 0, 0.2, 1) infinite',
            },
            keyframes: {
                bounceSlow : {
                    '0%, 100%': { transform: 'translateY(-5%)', animationTimingFunction: 'cubic-bezier(0.8,0,1,1)' },
                    '50%': { transform: 'translateY(5%)', animationTimingFunction: 'cubic-bezier(0,0,0.2,1)' },
                },
                'fade-in-down': {
                    '0%': { opacity: 0, transform: 'translateY(-10px)' },
                    '100%': { opacity: 1, transform: 'translateY(0)' },
                },
                'ping-slow': {
                    '75%, 100%': { transform: 'scale(1.2)', opacity: 0 },
                }
            },
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                lobster: ['"Lobster"', ...defaultTheme.fontFamily.sans],
                outfit: ['"outfit"', ...defaultTheme.fontFamily.sans],
                body: [
                    'Inter',
                    'ui-sans-serif',
                    'system-ui',
                ],
            },
        },
    },

    plugins: [forms, typography],
};
