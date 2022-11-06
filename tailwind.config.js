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
                temaku: "#ec4899",
                temakuhover: "#db2777",
            },
        },
    },
    plugins: [require("flowbite/plugin")],
};
