import { createRouter, createWebHistory } from 'vue-router';

import * as Public from '@/vues/public'

import * as Admin from '@/vues/admin'

const routes = [
	{
		path: '/',
		name: 'PublicLayout',
		component: Public.PublicLayout,
		children: [
			{ path: '/', name: 'Home', component: Public.Home },
			{ path: '/Reservation', name: 'Reservation', component: Public.Reservation },
			{ path: '/Reservation31decembre', name: 'Reservation31decembre', component: Public.Reservation31decembre },
		]
	},
	{
		path: '/admin',
		name: 'AdminLayout',
		component: Admin.AdminLayout,
		children: [
			{ path: 'Dashboard', name: 'Dashboard', component: Admin.Dashboard },
			{ path: '/users/index', component: Admin.UserIndex },
			{ path: '/users/edit/:id', component: Admin.UserEdit },
			{ path: '/users/add', component: Admin.UserAdd },

			{ path: '/cocktails/CocktailIndex', component: Admin.CocktailIndex },
			{ path: '/cocktails/CocktailEdit', component: Admin.CocktailEdit },
		]
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