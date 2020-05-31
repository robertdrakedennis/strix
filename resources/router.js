import Vue from 'vue'
import Router from 'vue-router'

Vue.use(Router)

const page = path => async () => await import(`~/pages/${path}`).then(m => m.default || m)


export function createRouter() {
    return new Router({
        mode: 'history',
        routes: [
            {
                path: '/',
                name: 'index',
                component: page('index.vue')
            },
            {
                path: '/auth/login',
                name: 'auth.login',
                component: page('auth/login.vue')
            },
            {
                path: '/auth/register',
                name: 'auth.register',
                component: page('auth/register.vue')
            },
            {
                path: '/auth/oauth/callback/:provider',
                name: 'auth.oauth.callback.provider',
                component: page('auth/oauth/callback/_provider.vue')
            }
        ]
    })
}
