<template>
    <div class="card" :style="{ height: `calc(${height})`, width: `calc(${width})` }">
        <slot />
    </div>
</template>

<script>
    export default {
        name: "Card",
        props: {
            variant: {
                type: String,
                default: 'primary'
            },
            height: {
                type: String,
                default: 'auto'
            },
            width: {
                type: String,
                default: 'auto'
            }
        }
    }
</script>

<style lang="css">
    .card {
        box-shadow: 0 5px 15px -5px rgba(0,0,0,0.5);

        @apply relative flex flex-col items-center justify-center bg-neutral-600 overflow-hidden flex-shrink-0 rounded;
    }
</style>
