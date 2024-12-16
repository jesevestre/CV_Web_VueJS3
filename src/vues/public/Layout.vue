<template>
    <div class="public">
        <public-titre/>
        <router-view/>
    </div>
</template>

<script>
import PublicTitre from '@/components/PublicTitre.vue';
export default {
    name: "PublicLayout",
    components: {
        PublicTitre,
    },
}
</script>

<style>

</style>