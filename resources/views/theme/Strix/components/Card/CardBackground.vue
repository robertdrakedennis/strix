<template>
    <div class="card__wrapper">
        <div class="card__background" :class="blurred ? 'card__background--blurred' : ''" :lazy-background="background"></div>
    </div>
</template>

<script>
    export default {
        name: "CardBackground",
        props: {
            background: {
                type: String,
                required: true
            },
            blurred: {
                type: Boolean,
                default: false
            }
        }
    }
</script>

<style lang="scss">
    .card__wrapper {
        @apply h-full w-full absolute;
    }

    .card__background {
        mask-image: linear-gradient(to bottom, theme('colors.neutral.600') 0%, rgba(0,0,0,0) 70%, rgba(0,0,0,0));

        @apply absolute h-full w-full bg-cover bg-no-repeat bg-top;
    }

    .card__background--blurred {
        filter: blur(5px);
    }
</style>
