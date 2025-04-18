<template>
	<div class="Menu">
		<header>

			<div class="navbar">
				<div class="logo">
					<router-link to="/" role="button" aria-label="Retour à la page d’accueil">
                		{{ langState.labels.accueil }}
            		</router-link>
				</div>
				<ul class="links">
					<li>
						<router-link to="/pages/Profil" role="button" aria-label="Navigation vers le profil">
                        	{{ langState.labels.profil }}
                    	</router-link>
					</li>
					<li>
						<router-link to="/pages/Experiences" role="button" aria-label="Navigation vers les expériences">
                        	{{ langState.labels.experiences }}
                    	</router-link>
					</li>
					<li>
						<router-link to="/pages/Competences" role="button" aria-label="Navigation vers les compétences">
                        	{{ langState.labels.competences }}
                    	</router-link>
					</li>
					<li>
						<router-link to="/pages/Formations" role="button" aria-label="Navigation vers les formations">
                        	{{ langState.labels.formations }}
                    	</router-link>
					</li>
					<li>
						<router-link to="/pages/Loisirs" role="button" aria-label="Navigation vers les loisirs">
                        	{{ langState.labels.loisirs }}
                    	</router-link>
					</li>
				</ul>
				<div class="buttons">
					<a @click="changeLangage" aria-label="Changer la langue en français">
                        <img src="@/assets/images/drapeauFR.jpg" class="drapeau" alt="Drapeau Français pour passer la langue en français" />
						<img src="@/assets/images/drapeauUSA2.png" class="drapeau" alt="American flag to pass the langage in English" />
                    </a>
					<router-link to="/pages/Contact" class="action-button button-color1" role="button" aria-label="Navigation vers contact">
                        {{ langState.labels.contact }}
                    </router-link>
				</div>
				<div class="burger-menu-button" @click="toggleMenu">
					<font-awesome-icon :icon="isMenuOpen ? ['fas', 'xmark'] : ['fas', 'bars']" class="icon-white" />
				</div>
			</div>

			<div class="burger-menu" :class="{ open: isMenuOpen }">
				<ul class="links">
					<li>
						<router-link to="/pages/Profil" role="button" aria-label="Navigation vers le profil">
                        	{{ langState.labels.profil }}
                    	</router-link>
					</li>
					<li>
						<router-link to="/pages/Experiences" role="button" aria-label="Navigation vers les expériences">
                        	{{ langState.labels.experiences }}
                    	</router-link>
					</li>
					<li>
						<router-link to="/pages/Competences" role="button" aria-label="Navigation vers les compétences">
                        	{{ langState.labels.competences }}
                    	</router-link>
					</li>
					<li>
						<router-link to="/pages/Formations" role="button" aria-label="Navigation vers les formations">
                        	{{ langState.labels.formations }}
                    	</router-link>
					</li>
					<li>
						<router-link to="/pages/Loisirs" role="button" aria-label="Navigation vers les loisirs">
                        	{{ langState.labels.loisirs }}
                    	</router-link>
					</li>
					<div class="divider"></div>
					<div class="buttons-burger-menu">
						<a @click="changeLangage" aria-label="Changer la langue en français">
							<img src="@/assets/images/drapeauFR.jpg" class="drapeau-buttons-burger" alt="Drapeau Français pour passer la langue en français" />
							<img src="@/assets/images/drapeauUSA2.png" class="drapeau-buttons-burger" alt="American flag to pass the langage in English" />
						</a>
						<router-link to="/pages/Contact" class="action-button button-color1" role="button" aria-label="Navigation vers contact">
                        	{{ langState.labels.contact }}
                    	</router-link>
					</div>
				</ul>
			</div>

		</header>
	</div>
</template>

<script>
import { languageState, changeLangage } from '@/assets/langages/langService';

import '@/assets/css/PagesStyle.css';

export default {
    name: 'Menu',

	data() {
        return {
			langState: languageState,
            isMenuOpen: false,
        };
    },

	methods: {
		changeLangage,

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
	font-size: 1.5rem;
	cursor: pointer;
}
.icon-white {
	color: #FFF;
}
.buttons {
	display: flex;
	gap: 10px;
}
.action-button {
	outline: none;
	border: 1px solid #444;
	padding: 0.5rem 1.2rem;
	border-radius: 5px;
	font-size: 0.9rem;
	font-weight: bold;
	cursor: pointer;
}
.drapeau {
    position: absolute;
    right: 105px;
    top: 11px;
    height: 38px;
	border-radius: 4px;
    cursor: pointer;

}
.drapeau-buttons-burger {
	position: absolute;
    top: 300px;
    height: 38px;
	left: 36%;
	border-radius: 4px;
    cursor: pointer;

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
	z-index: 10;
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
	height: 350px;
	opacity: 1;
}

/* Accessiblité mobile/tablette/PC */
@media screen and (max-width: 900px) {
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
@media screen and (max-width: 350px) {
	.burger-menu {
		width: unset;
		right: 1.5rem;
		left: 1.5rem;
	}
	.drapeau-buttons-burger {
		left: 40%;
	}
}
</style>