<template>
    <div>
        <div class="container mx-auto">
            <div class="grid grid-cols-4 gap-4">
                <card height="19rem">
                    <card-background background="https://img.guildedcdn.com/UserBanner/19c8b5ca2868324e26cdd51820ae1088-HeroMd.png" />

                    <card-content-social :user="user" />
                </card>

                <card height="19rem">
                    <card-background background="https://img.guildedcdn.com/UserBanner/19c8b5ca2868324e26cdd51820ae1088-HeroMd.png" />

                    <card-content-social :user="user" />
                </card>

                <card height="19rem">
                    <card-background background="https://img.guildedcdn.com/UserBanner/19c8b5ca2868324e26cdd51820ae1088-HeroMd.png" />

                    <card-content-social :user="user" />
                </card>

                <card height="19rem">
                    <card-background background="https://img.guildedcdn.com/UserBanner/19c8b5ca2868324e26cdd51820ae1088-HeroMd.png" />

                    <card-content-social :user="user" />
                </card>
            </div>
        </div>
    </div>
</template>

<script>
    import { mapGetters } from 'vuex';

    export default {
        mounted() {
            // console.log(process.env.APP_KEY)
        },
        computed: mapGetters({
            user: 'auth/user'
        }),
    }
</script>
