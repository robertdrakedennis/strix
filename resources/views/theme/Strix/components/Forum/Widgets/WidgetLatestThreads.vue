<template>
    <div class="relative w-full h-full">
            <div class="latest-threads" v-if="$fetchState.pending">
                <div class="grid grid-cols-8 gap-0">
                    <div class="latest-threads__section hidden md:block md:col-span-2">
                        <div class="latest-threads__avatar">
                            <div class="h-12 w-12 rounded bg-neutral-500"></div>
                        </div>
                    </div>

                    <div class="latest-threads__section col-span-8 md:col-span-6">
                        <div class="latest-threads__block space-y-2">
                            <div class="h-4 w-full rounded bg-neutral-500"></div>
                            <div class="h-4 w-full rounded bg-neutral-500"></div>
                        </div>
                    </div>
                </div>

            </div>

            <div v-else class="latest-threads grid grid-cols-8 gap-0">
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
                                Some sort of title with a stupidly long title? who the fuck allowed this what the fuck
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
    </div>

</template>

<script>
    export default {
        name: "WidgetLatestThreads",
        data () {
            return {
                threads: []
            }
        },
        async fetch () {
            const { data: { data } } = await this.$axios.get('/api/forums/threads/latest');

            this.threads = data;
        },
        fetchOnServer: false
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
        @apply max-w-full font-light truncate text-primary-500 pb-2;
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
