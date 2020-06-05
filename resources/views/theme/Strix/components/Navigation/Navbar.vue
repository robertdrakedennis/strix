<template>
    <header id="navbar" class="navbar">
        <div class="navbar__container">
            <aside class="navbar__group navbar__brand">
                <nuxt-link to="/" class="navbar__img">
                    <img src="http://strix.legacy/static/king/logo_full.svg" alt="logo">
                </nuxt-link>
            </aside>

            <ul class="navbar__group">
                <li class="navbar__item">
                    <nuxt-link to="/" class="navbar__link">
                        Home
                    </nuxt-link>
                </li>
                <li class="navbar__item">
                    <nuxt-link to="/" class="navbar__link">
                        Forums
                    </nuxt-link>
                </li>
                <li class="navbar__item">
                    <nuxt-link to="/" class="navbar__link">
                        Community
                    </nuxt-link>
                </li>
                <li class="navbar__item">
                    <nuxt-link to="/" class="navbar__link">
                        Social
                    </nuxt-link>
                </li>
            </ul>

            <ul class="navbar__group navbar__group--float-right">
                <li class="navbar__item">
                    <Button type="button" variant="default" size="medium" height="2.5rem" width="100%" icon>
                        <template #icon>
                            <img src="http://strix.legacy/static/king/currency/crown_tilted.svg" alt="">
                        </template>

                        Get Crowns
                    </Button>
                </li>

                <li v-if="user" class="navbar__item">
                    <nuxt-link to="/">
                        <img class="navbar__avatar" :src="user.avatar" alt="avatar">
                    </nuxt-link>
                </li>

                <li v-else class="navbar__item">
                    <nuxt-link to="/">
                        <img class="navbar__avatar" src="http://strix.legacy/storage/90a8be0e-32bd-4145-a246-91fd47bc90bb/efc8c2a440e1e57fb2cb027953f7aab7.jpg" alt="avatar">
                    </nuxt-link>
                </li>
            </ul>
        </div>
    </header>
</template>

<script>
    import { mapGetters } from 'vuex'

    export default {
        name: "Navbar",
        computed: mapGetters({
            user: 'auth/user'
        }),
        methods: {
            handleScroll () {
                let el = document.getElementById('navbar');
                if (window.scrollY >= 40) {
                    el.classList.add('navbar--scroll');
                } else {
                    el.classList.remove('navbar--scroll');
                }
                return window.scrollY >= 80;
            }
        },
        beforeMount () {
            window.addEventListener('scroll', this.handleScroll);
        },
        beforeDestroy() {
            window.removeEventListener('scroll', this.handleScroll);
        }
    }
</script>

<style lang="css">
    .navbar {
        @apply fixed w-full z-50 top-0 left-0 bg-transparent transition-all duration-300 ease-in-out;
    }

    .navbar--scroll {
        @apply bg-neutral-700 bg-opacity-75;

        backdrop-filter: blur(10px);
    }

    .navbar__container {
        @apply flex flex-wrap items-center z-50 h-24 p-4 w-full max-w-6xl mx-auto;
    }

    .navbar__group {
        @apply flex items-center;
    }

    .navbar__group--float-right {
        @apply ml-auto;
    }

    .navbar__brand {
        @apply mr-4;
    }

    .navbar__img {
        @apply h-12 w-12;
    }

    .navbar__item {
        @apply inline-flex;
    }

    .navbar__link {
        @apply text-sm opacity-75 cursor-pointer px-4 py-2 items-center justify-center text-neutral-200 transition-opacity duration-300 ease-in-out;
    }

    .navbar__link:hover {
        @apply opacity-100;
    }

    .navbar__avatar {
        @apply w-12 h-12 rounded ml-4;
    }
</style>
