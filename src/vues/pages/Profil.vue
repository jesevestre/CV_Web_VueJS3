<template>
    <div class="Profil container mb-5">

        <h1 class="mt-5 mb-5">{{ profilLabels.profil }} <font-awesome-icon :icon="['fas', 'id-card-clip']" />
        </h1>

        <ProfilContent />

        <ProfilCVContent />

    </div>
</template>

<script>
import '@/assets/css/PagesStyle.css';

import ProfilContent from '@/components/pages/ProfilContent.vue';
import ProfilCVContent from '@/components/pages/ProfilCVContent.vue';

export default {
    name: 'Profil',

    components: {
        ProfilContent,
        ProfilCVContent,
    },

    data() {
        return {
            profilLabels: {},
        };
    },

    created() {
        this.setLanguageAndLabels();
    },

    methods: {
        setLanguageAndLabels() {
            const supportedLangs = ['fr', 'en'];
            const browserLang = navigator.language.slice(0, 2);
            const savedLang = localStorage.getItem('lang');
            const lang = savedLang || (supportedLangs.includes(browserLang) ? browserLang : 'fr');

            document.documentElement.setAttribute('lang', lang);
            
            if (lang === 'fr') {
                this.profilLabels  = {
                    profil: "Profil",
                };
            } else {
                this.profilLabels  = {
                    profil: 'Profile',
                };
            }
        },
    },
};
</script>


<style scoped>

</style>