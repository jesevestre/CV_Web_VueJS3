<template>
    <div class="public">
        <PublicTitreMenu/>
        <router-view/>
        <PublicFooter/>
    </div>
</template>

<script>
import PublicTitreMenu from '@/components/PublicTitreMenu.vue';
import PublicFooter from '@/components/PublicFooter.vue';
export default {
    name: "PublicLayout",
    components: {
        PublicTitreMenu,
        PublicFooter,
    },
}
</script>