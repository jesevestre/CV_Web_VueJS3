<template>
    <div class="Contact container mb-5">
        
        <h1 class="mt-5 mb-5">Contact <fa :icon="['fas', 'envelope']" /></h1>

        <form @submit.prevent="sendMessage">
            <input v-model="form.name" type="text" class="form-control mt-5 mb-5" placeholder="Votre prénom et nom" required />

            <input v-model="form.email" type="email" class="form-control mb-5" placeholder="Votre adresse email" required />

            <input v-model="form.subject" type="text" class="form-control mb-5" placeholder="Titre du sujet" required />

            <textarea v-model="form.message" class="form-control mb-5" rows="5" placeholder="Votre message" required></textarea>
            
            <div class="d-grid gap-2 col-4 col-sm-3 col-md-2 mx-auto boutonContact">
                <button type="submit" class="btn contact" :disabled="loading">
                    {{ loading ? "Envoi..." : "Envoyer" }}
                </button>
            </div>

            <div v-if="successMessage" class="alert alert-success mt-3">
                {{ successMessage }}
            </div>
            <div v-if="errorMessage" class="alert alert-warning mt-3">
                {{ errorMessage }}
            </div>
        </form>

    </div>
</template>

<script>
import '@/assets/css/PagesStyle.css';

export default {
    name: 'Contact',
    data() {
        return {
            form: {
                name: "",
                email: "",
                subject: "",
                message: "",
            },
            loading: false,
            successMessage: "",
            errorMessage: "",
        };
    },
    methods: {
        async sendMessage() {
            this.loading = true;
            this.successMessage = "";
            this.errorMessage = "";

            try {
                const response = await fetch("http://jsevestre02.free.fr/backend/contact.php", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                    },
                    body: JSON.stringify(this.form),
                });

                const data = await response.json();

                if (data.success) {
                    this.successMessage = "Votre message a bien été envoyé.";
                    this.form = { name: "", email: "", subject: "", message: "" };
                } else {
                    this.errorMessage = "Une erreur est survenue. Veuillez rééssayer.";
                }
            } catch (error) {
                this.errorMessage = "Impossible d'envoyer le message.";
            } finally {
                this.loading = false;
            }
        },
    },
};
</script>


<style scoped>
.contact {
    background: #63C7B2;
    color: white;
    font-weight: bold;
}
.contact:hover {
    background: #56ab97;
    color: white;
}
</style>