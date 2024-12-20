import { createRouter, createWebHistory } from 'vue-router';

import * as Public from '@/vues/public'

import * as Admin from '@/vues/admin'

import Login from '@/vues/auth/Login.vue'
import { authGuard } from '@/vues/auth/auth-guard.js';

const routes = [
	{
		path: '/',
		name: 'PublicLayout',
		component: Public.PublicLayout,
		children: [
			{ path: '/', name: 'Home', component: Public.Home },
			{ path: '/Reservation', name: 'Reservation', component: Public.Reservation },
		]
	},
	{
		path: '/',
		name: 'AdminLayout',
		beforeEnter: authGuard,
		component: Admin.AdminLayout,
		children: [
			{ path: '/admin/Dashboard', name: 'Dashboard', component: Admin.Dashboard },
			{ path: '/admin/users/UserIndex', component: Admin.UserIndex },
			{ path: '/admin/users/UserEdit/:id(\\d+)', component: Admin.UserEdit, props: true },
			{ path: '/admin/users/UserAdd', component: Admin.UserAdd },

			{ path: '/admin/cocktails/CocktailIndex', component: Admin.CocktailIndex },
			{ path: '/admin/cocktails/CocktailEdit', component: Admin.CocktailEdit },
			{ path: '/:pathMatch(.*)*', component: Admin.Dashboard },
		]
	},
	{
		path: '/auth/Login', name: 'Login', component: Login
	},
	{
		path: '/:pathMatch(.*)*', component: Public.NotFound
	},
];

const router = createRouter({
	history: createWebHistory(),
	routes,
});

export default router;