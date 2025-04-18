<template>
    <div class="Experiences container mb-5">

        <h1 class="mt-5 mb-5">{{ langState.labels.experiences }}
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
import { languageState, changeLangage } from '@/assets/langages/langService';

import { markRaw } from 'vue';
import '@/assets/css/PagesStyle.css';

import ProfessionnellesContent from '@/components/pages/ProfessionnellesContent.vue';
import StagesContent from '@/components/pages/StagesContent.vue';
import ProjetsPerso from '@/components/pages/MesProjetsContent.vue';

export default {
    name: 'Experiences',

    data() {
        return {
            // Gestion de la langue
            langState: languageState,

            // Gestion des sections
            activeTab: 'professionnelles',
            tabs: [],
        };
    },
    
    created() {
        // Gestion des sections
        this.setTabs();
    },

    watch: {
        // Gestion de la langue
        'langState.currentLang'() {
            this.setTabs();
        },
    },

    methods: {
        // Gestion de la langue
        changeLangage,

        // Gestion des sections
        setTabs() {
            this.tabs = [
                { id: 'professionnelles', label: this.langState.labels.professionnelles, component: markRaw(ProfessionnellesContent) },
                { id: 'stages', label: this.langState.labels.stages, component: markRaw(StagesContent) },
                { id: 'mesProjets', label: this.langState.labels.mesProjets, component: markRaw(ProjetsPerso) }
            ];
        },
    },
};
</script>


<style scoped>

</style>