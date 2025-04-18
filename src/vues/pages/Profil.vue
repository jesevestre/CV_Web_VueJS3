<template>
    <div class="Profil container mb-5">

        <h1 class="mt-5 mb-5">{{ langState.labels.profil }} <font-awesome-icon :icon="['fas', 'id-card-clip']" />
        </h1>

        <ProfilContent />

        <ProfilCVContent />

    </div>
</template>

<script>
import { languageState, changeLangage } from '@/assets/langages/langService';

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
            // Gestion de la langue
            langState: languageState,
        };
    },

    methods: {
        // Gestion de la langue
        changeLangage,
    },
};
</script>


<style scoped>

</style>