<template>
    <div class="Formations container mb-5">

        <h1 class="mt-5 mb-5">{{ langState.labels.formations }}
            <font-awesome-icon :icon="['fas', 'graduation-cap']" />
        </h1>

        <FormationsContent />

    </div>
</template>

<script>
import { languageState, changeLangage } from '@/assets/langages/langService';

import '@/assets/css/PagesStyle.css';

import FormationsContent from '@/components/pages/FormationsContent.vue';

export default {
    name: 'Formations',

    components: {
        FormationsContent,
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