/** @type {import('tailwindcss').Config} */
module.exports = {
    prefix: "tw-", // <-- add your prefix here
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {},
    },
    plugins: [],
};
