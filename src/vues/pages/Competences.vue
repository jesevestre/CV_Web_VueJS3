<template>
    <div class="Competences container mb-5">

        <h1 class="mt-5 mb-5">Compétences
            <font-awesome-icon :icon="['fas', 'computer']" />
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

import ProgrammationContent from '@/components/pages/ProgrammationContent.vue';
import EnvironnementsContent from '@/components/pages/EnvironnementsContent.vue';

export default {
    name: 'Competences',
    data() {
        return {
            activeTab: 'Programmation',
            tabs: [
                { id: 'Programmation', label: 'Programmation', component: markRaw(ProgrammationContent) },
                { id: 'Environnements', label: 'Environnements', component: markRaw(EnvironnementsContent) },
            ]
        };
    }
};
</script>


<style scoped>

</style>