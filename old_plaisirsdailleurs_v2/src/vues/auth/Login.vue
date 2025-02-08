<template>
    <div>
        <h1>
            <fa icon="fan" /> Connexion
        </h1>

        <div class="container pb-5 mb-5">
            <form class="form-inline pb-5 mb-5" @submit.prevent="login">
                <div class="form-group row align-items-center mt-5 mb-5 mx-sm-5 pb-5 mb-5">

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

    <div class="public pb-5 mb-5">
		<div class="container pb-5 mb-5">
			<div class="row pb-5 mb-5">
				<div class="col-12 pb-5 mb-5 text-center">
                    <div class="mt-5 pb-5 mb-5">
                        <router-link class="btn btn-warning mb-5 pt-2 pb-2 pl-5 pr-5 text-white font-weight-bold boutonJaune" to="/">Retour</router-link>
                    </div>
                </div>
			</div>
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
            if(this.admin.password == ''){ // Mot de passe ici
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