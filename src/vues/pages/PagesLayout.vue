<template>
    <div class="public">
        <Menu />
        <router-view />
        <Footer />
    </div>
</template>


<script>
import Menu from '@/components/Menu.vue';
import Footer from '@/components/Footer.vue';

export default {
    name: 'PageLayout',
    
    components: {
        Footer,
        Menu,
    },
}
</script>


<style scoped>

</style>