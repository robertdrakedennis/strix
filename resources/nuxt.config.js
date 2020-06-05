const pkg = require('../package.json')
require('dotenv').config()

export default {
    globalName: 'strix',

    mode: 'spa',

    srcDir: "resources",

    env: {
        version: pkg.version,
    },

    /*
    ** Headers of the page
    */
    head: {
        title: 'Quub',
        meta: [
            { charset: 'utf-8' },
            { name: 'viewport', content: 'width=device-width, initial-scale=1' },
            { hid: 'description', name: 'description', content: 'Quub is the modern marketplace for web content' },
            { hid: 'keywords', name: 'keywords', content: 'pterodactyl, ptero, ptero addons, quub, addons, resources, themes, development, software, digital content, hosting' },
            { hid: 'og:title', name: 'og:title', content: 'Quub - Website' },
            { hid: 'og:site_name', name: 'og:site_name', content: 'Quub' },
            { hid: 'og:description', name: 'og:description', content: 'Quub is the modern marketplace for digital content' },
            { hid: 'og:image', name: 'og:image', content: '/icon.png' },

        ],
        link: [
            { rel: 'icon', type: 'image/x-icon', href: '/favicon.ico' }
        ]
    },

    router: {
        middleware: [
            'authCheck',
        ],
        linkActiveClass: 'active-link'
    },

    /*
    ** Customize the progress-bar color
    */
    // loading: '~/components/PageLoader.vue',

    /*
    ** Global CSS
    */
    css: [
        // 'vue-select/dist/vue-select.css'
    ],

    /*
    ** Plugins to load before mounting the App
    */
    plugins: [
        //
    ],

    components: [
        { path: `~/views/theme/${process.env.APP_THEME}/components` }
    ],

    /*
    ** Nuxt.js dev-modules
    */
    buildModules: [
        // Doc: https://github.com/nuxt-community/eslint-module
        // Doc: https://github.com/nuxt-community/nuxt-tailwindcss
        ['@nuxtjs/dotenv', {
            path: './',
            only: [
                'APP_NAME',
                'APP_ENV',
                'APP_DEBUG',
                'APP_THEME'

            ]
        }],
        '@nuxtjs/tailwindcss',
        '@nuxtjs/router',
        '@nuxt/components',
        '@nuxtjs/fontawesome',
    ],

    fontawesome: {
        icons: {
            solid: true,
        }
    },

    tailwindcss: {
        configPath: '~/config/tailwind.config.js',
        cssPath: '~/assets/styles/Strix.css',
        purge: false
    },

    /*
    ** Nuxt.js modules
    */
    modules: [
        // Doc: https://axios.nuxtjs.org/usage
        '@nuxtjs/axios',
        'nuxt-lazy-load',
        '@nuxtjs/toast'
        // '@nuxtjs/sitemap'
    ],

    toast: {
        position: 'bottom-right',
        theme: "outline",
        duration : 99999
    },

    purgeCSS: {
        mode: 'postcss',
        enabled: false
    },

    /*
    ** Axios module configuration
    ** See https://axios.nuxtjs.org/options
    */
    axios: {
        credentials: true,
        baseURL: 'http://api.strix.test',
        headers: {
            'X-Requested-With': 'XMLHttpRequest',
            'Content-Type': 'application/json'
        }
    },
    /*
    ** Build configuration
    */
    build: {
        /*
        ** You can extend webpack config here.
        */
        extend (config, ctx) {
        },

        parallel: false,

        extractCSS: false,
    },

    generate: {
        dir: 'client',
    }
}
