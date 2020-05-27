<template>
    <div>
        <Navbar />
        <nuxt />
    </div>
</template>

<style lang="scss">
    html {
        @apply relative h-full font-sans font-normal antialiased;

        &::before {
            z-index: -99999;
            content: "";

            background: radial-gradient(circle at top left, transparentize(#393947, 0.6) 0%, rgba(#393947, 0) 60%), theme('colors.neutral.700');

            @apply fixed top-0 left-0 bg-cover bg-no-repeat bg-center h-full w-full;
        }
    }
</style>
<script>
    import Navbar from "~/components/Navigation/Navbar";
    export default {
        components: { Navbar }
    }
</script>
