<template>
    <div class="Profil container mb-5">

        <h1 class="mt-5 mb-5">Profil
            <font-awesome-icon :icon="['fas', 'id-card-clip']" />
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
};
</script>


<style scoped>

</style>