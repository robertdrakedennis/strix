/*
** TailwindCSS Configuration File
**
** Docs: https://tailwindcss.com/docs/configuration
** Default: https://github.com/tailwindcss/tailwindcss/blob/master/stubs/defaultConfig.stub.js
*/
module.exports = {
    theme: {
        fontFamily: {
            sans: [
                'Inter',
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
            serif: [
                'Georgia',
                'Cambria',
                '"Times New Roman"',
                'Times',
                'serif',
            ],
            mono: [
                'Menlo',
                'Monaco',
                'Consolas',
                '"Liberation Mono"',
                '"Courier New"',
                'monospace',
            ],
        },
        extend: {
            //
            colors: {
                primary: {
                    default: '#2E8FFF',
                    '050': '#F5FAFF',
                    '100': '#FAFCFF',
                    '200': '#C7E1FF',
                    '300': '#94C6FF',
                    '400': '#61ABFF',
                    '500': '#2E8FFF',
                    '600': '#0075FA',
                    '700': '#005DC7',
                    '800': '#004594',
                    '900': '#002D61'
                },
                neutral: {
                    default: '#393947',
                    '050': '#F7F7F8',
                    '100': '#E0E0E6',
                    '200': '#B3B3C2',
                    '300': '#85859D',
                    '400': '#5D5D74',
                    '500': '#393947',
                    '600': '#292933',
                    '700': '#19191F',
                    '800': '#09090B',
                    '900': '#020203'
                },
                success: {
                    default: '#01A25A',
                    '100': '#71FEBF',
                    '200': '#3EFEA8',
                    '300': '#0BFE91',
                    '400': '#01D576',
                    '500': '#01A25A',
                    '600': '#017F46',
                    '700': '#005B32',
                    '800': '#00381F',
                    '900': '#00140B'
                },
                danger: {
                    default: '#A20901',
                    '100': '#FE7871',
                    '200': '#FE483E',
                    '300': '#FE180B',
                    '400': '#D50C01',
                    '500': '#A20901',
                    '600': '#7F0701',
                    '700': '#5B0500',
                    '800': '#380300',
                    '900': '#140100'
                }
            }
        }
    },
    variants: {
        //
    },
}
