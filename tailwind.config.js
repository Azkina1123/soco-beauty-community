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
                "medium-turquoise": "#56cfe2",
                "oasis": "#f8efcf",
                "cyan-blue": "#90b4e1",
                "light-plum": "	#b04e93",
                "medium-forest-green": "#39712a",
                "light-slate-grey": "#6c7b88",
            },
            backgroundColor: {
                "cool-blue": "#3d86b8",
                "medium-turquoise": "#56cfe2",
                "oasis": "#f8efcf",
                "cyan-blue": "#90b4e1",
                "light-plum": "	#b04e93",
                "medium-forest-green": "#39712a",
                "light-slate-grey": "#6c7b88",
            },
            borderColor: {
                "cool-blue": "#3d86b8",
                "medium-turquoise": "#56cfe2",
                "oasis": "#f8efcf",
                "cyan-blue": "#90b4e1",
                "light-plum": "	#b04e93",
                "medium-forest-green": "#39712a",
                "light-slate-grey": "#6c7b88",
            },

        },
    },
    plugins: [],
}

