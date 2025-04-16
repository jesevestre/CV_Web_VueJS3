<template>
    <div class="Formations container mb-5">

        <h1 class="mt-5 mb-5">{{ FormationsLabels.formations }}
            <font-awesome-icon :icon="['fas', 'graduation-cap']" />
        </h1>

        <FormationsContent />

    </div>
</template>

<script>
import '@/assets/css/PagesStyle.css';

import FormationsContent from '@/components/pages/FormationsContent.vue';

export default {
    name: 'Formations',

    components: {
        FormationsContent,
    },

    data() {
        return {
            formationsLabels: {},
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
                this.FormationsLabels  = {
                    formations: "Formations",
                };
            } else {
                this.FormationsLabels  = {
                    formations: 'Education',
                };
            }
        },
    },
};
</script>


<style scoped>

</style>