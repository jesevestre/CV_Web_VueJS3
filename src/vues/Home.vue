<template>
	<div class="Home">
		<div class="lignes">
			<div class="l1"></div>
			<div class="l2"></div>
		</div>

		<div class="container-first">
			<h1>
				<span>JEAN-</span>
				<span>BAPTISTE </span>
				<span>SEVESTRE</span>
			</h1>

			<div class="container-btns" role="navigation" aria-label="Navigation principale">
				<router-link to="/pages/Profil" class="btn-first b1" role="button" aria-label="Navigation vers le profil">
					{{ labels.profil }}
				</router-link>
				<router-link to="/pages/Experiences" class="btn-first b2" role="button" aria-label="Navigation vers les expériences">
					{{ labels.experiences }}
				</router-link>
				<router-link to="/pages/Competences" class="btn-first b3" role="button" aria-label="Navigation vers les compétences">
					{{ labels.competences }}
				</router-link>
				<router-link to="/pages/Formations" class="btn-first b4" role="button" aria-label="Navigation vers les formations">
					{{ labels.formations }}
				</router-link>
				<router-link to="/pages/Loisirs" class="btn-first b5" role="button" aria-label="Navigation vers les loisirs">
					{{ labels.loisirs }}
				</router-link>
			</div>
			
		</div>

		<div class="switch-mode" aria-label="Activer/Désactiver le mode sombre">
			<img src="@/assets/images/soleil_clair.png" class="soleil_clair" @click="toggleDarkMode" alt="Icône soleil clair" />
			<img src="@/assets/images/soleil_fonce.png" class="soleil_fonce" @click="toggleDarkMode" alt="Icône soleil foncé" />
			<input type="checkbox" id="clickDarkMode" v-model="isDarkMode" aria-label="Basculer le mode sombre" />
		</div>

		<div>
			<a @click="changeLangage" aria-label="Changer la langue en français">
				<img src="@/assets/images/drapeauFR.jpg" class="drapeau" alt="Drapeau Français" />
            </a>
			<a @click="changeLangage" aria-label="Switch the langage to English">
				<img src="@/assets/images/drapeauUSA2.png" class="drapeau" alt="American flag" />
            </a>
		</div>

		<ul class="medias">
			<li class="bulle">
				<a class="bulle_a" href="https://www.linkedin.com/in/jb-sevestre/" aria-label="Lien internet vers LinkedIn" target="_blank">
					<font-awesome-icon :icon="['fab', 'linkedin-in']" />
				</a>
			</li>
			<li class="bulle">
				<a class="bulle_a" href="https://github.com/jesevestre" aria-label="Lien internet vers GitHub" target="_blank">
					<font-awesome-icon :icon="['fab', 'github']" />
				</a>
			</li>
		</ul>

        <div class="divMaPhoto">
            <img src="@/assets/images/PhotoCV.jpg" class="maPhoto" alt="Ma photo de profil" />
        </div>

        <Footer />

	</div>
</template>


<script setup>
import Footer from '@/components/Footer.vue';
import { gsap } from "gsap";
import { ref, watchEffect, onMounted, nextTick } from 'vue';

// Mode sombre
const isDarkMode = ref(false);
const toggleDarkMode = () => {
	isDarkMode.value = !isDarkMode.value;
};
const applyDarkMode = () => {
	document.documentElement.style.setProperty("--background", isDarkMode.value ? "rgba(60, 60, 60, 0.6)" : "rgba(60, 60, 60, 0.3)");
	document.documentElement.style.setProperty("--background-btn", isDarkMode.value ? "rgba(60, 60, 60, 0.9)" : "rgba(60, 60, 60, 0.45)");
};
watchEffect(applyDarkMode);

// Gestion de la langue
const languages = ["fr", "en"];
const currentLangIndex = ref(0); // 0 = français, 1 = anglais
const translations = {
	fr: {
		profil: "Profil",
		experiences: "Expériences",
		competences: "Compétences",
		formations: "Formations",
		loisirs: "Loisirs",
	},
	en: {
		profil: "Profile",
		experiences: "Experiences",
		competences: "Skills",
		formations: "Education",
		loisirs: "Hobbies",
	},
};
const labels = ref(translations[languages[currentLangIndex.value]]);
const changeLangage = () => {
	currentLangIndex.value = (currentLangIndex.value + 1) % languages.length;
	labels.value = translations[languages[currentLangIndex.value]];
	localStorage.setItem('lang', languages[currentLangIndex.value]);
};

onMounted(() => {
    // Effet lors de la venue sur la page
	nextTick(() => {
        const l1 = document.querySelector('.l1');
        const l2 = document.querySelector('.l2');
        const drapeau = document.querySelectorAll('.drapeau');
        const switch1 = document.querySelector('.switch-mode');
		const titreSpans = document.querySelectorAll('h1 span');
        const btns = document.querySelectorAll('.btn-first');
        const medias = document.querySelectorAll('.bulle');
        const TL = gsap.timeline({ paused: true });

		TL
            .from(titreSpans, { stagger: 0.7, duration: 1.5, top: -30, opacity: 0, ease: "power2.out" })
            .from(l1, { duration: 1.5, width: 0, ease: "power2.out" }, '-=3')
            .from(l2, { duration: 1.5, width: 0, ease: "power2.out" }, '-=3')
            .from(drapeau, { duration: 0.5, transform: "scale(0)", ease: "power2.out" }, '-=1')
            .from(switch1, { duration: 0.5, transform: "scale(0)", ease: "power2.out" }, '-=1')
            .from(btns, { stagger: 0.35, duration: 1, opacity: 0, ease: "power2.out" }, '-=1')
            .from(medias, { stagger: 0.3, duration: 1.5, opacity: 0, filter: "blur(5px)", ease: "power2.out" }, '-=1')
            .to(medias, { opacity: 1, filter: "blur(0px)", duration: 2, ease: "power2.out" });
        
        TL.play();
	});

    // Gestion de la langue
    const savedLang = localStorage.getItem('lang');
	if (savedLang && languages.includes(savedLang)) {
		currentLangIndex.value = languages.indexOf(savedLang);
		labels.value = translations[savedLang];
	}
});
</script>


<style scoped>
.Home {
    font-family: Arial, Helvetica, sans-serif;
    background: url('../assets/images/imageAccueil.jpg');
    background-repeat: no-repeat;
    background-size: cover;
    overflow-x: hidden;
    height: 98.75vh;

    /* Pied de page */
    min-height: 100vh;
    flex-direction: column;
    justify-content: space-between;
}

/* Lignes */
.lignes {
    position: absolute;
    top: 5%;
    left: 5%;
}
.l1 {
    width: 300px;
    border-radius: 5px;
    border: 2px solid;
    color: white;
}
.l2 {
    position: relative;
    width: 200px;
    border-radius: 5px;
    border: 2px solid;
    top: 15px;
    color: white;
}

/* Titre */
.container-first {
    position: relative;
    background: var(--background);
    top: 25%;
    bottom: 63%;
}
h1 {
    text-shadow: 0.5px 0.5px 0 currentColor;
    font-family: "Rosarivo", sans-serif;
    text-transform: uppercase;
    color: #F1F1F1;
	font-size: 12.8ch;
    margin-left: 5%;
    margin-right: 5%;
    padding-top: 10px;
}
h1 span {
    position: relative;
}

/* Boutons */
.container-btns {
    position: relative;
    margin-left: 5%;
    margin-right: 10%;
    top: 100px;
}
.btn-first {
	float : left;
    border: 2px solid #F1F1F1;
    border-radius: 6px;
    outline: none;
    background-color: var(--background-btn);
    font-size: 30px;
    padding: 7px 25px 7px 25px;
	margin-left: 5px;
	margin-bottom: 5px;
    color: #F1F1F1;
    cursor: pointer;
    font-weight: bold;
    text-decoration: none;
}
.btn-first:nth-child(1) {
    margin-right: 0px;
}
.btn-first:hover {
    transition: all 0.3s ease-in-out;
    background: #F1F1F1;
    color: #333;
}

.drapeau {
    position: absolute;
    right: 2.9%;
    top: 4%;
    width: 80px;
    cursor: pointer;
}

/* Medias bulles */
.medias {
    list-style-type: none;
    position: absolute;
    right: 3.3%;
    top: 55%;
    transform: translateY(-50%);
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    background-color: transparent;

}
.bulle {
    display: flex;
    width: 35px;
    height: 35px;
    border-radius: 50%;
    border: 1px solid #F1F1F1;
    justify-content: center;
    align-items: center;
    margin: 10px 0;
    background: #F1F1F1;
    cursor: pointer;
    position: relative;
}
.bulle_a {
	color: #333;
	font-size: 25px;
	margin-top: 4px;
}

/* Photo de profil */
.divMaPhoto {
    display: flex;
    position: absolute;
    justify-content: center;
    align-items: center;
    bottom: 10%;
    left: 50%;
    transform: translateX(-50%);
}
.maPhoto {
    width: 200px;
    height: 200px;
    object-fit: cover;
    border-radius: 50%;
    border: 2px solid #F1F1F1;
}

/* Pour navigation interactive pour nav au clavier */
.btn-first:focus {
    outline: 3px solid #FFD700;
    background-color: #333;
}

/* Autorisation des cookies */
.banniere {
    background: rgba(35, 35, 35, 0.970);
    position: fixed;
    bottom: 0;
    left: 0;
    width: 100%;
    color: white;
    display: flex;
    justify-content: center;
    padding: 5px;
    font-family: "Signika Negative", sans-serif;
    transform: translateY(100%);
    animation: slide-in 2s 5s ease-out forwards;
}
@keyframes slide-in {
    100% {
        transform: translateY(0%);
    }
}
.text-banniere p {
    font-size: large;
}

.button-banniere-vert {
    margin-top: 20px;
}

.button-banniere-rouge {
    margin-top: 20px;
}

.button-banniere-vert a {
    padding: 10px;
    margin-right: 5px;
    border-radius: 7px;
    color: white;
    text-decoration: none;
    border: solid 1px green;
    background: green;
}

.button-banniere-rouge a {
    padding: 10px;
    margin-right: 25px;
    border-radius: 7px;
    color: white;
    text-decoration: none;
    border: solid 1px rgb(216, 30, 30);
    background: rgb(216, 30, 30);
}

/* Bouton pour accessibilité */
.switch-mode {
    position: absolute;
    right: 14%;
    top: 4.8%;
    width: 80px;
    cursor: pointer;
}
input[type="checkbox"] {
    width: 68px;
    height: 36px;
    background-color: white;
    -webkit-appearance: none;
    border-radius: 50px;
    border: 2px solid #222;
    outline: none;
    cursor: pointer;
}
input:checked[type="checkbox"] {
    background-color: #222;
}
input[type="checkbox"]:before {
    content: " ";
    position: absolute;
    width: 23.5px;
    height: 23.5px;
    background-color: grey;
    border-radius: 15px;
    top: 6.1px;
    left: 8px;
    transition-duration: 0.5s;
    z-index: 100;
}
input:checked[type="checkbox"]:before {
    background-color: grey;
    left: 37.5px;
    z-index: 100;
}
.soleil_fonce {
    width: 17px;
    position: absolute;
    right: 27.5%;
    top: 22%;
    cursor: pointer;
    z-index: 1;
}
.soleil_clair {
    width: 17px;
    position: absolute;
    right: 65%;
    top: 22%;
    cursor: pointer;
    z-index: 1;
}
.img:checked:before.soleil_clair {
    display: none;
}

/* Pied de page */
footer {
    position: fixed;
    bottom: 0;
}

/* Accessiblité mobile/tablette/PC */
@media screen and (max-width: 1747px) {
    h1 {
        font-size: 10ch;
    }
    .container-first {
        top: 20%;
        bottom: 63%;
    }
    .container-btns {
        top: 200px;
    }
    .button-banniere-vert {
        padding-right: 1%;
    }
}

@media screen and (max-width: 1026px) {
    h1 {
        font-size: 9ch;
    }
    .container-btns {
        margin-right: 15%;
    }
    .button-banniere {
        margin-left: 10%;
    }
    .button-banniere a {
        margin-left: -50%;
    }
    .divMaPhoto {
        bottom: 5%;
    }
    .maPhoto {
        width: 150px;
        height: 150px;
    }
}

@media screen and (max-width: 720px) {
    h1 {
        font-size: 6ch;
        font-weight: 500;
    }
    .invisible-banniere-text {
        display: none;
    }
    .switch-mode {
        right: 25%;
    }
    .l1 {
        width: 200px;
    }
    .l2 {
        width: 90px;
    }
}

@media screen and (max-width: 480px) {
    h1 {
        font-size: 4ch;
    }
    .l1 {
        width: 100px;
    }
    .l2 {
        width: 40px;
    }
    .container-btns {
        top: 25px;
        margin-right: 20%;
    }
    .medias {
        top: 60%;
    }
    .invisible-banniere-button {
        display: none;
    }
    .button-banniere-vert a {
        margin-right: 5px;
    }
    .btn-first {
        font-size: 15px;
        width: 150px;
    }
    .divMaPhoto {
        bottom: 5%;
    }
}

/* Les modes de constrastes */
:root {
    --background: rgba(60, 60, 60, 0.3);
    --background-btn: rgba(60, 60, 60, 0.45);
}
</style>