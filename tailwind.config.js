/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {

        extend: {
            colors: {
                "cool-blue": "#3d86b8",
                "cool-blue-hover": "#3678a5",
                "cool-blue-click": "#306b93",
                "medium-turquoise": "#56cfe2",
                "oasis": "#f8efcf",
                "cyan-blue": "#90b4e1",
                "light-plum": "#b04e93",
                "medium-forest-green": "#39712a",
                "light-slate-grey": "#6c7b88",

                "success": "#39712a",
                "error": "#960000",
            },
            backgroundColor: {
                "cool-blue": "#3d86b8",
                "cool-blue-hover": "#3678a5",
                "cool-blue-click": "#306b93",
                "medium-turquoise": "#56cfe2",
                "oasis": "#f8efcf",
                "cyan-blue": "#90b4e1",
                "light-plum": "#b04e93",
                "medium-forest-green": "#39712a",
                "light-slate-grey": "#6c7b88",
                "success": "#edf7ee",
                "error": "#f4e5e5",

                "danger": "#960000",

            },
            borderColor: {
                "cool-blue": "#3d86b8",
                "cool-blue-hover": "#3678a5",
                "cool-blue-click": "#306b93",
                "medium-turquoise": "#56cfe2",
                "oasis": "#f8efcf",
                "cyan-blue": "#90b4e1",
                "light-plum": "#b04e93",
                "medium-forest-green": "#39712a",
                "light-slate-grey": "#6c7b88",
                "success": "#39712a",
                "error": "#960000"
            },

        },
    },
    plugins: [],
}

