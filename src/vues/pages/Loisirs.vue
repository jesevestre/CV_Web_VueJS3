<template>
    <div class="Loisirs container mb-5">

        <h1 class="mt-5 mb-5">{{ loisirsLabels.loisirs }}
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
import { markRaw } from 'vue';
import '@/assets/css/PagesStyle.css';

import BenevolatContent from '@/components/pages/BenevolatsContent.vue';
import SportContent from '@/components/pages/SportsContent.vue';
import AutreContent from '@/components/pages/AutresContent.vue';

export default {
    name: 'Loisirs',

    data() {
        return {
            loisirsLabels: {},
            activeTab: 'benevolat',
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
                this.loisirsLabels  = {
                    loisirs: "Loisirs",
                    benevolats: "Bénévolats",
                    sports: "Sports",
                    autres: "Autres loisirs",
                };
            } else {
                this.loisirsLabels  = {
                    loisirs: 'Hobbies',
                    benevolats: "Volunteering",
                    sports: "Sports",
                    autres: "Other hobbies",
                };
            }

            this.setTabs();
        },

        setTabs() {
            this.tabs = [
                { id: 'benevolat', label: this.loisirsLabels.benevolats, component: markRaw(BenevolatContent) },
                { id: 'sport', label: this.loisirsLabels.sports, component: markRaw(SportContent) },
                { id: 'autre', label: this.loisirsLabels.autres, component: markRaw(AutreContent) },
            ];
        },
    },
};
</script>


<style scoped>

</style>