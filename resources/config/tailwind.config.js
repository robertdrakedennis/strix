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
                    default: 'var(--colors-primary-default)',
                    '050': 'var(--colors-primary-050)',
                    '100': 'var(--colors-primary-100)',
                    '200': 'var(--colors-primary-200)',
                    '300': 'var(--colors-primary-300)',
                    '400': 'var(--colors-primary-400)',
                    '500': 'var(--colors-primary-500)',
                    '600': 'var(--colors-primary-600)',
                    '700': 'var(--colors-primary-700)',
                    '800': 'var(--colors-primary-800)',
                    '900': 'var(--colors-primary-900)'
                },
                neutral: {
                    default: 'var(--colors-neutral-default)',
                    '050': 'var(--colors-neutral-050)',
                    '100': 'var(--colors-neutral-100)',
                    '200': 'var(--colors-neutral-200)',
                    '300': 'var(--colors-neutral-300)',
                    '400': 'var(--colors-neutral-400)',
                    '500': 'var(--colors-neutral-500)',
                    '600': 'var(--colors-neutral-600)',
                    '700': 'var(--colors-neutral-700)',
                    '800': 'var(--colors-neutral-800)',
                    '900': 'var(--colors-neutral-900)'
                },
                success: {
                    default: 'var(--colors-success-default)',
                    '050': 'var(--colors-success-050)',
                    '100': 'var(--colors-success-100)',
                    '200': 'var(--colors-success-200)',
                    '300': 'var(--colors-success-300)',
                    '400': 'var(--colors-success-400)',
                    '500': 'var(--colors-success-500)',
                    '600': 'var(--colors-success-600)',
                    '700': 'var(--colors-success-700)',
                    '800': 'var(--colors-success-800)',
                    '900': 'var(--colors-success-900)'
                },
                danger: {
                    default: 'var(--colors-danger-default)',
                    '050': 'var(--colors-danger-050)',
                    '100': 'var(--colors-danger-100)',
                    '200': 'var(--colors-danger-200)',
                    '300': 'var(--colors-danger-300)',
                    '400': 'var(--colors-danger-400)',
                    '500': 'var(--colors-danger-500)',
                    '600': 'var(--colors-danger-600)',
                    '700': 'var(--colors-danger-700)',
                    '800': 'var(--colors-danger-800)',
                    '900': 'var(--colors-danger-900)'
                }
            }
        }
    },
    variants: {
        //
    },
}
