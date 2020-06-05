<template>
    <div class="card__feature space-y-4">
        <font-awesome-icon :icon="icon" class="card__icon"></font-awesome-icon>

        <span class="card__title">
            {{ title }}
        </span>
    </div>
</template>

<script>
    export default {
        name: "CardContentFeature",
        props: {
            title: {
                type: String,
                required: true
            },
            icon: {
              type: Array,
              required: true
            }
        }
    }
</script>

<style lang="css">
    .card__feature {
        @apply relative h-full w-full flex flex-col items-center justify-center p-5;
    }

    /* Poor fix for classes attached to font-awesome-icon component.
    *  Will eventually think of a better solution.
    */
    .card__icon {
        @apply h-8 w-8 text-white !important;
    }

    .card__title {
        @apply font-bold text-white;
    }
</style>
