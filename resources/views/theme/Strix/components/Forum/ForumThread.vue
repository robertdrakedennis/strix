<template>
        <div class="thread grid grid-cols-12 gap-0">
            <div class="thread__section hidden md:block md:col-span-1">
                <div class="thread__image">
                    <nuxt-link to="/">
                        <img class="h-12 w-12 rounded" src="http://api.strix.test/storage/3XSV5XlJ5icUDFMAQOSHj/x7O53sE12BBXSJI041TCp.jpg?v=1591243312" alt="">
                    </nuxt-link>
                </div>
            </div>

            <div class="thread__section col-span-6">
                <div class="thread__block space-y-1">
                    <h6 class="thread__post">
                        <nuxt-link to="/">
                            Some sort of thread with a stupidly long title? who the fuck allowed this what the fuck
                        </nuxt-link>
                    </h6>

                    <div class="thread__link">
                        <nuxt-link to="/">
                            atlas
                        </nuxt-link>
                    </div>
                </div>
            </div>

            <div class="thread__section col-span-6 md:col-span-2">
                <div class="thread__block thread__details space-y-1">
                    <div class="flex items-center space-x-2">
                        <font-awesome-icon :icon="['fas', 'comments']" class="thread__icon fa-fw  " />

                        <span class="thread__link">
                            <nuxt-link to="/">
                                1
                            </nuxt-link>
                        </span>
                    </div>

                    <div class="flex items-center space-x-2">
                        <font-awesome-icon :icon="['fas', 'stopwatch']" class="thread__icon fa-fw " />

                        <span class="thread__link">
                                3 days ago
                        </span>
                    </div>
                </div>
            </div>

            <div class="thread__section hidden md:block md:col-span-3">
                <div class="thread__block thread__last-comment space-y-1">
                    <div class="thread__link">
                        <nuxt-link to="/">
                            atlas
                        </nuxt-link>
                    </div>

                    <div class="flex items-center space-x-2">
                        <font-awesome-icon :icon="['fas', 'stopwatch']" class="thread__icon fa-fw " />

                        <span class="thread__link">
                                3 seconds ago
                        </span>
                    </div>
                </div>
            </div>
        </div>
</template>

<script>
    export default {
        name: "ForumThread"
    }
</script>

<style>
    .thread {
        @apply relative w-full;
    }

    .thread--not-first {
        @apply border-t border-neutral-500;
    }

    .thread__section {
        @apply relative p-2 h-full w-full;
    }

    .thread__image {
        @apply relative h-full w-full flex items-center justify-center;
    }

    .thread__block {
        @apply relative flex flex-col items-start justify-center;
    }

    .thread__post {
        @apply relative font-light text-primary-500 truncate w-full max-w-xl;
    }

    .thread__details {
        @apply relative flex flex-col text-sm items-start justify-center text-neutral-300;
    }

    .thread__last-comment {
        @apply text-sm items-end justify-center text-right;
    }

    /* Poor fix for classes attached to font-awesome-icon component.
    *  Will eventually think of a better solution.
    */
    .thread__icon {
        @apply text-neutral-400 !important;
    }

    .thread__link {
        @apply text-neutral-100;
    }
</style>
