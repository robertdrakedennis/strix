<template>
    <div class="loader">
        <div class="loader__dot"></div>
        <div class="loader__dot"></div>
        <div class="loader__dot"></div>
    </div>
</template>

<script>
    export default {
        name: "Loader",
        props: {

        }
    }
</script>

<style lang="scss">
    .loader {
        @apply pointer-events-none select-none;
    }

    .loader__dot {
        @apply inline-block bg-transparent rounded-full opacity-0;
        height: 5px;
        width: 5px;
        animation-fill-mode: both;

        &:nth-child(1) {
            animation: loaderAnimation 1s ease-in-out 0s infinite;
        }

        &:nth-child(2) {
            margin-left: 3px;
            animation: loaderAnimation 1s ease-in-out 150ms infinite;
        }

        &:nth-child(3) {
            margin-left: 3px;
            animation: loaderAnimation 1s ease-in-out 300ms infinite;
        }
    }

    @keyframes loaderAnimation {
        0% {
            @apply opacity-0;
            transform: translateY(175%);
        }
        30% {
            @apply opacity-100;
            transform: translateY(0);
        }
        100% {
            //
        }
    }
</style>
