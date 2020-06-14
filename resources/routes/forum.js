import { page } from '~/utils';

export default [
    {
        path: '/forums',
        name: 'forum.index',
        component: page('forum/index.vue')
    },
    {
        path: '/forums/category/:category/:slug?',
        name: 'forum.category.index',
        component: page('forum/_category/index.vue')
    },
    {
        path: '/forums/board/:board/:slug?',
        name: 'forum.board.index',
        component: page('forum/_board/index.vue')
    },
    {
        path: '/forums/thread/:thread/:slug?',
        name: 'forum.thread.index',
        component: page('forum/_thread/index.vue')
    },
];
