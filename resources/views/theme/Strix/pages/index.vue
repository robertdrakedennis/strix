<template>
    <div>
        <spacer x="12rem" />

        <div class="container flex flex-col items-center justify-center mx-auto">
            <div class="grid grid-cols-1 gap-8 mb-10">
                <h1 class="text-center text-3xl md:text-5xl text-neutral-100 font-black">
                    A community that puts you first
                </h1>

                <p class="text-center text-md md:text-xl text-neutral-200 leading-normal max-w-xl mx-auto">
                    Join us and write our history with ever changing content on our server.
                    It's time for a fresh start. Let's grow together!
                </p>

                <Button size="large" centered>connect</Button>
            </div>

            <div class="grid grid-cols-3 gap-4 h-64">
                <card>
                    <card-background background="https://i.imgur.com/QrRmMZg.jpg" blurred />

                    <card-content-feature :icon="['fas', 'users']" title="Community built first" />
                </card>

                <card>
                    <card-background background="https://wallpapercave.com/wp/wp2856904.jpg" blurred />

                    <card-content-feature :icon="['fas', 'server']" title="Server hardware that matters" />
                </card>

                <card>
                    <card-background background="https://wallpaperplay.com/walls/full/3/9/7/299161.jpg" blurred />

                    <card-content-feature :icon="['fas', 'shield-alt']" title="Hand-picked curated staff" />
                </card>

            </div>
        </div>
    </div>
</template>

<script>
    import { mapGetters } from 'vuex';

    export default {
        mounted() {
            // console.log(process.env.APP_KEY)
        },
        computed: mapGetters({
            user: 'auth/user'
        }),
    }
</script>
