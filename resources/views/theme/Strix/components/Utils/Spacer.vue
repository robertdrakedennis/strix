<template>
    <span aria-hidden="true" class="spacer" :style="{ marginTop: `calc(${x})` }"></span>
</template>

<script>
    export default {
        name: "Spacer",
        props: {
            x: {
                type: String,
                default: 0
            }
        }
    }
</script>

<style scoped lang="scss">
    .spacer {
        height: 1px;
        width: 1px;

        @apply block;
    }
</style>
