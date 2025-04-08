<template>
    <div class="Contact container mb-5">
        
        <h1 class="mt-5 mb-5">Contact <font-awesome-icon :icon="['fas', 'envelope']" /></h1>

        <form @submit.prevent="sendMessage">
            <label for="name">Nom complet :</label>
            <input v-model="form.name" type="text" class="form-control mb-5" id="name" placeholder="Votre prénom et nom" required />

            <label for="email">Adresse email :</label>
            <input v-model="form.email" type="email" class="form-control mb-5" id="email" placeholder="Votre adresse email" required />

            <label for="subject">Sujet :</label>
            <input v-model="form.subject" type="text" class="form-control mb-5" id="subject" placeholder="Titre du sujet" required />

            <label for="message">Message :</label>
            <textarea v-model="form.message" class="form-control mb-5" rows="5" id="message" placeholder="Votre message" required></textarea>
            
            <div class="d-grid gap-2 col-4 col-sm-3 col-md-2 mx-auto boutonContact">
                <button type="submit" class="btn contact" :disabled="loading" aria-label="Envoyer le message">
                    {{ loading ? "Envoi..." : "Envoyer" }}
                </button>
            </div>

            <div v-if="successMessage" class="alert alert-success mt-3" role="status" aria-live="polite">
                {{ successMessage }}
            </div>
            <div v-if="errorMessage" class="alert alert-warning mt-3" role="alert" aria-live="assertive">
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