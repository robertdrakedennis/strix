<template>
    <div class="latest-threads grid grid-cols-8 gap-0">
        <div class="p-2 bg-red-500 col-span-2">
            a
        </div>
        <div class="p-2 bg-blue-500 col-span-6">
            b
        </div>
    </div>
</template>

<script>
    export default {
        name: "WidgetLatestThreads"
    }
</script>

<style>
    .latest-threads {
        @apply relative h-full w-full;
    }
</style>
