<template>
    <div class="PlanDuSite container mb-5">

        <h1 class="mt-5 mb-5">Plan du site <fa :icon="['fas', 'sitemap']" /></h1>

        <div class="text-center">
            <div class="table-responsive">
                <table class="table">
                    <tbody>
                        <tr>
                            <td colspan="2">
                                <router-link to="/" class="btn btn-success pt-3 pb-3 text-light fw-bold text-decoration-none col-12">
                                    Accueil
                                </router-link>
                            </td>
                        </tr>
                        <tr>
                            <td class="pt-3 pb-3 pt-md-5 pb-md-5">
                                <fa :icon="['fas', 'arrow-down']" />
                            </td>
                            <td class="pt-3 pb-3 pt-md-5 pb-md-5">
                                <fa :icon="['fas', 'arrow-down']" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <router-link to="/pages/Profil" class="btn btn-primary text-light fw-bold text-decoration-none col-12">
                                    Profil
                                </router-link>
                            </td>
                            <td>
                                <router-link to="/pages/Contact" class="btn contact text-light fw-bold text-decoration-none col-12">
                                    Contact
                                </router-link>
                            </td>
                        </tr>
                        <tr>
                            <td class="pt-3 pb-3 pt-md-5 pb-md-5">
                                <fa :icon="['fas', 'arrow-down']" />
                            </td>
                            <td class="pt-3 pb-3 pt-md-5 pb-md-5">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <router-link to="/pages/Experiences" class="btn btn-success text-light fw-bold text-decoration-none col-12">
                                    Expériences
                                </router-link>
                            </td>
                            <td>
                                <router-link to="/pages/Experiences" class="btn hidden col-12">
                                    Expériences
                                </router-link>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <router-link to="/pages/Competences" class="btn btn-info text-light fw-bold text-decoration-none col-12">
                                    Compétences
                                </router-link>
                            </td>
                            <td>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <router-link to="/pages/Formations" class="btn btn-primary text-light fw-bold text-decoration-none col-12">
                                    Formations
                                </router-link>
                            </td>
                            <td>
                            </td>
                        </tr>
                        <tr>
                            <td class="pt-3 pb-3 pt-md-5 pb-md-5">
                                <fa :icon="['fas', 'arrow-down']" />
                            </td>
                            <td class="pt-3 pb-3 pt-md-5 pb-md-5">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <router-link to="/pages/Loisirs" class="btn btn-secondary text-light fw-bold text-decoration-none col-12">
                                    Loisirs
                                </router-link>
                            </td>
                            <td class="pt-5 pb-5">
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

	</div>
</template>


<script>
import '@/assets/css/PagesStyle.css';

export default {
    name: 'PlanDuSite',
}
</script>


<style scoped>
.table tr, .table td, .table th {
    border: none;
}
.contact {
    background: #63C7B2;
    color: white;
    font-weight: bold;
}
.contact:hover {
    background: #56ab97;
    color: white;
}
.hidden {
    color: #f8f9fa !important;
}
</style>