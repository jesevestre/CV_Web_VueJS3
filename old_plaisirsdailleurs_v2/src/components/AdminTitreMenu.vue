<template>
    <h1>
        <fa icon="fan" /> Espace admin
    </h1>

    <div class="menu-div">
            <router-link class="bouton-menu" to="/admin/dashboard">Tableau de bord</router-link>&nbsp;|
            <router-link class="bouton-menu" to="/admin/users/UserIndex">User list</router-link>&nbsp;|
            <router-link class="bouton-menu" to="/admin/users/UserEdit/12">User edit</router-link>&nbsp;|
            <router-link class="bouton-menu" to="/admin/users/UserAdd">User add</router-link>&nbsp;|
            <router-link class="bouton-menu" to="/">Déconnexion</router-link>
        </div>
</template>

<script>
export default {
    name: "AdminTitreMenu",
}
</script>

<style>
h1 {
    font-family: "Sour Gummy", sans-serif;
    display: block;
    text-align: center;

    padding-top: 20px;
    padding-bottom: 20px;

    font-size: 3.5rem;
}

.menu-div {
	text-align: center;
}
.bouton-menu {
	text-align: center;
	color: #444;
	border: none;
	margin: 4px 2px;
	outline: none;
	font-size: 18px;
	cursor: pointer;
	text-decoration: none;
}
.bouton-menu:hover {
	color: #777;
}

@media screen and (max-width: 575px) {
	h1 {
		font-size: 2.5rem;
		padding-bottom: 10px;
	}
}
</style>