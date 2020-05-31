// state
export const state = () => ({
    user: null,
})

// getters
export const getters = {
    user: state => state.user,
    check: state => state.user !== null
}

// mutations
export const mutations = {
    FETCH_USER_SUCCESS (state, user) {
        state.user = user;
    },

    LOGOUT (state) {
        state.user = null;
    },

    UPDATE_USER (state, { user }) {
        state.user = user;
    }
}

// actions
export const actions = {
    async fetchUser ({ commit }) {
        try {
            const { data } = await this.$axios.get('/api/user');

            localStorage.setItem('isLoggedIn', 'true');

            commit('FETCH_USER_SUCCESS', data.data);
        } catch (e) {
            localStorage.removeItem('isLoggedIn');

            commit('FETCH_USER_FAILURE');
        }
    },

    updateUser ({ commit }, payload) {
        commit('UPDATE_USER', payload)
    },

    async logout ({ commit }) {
        try {
            await this.$axios.post('/auth/logout');
        } catch (e) { }

        localStorage.removeItem('isLoggedIn');

        commit('LOGOUT')
    },

    async fetchOauthUrl (ctx, { provider }) {
        const { data: { url } } = await this.$axios.post(`/auth/oauth/${provider}`);

        return url;
    }
}
