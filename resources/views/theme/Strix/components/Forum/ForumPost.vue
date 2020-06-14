<template>
    <article class="post grid grid-cols-12">
        <div class="post__user">
            <div class="post__cover" lazy-background="http://strix.legacy/storage/90c5b682-5e33-4318-9cb4-f2d704bd8a9e/a25d2454923db4b971415c30ed610ff0.jpg">
                <div class="post__mask post__mask--large"></div>
                <div class="post__mask post__mask--small"></div>
            </div>

            <div class="post__details space-y-3">
                <h6 class="post__username">
                    <font-awesome-icon :icon="['fas', 'circle']" class="fa-fw fa-xs text-success-500" />
                    atlas
                </h6>

                <img class="h-24 w-24 m-auto mt-4 rounded" src="http://api.strix.test/storage/pqUzybhbeXSif7mSIuC8P/6mtsP2sQTGT8wqH6zigCO.jpg?v=1591788869" alt="">

                <div class="max-w-full truncate text-neutral-100 text-xs">
                    some sort of tag line thats quite long even though we arent allowed to make long tag lines.
                </div>

                <div>
                    <img class="mx-auto" src="http://strix.legacy/storage/90c81fd3-2068-4cfb-b40e-2f2267a910ea/4_king_userbar.png" alt="">
                </div>

            </div>
        </div>

        <div class="post__content">
            <header class="post__header">
                <div class="post__timestamp">
                    <font-awesome-icon :icon="['fas', 'stopwatch']" class="fa-sm fa-fw" />

                    3 days ago
                </div>

                <div class="post__id">
                    <a href="#">
                        #eoijf_2z
                    </a>
                </div>
            </header>

            <div class="post__body">
                <p>some default stuff here so i can at least see how this is going to go</p>
            </div>

            <footer class="post__footer space-x-2">
                <Button variant="default" width="6rem" icon>
                    <template #icon>
                        <font-awesome-icon :icon="['fas', 'edit']" class="fa-xs fa-fw" />
                    </template>

                    edit
                </Button>

                <Button variant="default" width="6rem" icon>
                    <template #icon>
                        <font-awesome-icon :icon="['fas', 'reply']" class="fa-xs fa-fw" />
                    </template>

                    reply
                </Button>
            </footer>
        </div>
    </article>
</template>

<script>
    export default {
        name: "ForumPost"
    }
</script>

<style>
    .post {
        @apply h-full w-full;
    }

    .post__user {
        min-height: 30rem;

        @apply relative block p-4 col-span-12;
    }

    @media(min-width: theme('screens.md')) {
        .post__user {
            @apply col-span-3;
        }
    }

    .post__cover {
        min-height: 30rem;

        @apply absolute top-0 left-0 w-full h-full z-0 bg-cover bg-center;
    }

    .lazyLoad.isLoaded.post__cover {
        @apply opacity-75 !important;
    }

    .post__mask {
        @apply absolute inset-0 bg-cover transition-all duration-500 delay-200 ease-in-out;
    }

    .post__mask--small {
        background-image: linear-gradient(transparent 20rem, theme('colors.neutral.600') 28rem);
    }

    .post__mask--large {
        background-image: linear-gradient(transparent 0rem, theme('colors.neutral.600') 28rem);

        @apply opacity-100;
    }

    .post__user:hover .post__mask--large {
        @apply opacity-0;
    }

    .post__details {
        @apply relative z-10 text-center transition-all duration-500 delay-200 ease-in-out;
    }

    .post__user:hover .post__details {
        @apply opacity-0;
    }

    .post__username {
        @apply font-medium text-xl text-neutral-050;
    }

    .post__content {
        @apply relative flex flex-col h-full w-full align-top  p-4 col-span-12;
    }

    @media(min-width: theme('screens.md')) {
        .post__content {
            @apply col-span-9;
        }
    }

    .post__header {
        @apply flex items-center justify-between text-sm;
    }

    .post__timestamp {
        @apply text-neutral-300;
    }

    .post__id {
        @apply text-neutral-300;
    }

    .post__body {
        @apply block text-neutral-100 pt-4;
    }

    .post__footer {
        @apply flex flex-row items-center justify-end mt-auto pt-4;
    }
</style>
