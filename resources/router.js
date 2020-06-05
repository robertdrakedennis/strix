import Vue from 'vue';
import Router from 'vue-router';
import auth from '~/routes/auth';
import { page } from '~/utils';

Vue.use(Router);

export function createRouter() {
    return new Router({
        mode: 'history',
        routes: [
            {
                path: '/',
                name: 'index',
                component: page('index.vue')
            },
            ...auth
        ]
    })
}
