import { createRouter, createWebHistory } from 'vue-router';
import NotFound from '@/vues/public/NotFound.vue';
import PublicLayout from '@/vues/public/Layout.vue';
import Reservation from '@/vues/public/Reservation.vue';
import Home from '@/vues/public/Home.vue';

const routes = [
	{
		path: '/',
		name: 'PublicLayout',
		component: PublicLayout,
		children: [
			{
				path: '/',
				name: 'Home',
				component: Home
			},
			{
				path: '/Reservation',
				name: 'Reservation',
				component: Reservation,
			}
		]
	},
	{
		path: '/:pathMatch(.*)*', component: NotFound
	}
];

const router = createRouter({
	history: createWebHistory(),
	routes,
});

export default router;