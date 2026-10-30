/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.vue',
        './resources/js/**/*.ts',
    ],
    theme: {
        extend: {
            colors: {
                brand: {
                    blue: '#0078D4',
                    navy: '#12314A',
                    slate: '#334155',
                    green: '#107C10',
                    purple: '#5C2D91',
                    gold: '#C99732',
                    neutral: '#F4F6F8',
                    border: '#E1E7ED',
                }
            },
            fontFamily: {
                sans: ['Inter', 'system-ui', 'sans-serif'],
            }
        },
    },
    plugins: [],
}
