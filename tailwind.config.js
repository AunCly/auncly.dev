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
            backgroundImage: {
                'hero-pattern': "linear-gradient(to right bottom, rgba(43, 108, 176, 0.9), rgba(43, 108, 176, 0.9)), url('https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Ftse3.mm.bing.net%2Fth%3Fid%3DOIP.eAFxNBriFW8k0jCNOTCe6gHaHs%26pid%3DApi&f=1')"
            }
        },
    },
    plugins: [],
}
