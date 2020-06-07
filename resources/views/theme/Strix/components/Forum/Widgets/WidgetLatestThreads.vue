<template>
    <div class="latest-threads grid grid-cols-8 gap-0">
        <div class="latest-threads__section hidden md:block md:col-span-2">
            <div class="latest-threads__avatar">
                <nuxt-link to="/">
                    <img class="h-12 w-12 rounded" src="http://api.strix.test/storage/3XSV5XlJ5icUDFMAQOSHj/x7O53sE12BBXSJI041TCp.jpg?v=1591243312" alt="">
                </nuxt-link>
            </div>
        </div>
        <div class="latest-threads__section col-span-8 md:col-span-6">
            <div class="latest-threads__block">
                <h6 class="latest-threads__title">
                    <nuxt-link to="/">
                        Some sort of title
                    </nuxt-link>
                </h6>

                <span class="latest-threads__info">
                    3 days ago by:
                    <span class="latest-threads__link">
                        <nuxt-link to="/">
                            atlas
                        </nuxt-link>
                    </span>
                </span>

            </div>
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

    .latest-threads__section {
        @apply relative p-2 h-full w-full;
    }

    .latest-threads__block {
        @apply relative flex flex-col justify-center;
    }

    .latest-threads__title {
        @apply font-light text-primary-500 pb-2;
    }

    .latest-threads__info {
        @apply text-xs text-neutral-300;
    }

    .latest-threads__link {
        @apply text-xs text-primary-500;
    }

    .latest-threads__avatar {
        @apply relative h-full w-full flex items-center justify-center;
    }
</style>
