<template>
    <div class="card__social space-y-2">
        <img class="card__avatar" :src="user.avatar" :alt="user.slug">

        <div class="card__name">
            {{ user.name }}
        </div>

        <div class="card__joined">
            Joined {{ user.created_at_human }}
        </div>

        <div class="card__tagline">
            {{ user.tagline }}
        </div>

        <slot name="userbar">
            <div class="card__userbar">
                userbar_placeholder
            </div>
        </slot>
    </div>
</template>

<script>
    export default {
        name: "CardContentSocial",
        props: {
            user: {
                type: Object
            }
        }
    }
</script>

<style scoped lang="css">
    .card__social {
        @apply relative h-full w-full flex flex-col items-center justify-center p-5;
    }

    .card__avatar {
        @apply h-16 w-16 rounded;
    }

    .card__name {
        min-height: 1.25rem;
        min-width: 7.5rem;
        text-shadow: 0 0 2px rgba(0,0,0,0.5);

        @apply max-w-full text-lg leading-6 font-bold text-center truncate whitespace-no-wrap text-white;
    }

    .card__joined {
        min-width: 5rem;

        @apply text-sm leading-normal text-neutral-200;
    }

    .card__tagline {
        max-height: 2rem;

        @apply h-auto text-sm text-center text-white overflow-hidden truncate max-w-full;
    }

    .card__userbar {
        @apply ;
    }
</style>
