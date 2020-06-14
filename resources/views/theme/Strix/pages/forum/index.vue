<template>
    <div>
        <spacer x="10rem" />

        <container>
            <div class="grid grid-cols-1 md:grid-cols-8 gap-4">
                <div class="col-span-1 md:col-span-6">
                    <card>
                        <card-header>
                            Official
                        </card-header>

                        <lazy-forum-board />
                    </card>
                </div>

                <div class="col-span-1 md:col-span-2">
                    <card>
                        <card-header>
                            Latest Threads
                        </card-header>

                        <lazy-widget-latest-threads />
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

<style>

</style>
