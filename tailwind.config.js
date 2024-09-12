/** @type {import('tailwindcss').Config} */
export default {
    darkMode: 'class',
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    safelist: [
        "list-disc",
        "list-inside",
    ],
    theme: {
        extend: {
            fontFamily: {
                title: ['Space Grotesk'],
                sans: ['Open Sans'],
            },
        },
    },
    plugins: [],
}
