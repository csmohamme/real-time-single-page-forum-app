<template>
    <v-container>
        <v-form ref="form" @submit.prevent="login" lazy-validation>
            <v-text-field
                v-model="form.email"
                label="E-mail"
                type="email"
                required
            >
            </v-text-field>
            <v-text-field
                v-model="form.password"
                label="password"
                type="password"
                required
            >
            </v-text-field>
            <v-btn 
                color="green" 
                type="submit"
            >
                LOGIN
            </v-btn>
        </v-form>
    </v-container>
</template>

<script>
export default {
    data(){
        return{
            form :{
                email : null,
                password : null
            }
        }
    },
    methods:{
        login(){
            User.login(this.form)
        }
    }
    
}
</script>

<style>

</style>