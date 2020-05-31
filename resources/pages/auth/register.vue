<template>
    <div>
        <div class="w-full md:max-w-4xl mx-auto">
            <form id="user-signup" @submit.prevent="login" @keydown="form.onKeydown($event)" class="grid grid-cols-1 gap-8">
                <FormInput v-model="form.name" id="signup-form-name" name="name" type="text" placeholder=" " required>
                    Name
                </FormInput>

                <FormInput v-model="form.email" id="signup-form-email" name="email" type="email" placeholder=" " required>
                    Email
                </FormInput>

                <FormInput v-model="form.password" id="signup-form-password" name="password" type="password" placeholder=" " required>
                    Password
                </FormInput>

                <FormInput v-model="form.password_confirmation" id="signup-form-password-confirmation" name="password_confirmation" type="password" placeholder=" " required>
                    Password Confirmation
                </FormInput>

                <Button type="button">Login</Button>
            </form>
        </div>
    </div>
</template>

<script>
    import Form from "vform";

    export default {
        name: "register",
        middleware: 'guest',
        data: () => ({
            // Create a new form instance
            form: new Form({
                name: "",
                email: "",
                password: "",
                password_confirmation: ""
            }),
            mustVerifyEmail: false
        }),
        methods: {
            async login() {
                // Get csrf stateful instance
                this.$axios.get('/sanctum/csrf-cookie')
                    .then(response =>  {
                        // register the user
                    this.$axios.post('/auth/register', this.form)
                        .then(async response => {
                            // log the user in
                            await this.$axios.post('auth/login', this.form)

                            // Fetch the user.
                            await this.$store.dispatch('auth/fetchUser');

                            await this.$router.push({name: 'index'});
                        })
                })
            }
        }
    }
</script>

<style scoped>

</style>
