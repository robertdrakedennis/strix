<template>
    <div>
        <Spacer x="10rem" />

        <div class="w-full md:max-w-4xl mx-auto space-y-4">
            <form id="user-signup" @submit.prevent="login" @keydown="form.onKeydown($event)" class="grid grid-cols-1 gap-8">
                <FormInput v-model="form.email" id="login-form-email" name="email" type="text" placeholder=" " required>
                    Email
                </FormInput>

                <FormInput v-model="form.password" id="login-form-password" name="email" type="password" placeholder=" " required>
                    Password
                </FormInput>

                <Button type="button" width="8rem">Login</Button>
            </form>

            <Button @click.native="handleOauthLogin('steam')" type="button" variant="success" width="10rem">Login with Steam</Button>
            <Button @click.native="handleOauthLogin('discord')" type="button" variant="default" width="10rem">Login with Discord</Button>
        </div>
    </div>
</template>

<script>
    import Form from "vform";

    export default {
        name: "login",
        middleware: 'guest',
        data: () => ({
            // Create a new form instance
            form: new Form({
                email: "",
                password: "",
            }),
            remember: true
        }),
        methods: {
            async login() {
                // Get csrf stateful instance
                this.$axios.get('/sanctum/csrf-cookie')
                    .then(async response =>  {
                        // log the user in
                        await this.$axios.post('auth/login', this.form)

                        // Fetch the user.
                        await this.$store.dispatch('auth/fetchUser');

                        await this.$router.push({name: 'index'});
                    });
            },
            async handleOauthLogin(provider) {
                location.href = await this.$store.dispatch('auth/fetchOauthUrl', {
                    provider: provider
                });
            }
        }
    }
</script>

<style scoped>

</style>
