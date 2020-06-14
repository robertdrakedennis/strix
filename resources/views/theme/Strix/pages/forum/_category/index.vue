<template>
    <div>
        <backdrop image="https://i.imgur.com/KyviFID.jpg" />

        <spacer x="10rem" />

        <container>
            <div class="grid grid-cols-1 gap-8">
                <div class="col-span-1">
                    <h3 class="text-neutral-100 text-3xl font-medium text-center">
                        Official
                    </h3>

                    <p class="text-neutral-200 text-center">
                        Everything to do with official shit or w/e
                    </p>
                </div>

                <div class="col-span-1">
                    <card>
                        <lazy-forum-board />
                        <lazy-forum-board class="board--not-first" />
                        <lazy-forum-board class="board--not-first" />
                    </card>
                </div>
            </div>
        </container>
    </div>
</template>

<script>
    export default {
        name: "index"
    }
</script>

<style scoped>

</style>
