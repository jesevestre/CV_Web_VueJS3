<template>
    <div class="Contact container mb-5">

        <h1 class="mt-5 mb-5">{{ contactLabels.contact }} <font-awesome-icon :icon="['fas', 'envelope']" /></h1>

        <form @submit.prevent="sendMessage">
            <label for="name">{{ contactLabels.nom }}</label>
            <input v-model="form.name" type="text" class="form-control mb-5" id="name" :placeholder="contactLabels.nomPlaceholder" required />

            <label for="email">{{ contactLabels.email }}</label>
            <input v-model="form.email" type="email" class="form-control mb-5" id="email"
            :placeholder="contactLabels.emailPlaceholder" required />

            <label for="subject">{{ contactLabels.sujet }}</label>
            <input v-model="form.subject" type="text" class="form-control mb-5" id="subject" :placeholder="contactLabels.sujetPlaceholder" required />

            <label for="message">{{ contactLabels.message }}</label>
            <textarea v-model="form.message" class="form-control mb-5" rows="5" id="message" :placeholder="contactLabels.messagePlaceholder" required></textarea>

            <div class="legendeCaptcha mb-4">
                <div ref="recaptcha" class="g-recaptcha"></div>
            </div>

            <div class="d-grid gap-2 col-4 col-sm-3 col-md-2 mx-auto">
                <button type="submit" class="btn button-color1 fw-bold" :disabled="loading"
                    aria-label="Envoyer le message">
                    {{ loading ? "Envoi..." : "Envoyer" }}
                </button>
            </div>

            <div v-if="successMessage" class="alert alert-success mt-3 d-flex justify-content-center align-items-center"
                role="status" aria-live="polite">
                {{ successMessage }}&nbsp;<font-awesome-icon :icon="['fas', 'check']" />
            </div>
            <div v-if="errorMessage" class="alert alert-warning mt-3 d-flex justify-content-center align-items-center"
                role="alert" aria-live="assertive">
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
            contactLabels: {},

            form: {
                name: '',
                email: '',
                subject: '',
                message: '',
                recaptchaResponse: '',
            },
            loading: false,
            successMessage: '',
            errorMessage: '',
        };
    },

    created() {
        this.setLanguageAndLabels();
    },

    methods: {
        // Gestion du language
        setLanguageAndLabels() {
            const supportedLangs = ['fr', 'en'];
            const browserLang = navigator.language.slice(0, 2);
            const savedLang = localStorage.getItem('lang');
            const lang = savedLang || (supportedLangs.includes(browserLang) ? browserLang : 'fr');

            document.documentElement.setAttribute('lang', lang);
            
            if (lang === 'fr') {
                this.contactLabels  = {
                    contact: 'Contact',
                    nom: 'Nom complet :',
                    nomPlaceholder: 'Votre prénom et nom',
                    email: 'Adresse email :',
                    emailPlaceholder: 'Votre adresse email',
                    sujet: 'Sujet :',
                    sujetPlaceholder: 'Titre du sujet',
                    message: 'Message :',
                    messagePlaceholder: 'Votre message',
                };
            } else {
                this.contactLabels  = {
                    contact: 'Contact',
                    nom: 'Full name :',
                    nomPlaceholder: 'Your firstname and lastname',
                    email: 'Email address :',
                    emailPlaceholder: 'Your email adress',
                    sujet: 'Subject :',
                    sujetPlaceholder: 'Subject title',
                    message: 'Message :',
                    messagePlaceholder: 'Your message',
                };
            }
        },

        // Envoi du formulaire
        async sendMessage() {
            this.loading = true;
            this.successMessage = '';
            this.errorMessage = '';

            try {
                const recaptchaResponse = document.querySelector('[name="g-recaptcha-response"]')?.value;

                if (!recaptchaResponse) {
                    this.errorMessage = 'Vous devez valider le reCaptcha ';
                    this.loading = false;
                    return;
                }

                const formData = new FormData();
                formData.append('name', this.form.name);
                formData.append('email', this.form.email);
                formData.append('subject', this.form.subject);
                formData.append('message', this.form.message);
                formData.append('recaptcha_response', recaptchaResponse);

                const response = await fetch('https://jbsevestre.fr/backend/contact/contact.php', {
                    method: 'POST',
                    body: formData,
                });

                const text = await response.text();
                console.log('Réponse du serveur : ', text);

                if (text.includes('successMessage')) {
                    this.successMessage = 'Votre message a bien été envoyé ';
                    this.form = { name: '', email: '', subject: '', message: '' };
                } else if (text.includes('errorMessage1')) {
                    this.errorMessage = text || 'Tous les champs doivent être remplis ';
                } else if (text.includes('errorMessage2')) {
                    this.errorMessage = text || 'L\'adresse email renseignée est incorrecte ';
                } else if (text.includes('errorMessage3')) {
                    this.errorMessage = text || 'Vous devez valider le reCaptcha '
                } else if (text.includes('errorMessage4')) {
                    this.errorMessage = text || 'Une erreur inconnue c\'est produite, veuillez réessayer ';
                }
            } catch (error) {
                this.errorMessage = text || 'Impossible d\'envoyer le message, le formulaire n\'est pas parvenu jusqu\'au back ';
            } finally {
                this.loading = false;
            }
        },
    },

    // Gestion du reCaptcha
    mounted() {
        const renderCaptcha = () => {
            if (window.grecaptcha) {
                window.grecaptcha.render(this.$refs.recaptcha, {
                    sitekey: '6Lfp3RkrAAAAAKiTjPyzHOD5KmLRk76quIaG_YQV'
                });
            }
        };

        if (window.grecaptcha) {
            renderCaptcha();
        } else {
            const interval = setInterval(() => {
                if (window.grecaptcha) {
                    renderCaptcha();
                    clearInterval(interval);
                }
            }, 500);
        }
    }
};
</script>


<style scoped>
.legendeCaptcha {
    min-height: 75px;
    margin: 0 auto;
    width: 304px;
}
</style>