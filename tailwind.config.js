/** @type {import('tailwindcss').Config} */
module.exports = {
    content: ["./plugins/ShopmanagerDocs/templates/**/*.{html,js,php}"],
    theme: {
        extend: {
            fontFamily: {
                'heading': ['Comfortaa', 'cursiv'],
            },
        },
    },
    plugins: [
        require('@tailwindcss/forms'),
    ],
}

