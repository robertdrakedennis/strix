<template>
    <div>
        <backdrop image="https://i.imgur.com/KyviFID.jpg" />

        <spacer x="10rem" />

        <container>
            <div class="grid grid-cols-1 gap-8">
                <div class="col-span-1">
                    <h3 class="text-neutral-100 text-3xl font-medium text-center">
                        Announcements
                    </h3>

                    <p class="text-neutral-200 text-center">
                        Wow announcements are so cool and epic wtf
                    </p>
                </div>

                <div class="col-span-1">
                    <card>
                        <lazy-forum-thread />
                        <lazy-forum-thread class="thread--not-first" />
                        <lazy-forum-thread class="thread--not-first" />
                    </card>
                </div>
            </div>
        </container>
    </div>
</template>

<script>
    export default {
        name: "_board"
    }
</script>
