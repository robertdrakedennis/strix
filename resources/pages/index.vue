<template>
    <div>
        <Button type="button" variant="default" size="large">
            Default Button
        </Button>
        <Button type="button" variant="primary" size="large">
            Primary Button
        </Button>
        <Button type="button" variant="success" size="large">
            Success Button
        </Button>
        <Button type="button" variant="danger" size="large">
            Danger Button
        </Button>
    </div>
</template>

<script>
    import Logo from '~/components/Logo.vue'
    import Button from "~/components/Button";

    export default {
        components: {
            Button,
            Logo
        }
    }
</script>

<style>
    /* Sample `apply` at-rules with Tailwind CSS
    .container {
      @apply min-h-screen flex justify-center items-center text-center mx-auto;
    }
    */
    .container {
        margin: 0 auto;
        min-height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
    }

    .title {
        font-family: 'Quicksand', 'Source Sans Pro', -apple-system, BlinkMacSystemFont,
        'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
        display: block;
        font-weight: 300;
        font-size: 100px;
        color: #35495e;
        letter-spacing: 1px;
    }

    .subtitle {
        font-weight: 300;
        font-size: 42px;
        color: #526488;
        word-spacing: 5px;
        padding-bottom: 15px;
    }

    .links {
        padding-top: 15px;
    }
</style>
