<template>
    <div class="admin">
        <AdminTitreMenu/>
        <router-view/>
        <PublicFooter/>
    </div>
</template>

<script>
import AdminTitreMenu from '@/components/AdminTitreMenu.vue';
import PublicFooter from '@/components/PublicFooter.vue';
export default {
    name: "AdminLayout",
    components: {
        AdminTitreMenu,
        PublicFooter,
    },
}
</script>