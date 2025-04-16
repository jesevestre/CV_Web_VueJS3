<template>
    <div class="Experiences container mb-5">

        <h1 class="mt-5 mb-5">{{ experiencesLabels.experiences }}
            <font-awesome-icon :icon="['fas', 'user-doctor']" />
        </h1>

        <div class="onglet-titre">
            <ul class="onglet-titre-tabs" role="tablist">
                <li 
                    v-for="tab in tabs" 
                    :key="tab.id" 
                    :class="{ active: activeTab === tab.id }" 
                    @click="activeTab = tab.id"
                    role="tab"
                    :aria-selected="activeTab === tab.id ? 'true' : 'false'"
                    :aria-controls="tab.id"
                    tabindex="0" 
                >
                    <a href="javascript:void(0)" role="presentation">{{ tab.label }}</a>
                </li>
            </ul>
        </div>

        <div>
            <div class="tabs-content">
                <Transition name="fade" mode="out-in">
                    <component 
                        :is="tabs.find(tab => tab.id === activeTab)?.component || 'div'" 
                        :key="activeTab"
                        role="tabpanel" 
                        :aria-labelledby="activeTab"
                        tabindex="0"
                    >
                    </component>
                </Transition>
            </div>
        </div>

    </div>
</template>

<script>
import { markRaw } from 'vue';
import '@/assets/css/PagesStyle.css';

import ProfessionnellesContent from '@/components/pages/ProfessionnellesContent.vue';
import StagesContent from '@/components/pages/StagesContent.vue';
import ProjetsPerso from '@/components/pages/MesProjetsContent.vue';

export default {
    name: 'Experiences',

    data() {
        return {
            experiencesLabels: {},
            activeTab: 'professionnelles',
            tabs: [],
        };
    },
    
    created() {
        this.setLanguageAndLabels();
    },

    methods: {
        setLanguageAndLabels() {
            const supportedLangs = ['fr', 'en'];
            const browserLang = navigator.language.slice(0, 2);
            const savedLang = localStorage.getItem('lang');
            const lang = savedLang || (supportedLangs.includes(browserLang) ? browserLang : 'fr');

            document.documentElement.setAttribute('lang', lang);

            if (lang === 'fr') {
                this.experiencesLabels  = {
                    experiences: "Expériences",
                    professionnelles: "Professionnelles",
                    stages: "Stages",
                    mesProjets: "Mes projets",
                };
            } else {
                this.experiencesLabels  = {
                    professionnelles: "Professional",
                    stages: "Internship",
                    mesProjets: "My projects",
                };
            }

            this.setTabs();
        },

        setTabs() {
            this.tabs = [
                { id: 'professionnelles', label: this.experiencesLabels.professionnelles, component: markRaw(ProfessionnellesContent) },
                { id: 'stages', label: this.experiencesLabels.stages, component: markRaw(StagesContent) },
                { id: 'mesProjets', label: this.experiencesLabels.mesProjets, component: markRaw(ProjetsPerso) }
            ];
        },
    },
};
</script>


<style scoped>

</style>