import { page } from '~/utils';

export default [
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
];
