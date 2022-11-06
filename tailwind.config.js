/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./node_modules/flowbite/**/*.js",
    ],
    darkMode: "class",
    theme: {
        extend: {
            colors: {
                // temaa: "##f472b6",
                temaku: "#0d9488",
                temakuhover: "#0f766e",
            },
        },
    },
    plugins: [require("flowbite/plugin")],
};
