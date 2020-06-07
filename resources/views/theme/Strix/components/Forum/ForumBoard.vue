<template>
    <div class="board grid grid-cols-12 gap-0">
        <div class="board__section hidden md:block md:col-span-1">
           <div class="board__image">
               <nuxt-link to="/">
                   <img class="w-8 h-8" src="https://media.gmodstore.com/_/assets/img/forum/icons/megaphone.svg" alt="">
               </nuxt-link>
           </div>
        </div>

        <div class="board__section col-span-6">
            <div class="board__block">
                <h6 class="board__title">
                    <nuxt-link to="/">
                        Announcements
                    </nuxt-link>
                </h6>

                <div class="board__minor space-x-2">
                    <div>
                        Threads:
                        <span class="text-neutral-050">
                            <nuxt-link to="/">
                                1
                            </nuxt-link>
                        </span>
                    </div>

                    <div>
                        Comments:
                        <span class="text-neutral-050">
                            <nuxt-link to="/">
                                1
                            </nuxt-link>
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="board__section col-span-6 md:col-span-4">
            <div class="board__block">
                <h6 class="board__thread">
                    <nuxt-link to="/">
                        Some sort of title with a stupidly long title? who the fuck allowed this what the fuck
                    </nuxt-link>
                </h6>

                <div class="board__minor space-x-2">
                    <div>
                        3 days ago
                    </div>

                    <span class="text-neutral-300 text-sm">·</span>

                    <div class="text-neutral-100">
                        <nuxt-link to="/">
                            atlas
                        </nuxt-link>
                    </div>
                </div>
            </div>
        </div>

        <div class="board__section hidden md:block md:col-span-1">
            <div class="board__image">
                <nuxt-link to="/">
                    <img class="h-12 w-12 rounded" src="http://api.strix.test/storage/3XSV5XlJ5icUDFMAQOSHj/x7O53sE12BBXSJI041TCp.jpg?v=1591243312" alt="">
                </nuxt-link>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "ForumBoard"
    }
</script>

<style>
    .board {
        @apply relative w-full;
    }

    .board__section {
        @apply relative p-2 h-full w-full;
    }

    .board__image {
        @apply relative h-full w-full flex items-center justify-center;
    }

    .board__block {
        @apply relative flex flex-col items-start justify-center;
    }

    .board__title {
        @apply relative font-medium text-primary-500 truncate max-w-full pb-1;
    }

    .board__thread {
        @apply relative font-light text-primary-500 truncate max-w-full pb-1;
    }

    .board__minor {
        @apply relative flex flex-row items-center text-xs text-neutral-300;
    }
</style>
