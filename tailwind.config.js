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
            fontFamily: {
                sans: ['Inter', ...defaultTheme.fontFamily.sans],
                heading: ['Outfit', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                brand: {
                    dark: '#0B0B0C',
                    secondary: '#111315',
                    card: 'rgba(255, 255, 255, 0.04)',
                    border: 'rgba(255, 255, 255, 0.08)',
                    gold: '#C8A96B',
                    'gold-soft': '#E7D3A8',
                    text: '#F5F5F5',
                    'text-muted': '#B8B8B8',
                }
            },
            backgroundImage: {
                'gradient-radial': 'radial-gradient(var(--tw-gradient-stops))',
                'gradient-hero': 'linear-gradient(to bottom, rgba(11, 11, 12, 0.3) 0%, rgba(11, 11, 12, 1) 100%)',
            },
            boxShadow: {
                'glass': '0 8px 32px 0 rgba(0, 0, 0, 0.3)',
            }
        },
    },
    plugins: [],
};
