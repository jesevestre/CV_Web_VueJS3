import { createRouter, createWebHistory } from 'vue-router';

import Home from '@/vues/Home.vue';

import PagesLayout from '@/vues/pages/PagesLayout.vue';

import MentionLegales from '@/vues/pages/MentionLegales.vue';
import PlanDuSite from '@/vues/pages/PlanDuSite.vue';
import Contact from '@/vues/pages/Contact.vue';

// import Profil from '@/vues/pages/Profil.vue';
import Experiences from '@/vues/pages/Experiences.vue';
import Competences from '@/vues/pages/Competences.vue';
import Formations from '@/vues/pages/Formations.vue';
import Loisirs from '@/vues/pages/Loisirs.vue';

const routes = [
	{ path: '/', name: 'Home', component: Home },
	{
		path: '/pages',
		name: 'pages',
		component: PagesLayout,
		children: [
			{ path: 'MentionLegales', name: 'MentionLegales', component: MentionLegales },
			{ path: 'PlanDuSite', name: 'PlanDuSite', component: PlanDuSite },
			{ path: 'Contact', name: 'Contact', component: Contact },

			// { path: 'Profil', name: 'Profil', component: Profil },
			{ path: 'Experiences', name: 'Experiences', component: Experiences },
			{ path: 'Competences', name: 'Competences', component: Competences },
			{ path: 'Formations', name: 'Formations', component: Formations },
			{ path: 'Loisirs', name: 'Loisirs', component: Loisirs },
		]
	},
	{
		path: '/:pathMatch(.*)*', redirect: '/'
	},
];

const router = createRouter({
	history: createWebHistory(),
	routes,
});

export default router;