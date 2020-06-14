<template>
    <div class="container responsive-container" :class="classList">
        <slot />
    </div>
</template>

<script>
    export default {
        name: "Container",
        props: {
            flex: {
                type: Boolean,
                default: false,
            },
            flexCol: {
                type: Boolean,
                default: false
            },
            centered: {
                type: Boolean,
                default: false
            }
        },
        data () {
            return {
                classList: []
            }
        },
        mounted() {
            this.classList = [
                this.flex ? 'container--flex' : null,
                this.flexCol ? 'container--columns' : null,
                this.centered ? 'container--centered' : null,
            ];
        }
    }
</script>

<style>
    .responsive-container {
        @apply relative px-6;
    }

    @media (min-width: theme('screens.md')) {
        .responsive-container {
            @apply mx-auto px-0;
        }
    }

    .container--flex {
        @apply flex flex-row;
    }

    .container--columns {
        @apply flex-col;
    }

    .container--centered {
        @apply items-center justify-center;
    }
</style>
