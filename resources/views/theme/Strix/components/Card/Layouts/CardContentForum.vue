<template>
    <div class="card__forum">
        <slot />
    </div>
</template>

<script>
    export default {
        name: "CardContentForum"
    }
</script>

<style>
    .card__forum {
        @apply relative h-full flex flex-col items-start justify-start;
    }
</style>
