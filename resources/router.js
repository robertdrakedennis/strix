import Vue from 'vue';
import Router from 'vue-router';


// Being route imports
import auth from '~/routes/auth';
import forum from '~/routes/forum';

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
            ...auth,
            ...forum
        ]
    })
}
