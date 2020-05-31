<template>
    <div></div>
</template>

<script>
    const qs = params => Object.keys(params).map(key => `${key}=${params[key]}`).join('&');

    export default {
        name: "steam",
        async asyncData({ $axios, query, store, redirect, params }) {
            try {
                // Get csrf stateful instance
                $axios.get('/sanctum/csrf-cookie')
                    .then(async response =>  {
                        // log the user in
                        await $axios.get(`/auth/oauth/callback/${params.provider}?${qs(query)}`);

                        // Fetch the user.
                        await store.dispatch('auth/fetchUser');

                        await redirect({name: 'index'});
                    });
            } catch (e) {
                if (process.env.NODE_ENV === 'development') {
                    console.log(e)
                }
            }
        }
    }
</script>

<style scoped>

</style>
