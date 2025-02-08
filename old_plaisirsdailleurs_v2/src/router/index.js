import { createRouter, createWebHistory } from 'vue-router';

import Home from '@/vues/public/Home.vue';
import NotFound from '@/vues/public/NotFound.vue';
import Reservation from '@/vues/public/Reservation.vue';
import PublicLayout from '@/vues/public/PublicLayout.vue';

import AdminLayout from '@/vues/admin/Layout.vue';
import Dashboard from '@/vues/admin/Dashboard.vue';

import UserIndex from '@/vues/admin/users/UserIndex.vue';
import UserEdit from '@/vues/admin/users/UserEdit.vue';
import UserAdd from '@/vues/admin/users/UserAdd.vue';

import CocktailEdit from '@/vues/admin/cocktails/CocktailEdit.vue';
import CocktailIndex from '@/vues/admin/cocktails/CocktailIndex.vue';

import Login from '@/vues/auth/Login.vue'
import { authGuard } from '@/vues/auth/auth-guard.js';

const routes = [
	{
		path: '/',
		name: 'public',
		component: PublicLayout,
		children: [
			{ path: '/', name: 'Home', component: Home },
			{ path: '/Reservation', name: 'Reservation', component: Reservation },
			{ path: '/:pathMatch(.*)*', redirect: '/' },
		]
	},
	{
		path: '/',
		name: 'admin',
		beforeEnter: authGuard,
		component: AdminLayout,
		children: [
			{ path: '/admin/Dashboard', name: 'Dashboard', component: Dashboard },
			{ path: '/admin/users/UserIndex', component: UserIndex },
			{ path: '/admin/users/UserEdit/:id(\\d+)', component: UserEdit, props: true },
			{ path: '/admin/users/UserAdd', component: UserAdd },

			{ path: '/admin/cocktails/CocktailIndex', component: CocktailIndex },
			{ path: '/admin/cocktails/CocktailEdit', component: CocktailEdit },
			{ path: '/admin/:pathMatch(.*)*', component: Dashboard },
		]
	},
	{
		path: '/auth/Login', name: 'Login', component: Login
	},
	{
		path: '/:pathMatch(.*)*', name: 'NotFound', component: NotFound
	},
];

const router = createRouter({
	history: createWebHistory(),
	routes
});

export default router;