module.exports = {
    content: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
        './node_modules/tw-elements/dist/js/**/*.js',
    ],
    theme: {
        extend: {
            colors: {
                blue: {
                    100: '#EBF8FF',
                    200: '#BCDEFA',
                    300: '#6CB2EB',
                    400: '#63B3ED',
                    500: '#249EEA',
                    600: '#127ABA',
                    700: '#2B6CB0',
                    800: '#2C5282',
                    900: '#2A4365',
                },
            },
            fontFamily: {
                sans: [
                    'Nunito',
                    '-apple-system',
                    'BlinkMacSystemFont',
                    '"Segoe UI"',
                    'Roboto',
                    '"Helvetica Neue"',
                    'Arial',
                    '"Noto Sans"',
                    'sans-serif',
                    '"Apple Color Emoji"',
                    '"Segoe UI Emoji"',
                    '"Segoe UI Symbol"',
                    '"Noto Color Emoji"',
                ],
            },
        },
    },
    plugins: [
        require('tw-elements/dist/plugin'),
    ],
}
