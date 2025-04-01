<template>
	<div class="Menu">
		<header>

			<div class="navbar">
				<div class="logo">
					<router-link to="/">
                		Accueil
            		</router-link>
				</div>
				<ul class="links">
					<li>
						<router-link to="/pages/Profil">
                        	Profil
                    	</router-link>
					</li>
					<li>
						<router-link to="/pages/Experiences">
                        	Expériences
                    	</router-link>
					</li>
					<li>
						<router-link to="/pages/Competences">
                        	Compétences
                    	</router-link>
					</li>
					<li>
						<router-link to="/pages/Formations">
                        	Formations
                    	</router-link>
					</li>
					<li>
						<router-link to="/pages/Loisirs">
                        	Loisirs
                    	</router-link>
					</li>
				</ul>
				<div class="buttons">
					<router-link to="/pages/Contact" class="action-button">
                        Contact
                    </router-link>
				</div>
				<div class="burger-menu-button" @click="toggleMenu">
					<fa :icon="isMenuOpen ? ['fas', 'xmark'] : ['fas', 'bars']" />
				</div>
			</div>

			<div class="burger-menu" :class="{ open: isMenuOpen }">
				<ul class="links">
					<li>
						<router-link to="/pages/Profil">
                        	Profil
                    	</router-link>
					</li>
					<li>
						<router-link to="/pages/Experiences">
                        	Expériences
                    	</router-link>
					</li>
					<li>
						<router-link to="/pages/Competences">
                        	Compétences
                    	</router-link>
					</li>
					<li>
						<router-link to="/pages/Formations">
                        	Formations
                    	</router-link>
					</li>
					<li>
						<router-link to="/pages/Loisirs">
                        	Loisirs
                    	</router-link>
					</li>
					<div class="divider"></div>
					<div class="buttons-burger-menu">
						<router-link to="/pages/Contact" class="action-button">
                        	Contact
                    	</router-link>
					</div>
				</ul>
			</div>

		</header>
	</div>
</template>

<script>
export default {
    name: 'Menu',

	data() {
        return {
            isMenuOpen: false,
        };
    },

	methods: {
        toggleMenu() {
            this.isMenuOpen = !this.isMenuOpen;
        },
    },
}
</script>

<style scoped>
* {
	box-sizing: border-box;
	font-family: "Poppins", sans-serif;
	font-weight: 800;
	margin: 0;
	padding: 0;

}
li {
	list-style: none;
}
a {
	text-decoration: none;
	color: #FFF;
	font-size: 1rem;
}
a:hover {
	color: #63C7B2;
}
header {
	position: relative;
	padding: 0 2rem;
	background-color: #444;
}
.navbar {
	display: flex;
	align-items: center;
	justify-content: space-between;
	width: 100%;
	max-width: 1200px;
	height: 60px;
	margin: 0 auto;
}
.navbar .logo a {
	font-weight: bold;
	font-size: 1.5rem;
}
.navbar .links {
	display: flex;
	gap: 1.5rem;
}
.navbar .burger-menu-button {
	display: none;
	color: #FFF;
	font-size: 1.5rem;
	cursor: pointer;

}
.buttons {
	display: flex;
	gap: 10px;
}
.action-button {
	outline: none;
	color: white;
	background-color: #63C7B2;
	border: 1px solid #444;
	padding: 0.5rem 1.2rem;
	border-radius: 5px;
	font-size: 0.9rem;
	font-weight: bold;
	cursor: pointer;
}
.action-button:hover {
	color: #FFF;
	background-color: #56ab97;
}
/* Burger menu */
.burger-menu {
	display: none;
	position: absolute;
	height: 0;
	background-color: rgba(0, 0, 0, 0.7);
	right: 0.4rem;
	top: 65px;
	width: 200px;
	backdrop-filter: blur(15px);
	border-radius: 4px;
	overflow: hidden;
	transition: height 0.3s ease-out, opacity 0.2s ease-out;
	opacity: 0;
}
.burger-menu li {
	display: flex;
	align-items: center;
	justify-content: center;
	padding: 0.7rem;
}
.divider {
	height: 1px;
	width: 80%;
	background: #FFF;
	margin-left: auto;
	margin-right: auto;
	margin-bottom: 1rem;
}
.burger-menu .action-button {
	display: flex;
	justify-content: center;
	align-items: center;
	width: 80%;
}
.buttons-burger-menu {
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;
}
.burger-menu.open {
	height: 305px;
	opacity: 1;
}

/* Accessiblité mobile/tablette/PC */
@media screen and (max-width: 850px) {
	.navbar .links,
	.navbar .buttons {
		display: none;
	}
	.navbar .burger-menu-button {
		display: block;
	}
	.burger-menu {
		display: block;
	}
}
@media screen and (max-width: 500px) {
	.burger-menu {
		width: unset;
		right: 1.5rem;
		left: 1.5rem;
	}
}
</style>