/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {

        extend: {
            fontFamily: {
                jomhuria: "'Jomhuria', serif",
                josefin: "'Josefin Slab', serif",
                jost: "'Jost', sans-serif",
            },
            colors: {
                indepen: "#4B566B",
                crayola: "#2B3445",
                lavender: "#E8EAFC",
                gainsboro: "#DAE1E7",
                maize: "#FFCD4E",

                "light-blue": "#5C6DFF",
                "ghost-white": "#F6F9FC",
                "pastel-blue": "#B7C2CF",
                "midnight-blue": "#0F3460",
                "slate-gray": "#7D879C",
                "tea-green": "#C2F1D1",
                "dark-vanilla": "#DAC3B5",
                "columbia-Blue": "#CED7E2",
            },
            boxShadow: {
                "categoris-box": " 0px 8px 45px 0px rgba(3, 0, 71, 0.09)",
                product_normal_s: "0px 1px 3px rgba(3, 0, 71, 0.09)",
                product_hover_b: "0px 8px 45px rgba(3, 0, 71, 0.09)",
                product_function: "0px 2px 10px 4px rgba(0, 0, 0, 0.05)",
            },
            spacing: {
                200: "12.5rem",
                120: "7.5rem",
                260: "16.25rem",
            },
            borderRadius: {
                '10x':"0.625rem",
            },
            fontSize: {
                "40x":'2.5rem'
                },
        },
    },
    plugins: [],
};
