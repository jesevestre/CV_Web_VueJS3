<template>
    <div class="Loisirs container mb-5">

        <h1 class="mt-5 mb-5">{{ langState.labels.loisirs }}
            <font-awesome-icon :icon="['fas', 'sun']" />
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

import BenevolatContent from '@/components/pages/BenevolatsContent.vue';
import SportContent from '@/components/pages/SportsContent.vue';
import AutreContent from '@/components/pages/AutresContent.vue';

export default {
    name: 'Loisirs',

    data() {
        return {
            // Gestion de la langue
            langState: languageState,

            // Gestion des sections
            activeTab: 'benevolat',
            tabs: [],
        };
    },

    created() {
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

        setTabs() {
            this.tabs = [
                { id: 'benevolat', label: this.langState.labels.benevolats, component: markRaw(BenevolatContent) },
                { id: 'sport', label: this.langState.labels.sports, component: markRaw(SportContent) },
                { id: 'autre', label: this.langState.labels.autres, component: markRaw(AutreContent) },
            ];
        },
    },
};
</script>


<style scoped>

</style>