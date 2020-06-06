<template>
    <div class="card__header">
        <span class="card__title">
            <slot />
        </span>
    </div>
</template>

<script>
    export default {
        name: "CardHeader"
    }
</script>

<style>
    .card__header {
        @apply relative w-full bg-neutral-700 bg-opacity-50 flex flex-row items-center p-4 text-sm z-50;
    }

    .card__title {
        @apply text-sm text-neutral-050 tracking-wider;
    }
</style>
