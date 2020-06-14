<template>
    <div>
        <backdrop image="https://i.imgur.com/KyviFID.jpg" />

        <spacer x="10rem" />

        <container class="space-y-6">
            <div class="relative flex flex-row items-center justify-between">
                <h6 class="text-neutral-050 font-bold text-3xl w-full max-w-2xl truncate">
                    some stupidly long title soo i can see how legit insanely long this is
                </h6>

                <Button type="link" url="#reply" variant="default">
                    <font-awesome-icon :icon="['fas', 'reply']" class="fa-fw fa-sm" />
                </Button>
            </div>

            <card>
                <forum-post />
            </card>

            <card>
                <forum-post />
            </card>

            <card>
                <forum-post />
            </card>

            <card>
                <forum-post />
            </card>
        </container>

        <spacer x="4rem" />
    </div>
</template>

<script>
    export default {
        name: "index"
    }
</script>

<style>

</style>
