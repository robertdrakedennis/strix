<template>
    <section class="backdrop">
        <div class="backdrop__container">
            <img class="backdrop__img" :src="image" alt="">
        </div>

        <slot />
    </section>
</template>

<script>
    export default {
        name: "Backdrop",
        props: {
            image: {
                type: String,
                required: true
            }
        }
    }
</script>

<style>
    .backdrop {
        @apply flex flex-col flex-1 items-center p-6;
    }

    .backdrop__container {
        height: 100%;
        max-height: 70rem;
        mask-image: linear-gradient(to bottom, #000, #000 calc(100% - 50%), transparent calc(100% - 25%), transparent);
        opacity: 0.4;

        @apply absolute pointer-events-none w-full top-0 left-0 overflow-hidden;
    }

    @media (min-width: theme('screens.md')) {
        .backdrop__container {
            min-height: 65rem;
        }
    }

    .backdrop__img {
        @apply object-cover object-center h-full w-full;
    }
</style>
