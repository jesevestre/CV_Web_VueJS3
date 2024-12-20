<template>
    <div>
        <h1>
            <fa icon="earth-europe" /> Connexion
        </h1>

        <div class="container">
            <form class="form-inline" @submit.prevent="login">
                <div class="form-group row align-items-center mt-5 mb-5 mx-sm-5">

                    <label for="text" class="col-4 col-form-label">Mot de passe: </label>
                    <div class="col-6">
                        <input type="password" class="form-control-plaintext bg-white" id="password" placeholder="Mot de passe" v-model="admin.password"/>
                    </div>

                    <div class="col-2">
                        <button type="submit" class="btn btn-primary mt-1 mb-1">Connexion</button>
                    </div>
                </div>

                <div class="form-group row align-items-center mb-4">
                    <div id="invalid" class="invalid-feedback pl-5 ml-5">
                        Mot de passe incorrect.
                    </div>
                </div>
            </form>
        </div>
    </div>
    <PublicFooter/>
</template>

<script>
import PublicFooter from '@/components/PublicFooter.vue';
import router from '@/router';
export default {
    name: "Login",
    data(){
        return {
            admin: {
                password: '',
            },
        }
    },
    methods: {
        login(){
            // fetch('http://localhost:8888/auth/login', {
            //     headers: {
            //         'Accapt': 'application/json',
            //         'Content-Type': 'application/json'
            //     },
            //     method: 'POST',
            //     body: JSON.stringify(this.admin)
            // })
            if(this.admin.password == ''){
                localStorage.setItem('token', 'tokenConnexionAdminValide');
                router.push('/admin/Dashboard');
            } else {
                const invalidDiv = document.getElementById('invalid');
                invalidDiv.classList.add('d-block');
            }
        }
    },
    components: {
        PublicFooter,
    }
}
</script>

<style>
    h1 {
    font-family: "Sour Gummy", sans-serif;
    display: block;
    text-align: center;

    padding-top: 20px;
    padding-bottom: 20px;

    font-size: 3.5rem;
}
</style>