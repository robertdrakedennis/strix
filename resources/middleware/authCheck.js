export default async ({ store, req, redirect, route }) => {
    if (localStorage.getItem('isLoggedIn') !== null && ! store.getters['auth/check']) {
        await store.dispatch('auth/fetchUser')
    }
}
