<template>
    <div class="public">
        <public-titre/>
        <router-view/>
        <public-footer/>
    </div>
</template>

<script>
import PublicTitre from '@/components/PublicTitre.vue';
import PublicFooter from '@/components/PublicFooter.vue';
export default {
    name: "PublicLayout",
    components: {
        PublicTitre,
        PublicFooter,
    },
}
</script>