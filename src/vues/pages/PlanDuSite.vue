<template>
    <div class="PlanDuSite container mb-5">

        <h1 class="mt-5 mb-5">{{ langState.labels.planDuSite }} <font-awesome-icon :icon="['fas', 'sitemap']" /></h1>

        <div class="text-center">
            <div class="table-responsive">
                <table class="table">
                    <tbody>
                        <tr>
                            <td colspan="2">
                                <router-link to="/" class="btn button-color2 pt-3 pb-3 fw-bold text-decoration-none col-12" role="button" aria-label="Retour à la page d’accueil">
                                    {{ langState.labels.accueil }}
                                </router-link>
                            </td>
                        </tr>
                        <tr>
                            <td class="pt-3 pb-3 pt-md-5 pb-md-5">
                                <font-awesome-icon :icon="['fas', 'arrow-down']" />
                            </td>
                            <td class="pt-3 pb-3 pt-md-5 pb-md-5">
                                <font-awesome-icon :icon="['fas', 'arrow-down']" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <router-link to="/pages/Profil" class="btn button-color4 fw-bold text-decoration-none col-12" role="button" aria-label="Navigation vers profil">
                                    {{ langState.labels.profil }}
                                </router-link>
                            </td>
                            <td>
                                <router-link to="/pages/Contact" class="btn button-color1 fw-bold text-decoration-none col-12" role="button" aria-label="Navigation vers contact">
                                    {{ langState.labels.contact }}
                                </router-link>
                            </td>
                        </tr>
                        <tr>
                            <td class="pt-3 pb-3 pt-md-5 pb-md-5">
                                <font-awesome-icon :icon="['fas', 'arrow-down']" />
                            </td>
                            <td class="pt-3 pb-3 pt-md-5 pb-md-5">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <router-link to="/pages/Experiences" class="btn button-color3 fw-bold text-decoration-none col-12" role="button" aria-label="Navigation vers expériences">
                                    {{ langState.labels.experiences }}
                                </router-link>
                            </td>
                            <td>
                                <router-link to="/pages/Experiences" class="btn hidden col-12" role="button" aria-label="Navigation vers expériences">
                                    {{ langState.labels.experiences }}
                                </router-link>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <router-link to="/pages/Competences" class="btn button-color4 fw-bold text-decoration-none col-12" role="button" aria-label="Navigation vers compétences">
                                    {{ langState.labels.competences }}
                                </router-link>
                            </td>
                            <td>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <router-link to="/pages/Formations" class="btn button-color1 fw-bold text-decoration-none col-12" role="button" aria-label="Navigation vers formations">
                                    {{ langState.labels.formations }}
                                </router-link>
                            </td>
                            <td>
                            </td>
                        </tr>
                        <tr>
                            <td class="pt-3 pb-3 pt-md-5 pb-md-5">
                                <font-awesome-icon :icon="['fas', 'arrow-down']" />
                            </td>
                            <td class="pt-3 pb-3 pt-md-5 pb-md-5">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <router-link to="/pages/Loisirs" class="btn button-color2 fw-bold text-decoration-none col-12" role="button" aria-label="Navigation vers loisirs">
                                    {{ langState.labels.loisirs }}
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
import { languageState, changeLangage } from '@/assets/langages/langService';

import '@/assets/css/PagesStyle.css';

export default {
    name: 'PlanDuSite',

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
}
</script>


<style scoped>
.table tr, .table td, .table th {
    border: none;
}
.hidden {
    color: #f8f9fa !important;
}
</style>