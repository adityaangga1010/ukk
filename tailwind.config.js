/** @type {import('tailwindcss').Config} */
module.exports = {
content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
],
theme: {
    colors : {
        putih: '#fff',
        biru: '#3d5a80  ',
        merah: '#e07a5f',
        utama: '#403d39',
        kedua: '#CDCDCD',
        ketiga: '#949CA9',
        keempat: '#81b29a',
        kelima: '#F4F4F4',
        kuning: '#f2cc8f',
        orange: '#FF6E04',
    },
    extend: {
        fontFamily: {
            DMSANS : ['DM Sans', 'sans-serif'],
        },
        dropShadow: {
            '3xl': '0px 4px 10px rgba(138, 142, 148, 0.05)',
            '4xl' : '0px 0px 24px #FBFAFA',
            '5xl': '0px 2px 12px rgba(0, 0, 0, 0.04)',
        },
    },
},
plugins: [],
}

