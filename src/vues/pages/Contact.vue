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
            
            <div class="d-grid gap-2 col-4 col-sm-3 col-md-2 mx-auto">
                <button type="submit" class="btn button-color1 fw-bold" :disabled="loading" aria-label="Envoyer le message">
                    {{ loading ? "Envoi..." : "Envoyer" }}
                </button>
            </div>

            <div v-if="successMessage" class="alert alert-success mt-3 d-flex justify-content-center align-items-center" role="status" aria-live="polite">
                {{ successMessage }}&nbsp;<font-awesome-icon :icon="['fas', 'check']" />
            </div>
            <div v-if="errorMessage" class="alert alert-warning mt-3 d-flex justify-content-center align-items-center" role="alert" aria-live="assertive">
                {{ errorMessage }}&nbsp;<font-awesome-icon :icon="['fas', 'xmark']" />
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
                const formData = new FormData();
                formData.append("name", this.form.name);
                formData.append("email", this.form.email);
                formData.append("subject", this.form.subject);
                formData.append("message", this.form.message);

                const response = await fetch("http://jsevestre02.free.fr/backend/contact.php", {
                    method: "POST",
                    body: formData,
                });

                const text = await response.text();
                console.log("Réponse du serveur : ", text);

                if (text.includes("succès") || text.includes("envoyé")) {
                    this.successMessage = "Votre message a été envoyé avec succès ";
                    this.form = { name: "", email: "", subject: "", message: "" };
                } else {
                    this.errorMessage = text || "Une erreur est survenue, veuillez rééssayer";
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

</style>