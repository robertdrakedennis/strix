<template>
    <div>
        <div class="container">
            <form>
                <FormInput id="test-input" name="example_field" type="text" required>
                    Example Input
                </FormInput>
            </form>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log(process.env.APP_KEY)
        }
    }
</script>
