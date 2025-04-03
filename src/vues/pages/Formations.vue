<template>
    <div class="Formations container mb-5">

        <h1 class="mt-5 mb-5">Formations
            <font-awesome-icon :icon="['fas', 'graduation-cap']" />
        </h1>

        <ProjetsPerso />

    </div>
</template>

<script>
import '@/assets/css/PagesStyle.css';

import ProjetsPerso from '@/components/pages/FormationsContent.vue';

export default {
    name: 'Formations',

    components: {
        ProjetsPerso,
    },
};
</script>


<style scoped>

</style>