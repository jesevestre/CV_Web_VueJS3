<template>
	<div class="menu-div">
		<a href="#menu" class="bouton-menu sous-ligne">La&nbsp;carte</a>&nbsp;|
		<a href="#evenements" class="bouton-menu">Événements</a>&nbsp;|
		<a href="#horaires" class="bouton-menu">Horaires</a>&nbsp;|
		<a href="#localisation" class="bouton-menu">Localisation</a>&nbsp;|
		<a href="#emporter" class="bouton-menu">À&nbsp;emporter</a>
	</div>
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="6"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="7"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="8"></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img class="img-redimensionnement d-block w-100" src="@/assets/photos/2.jpg"
					alt="image de présentation du buffet">
			</div>
			<div class="carousel-item">
				<img class="img-redimensionnement d-block w-100" src="@/assets/photos/3.jpg"
					alt="image de présentation du buffet">
			</div>
			<div class="carousel-item">
				<img class="img-redimensionnement d-block w-100" src="@/assets/photos/4.jpg"
					alt="image de présentation du buffet">
			</div>
			<div class="carousel-item">
				<img class="img-redimensionnement d-block w-100" src="@/assets/photos/5.jpg"
					alt="Image de présentation du buffet">
			</div>
			<div class="carousel-item">
				<img class="img-redimensionnement d-block w-100" src="@/assets/photos/6.jpg"
					alt="Image de présentation du buffet">
			</div>
			<div class="carousel-item">
				<img class="img-redimensionnement d-block w-100" src="@/assets/photos/7.jpg"
					alt="Image de présentation du buffet">
			</div>
			<div class="carousel-item">
				<img class="img-redimensionnement d-block w-100" src="@/assets/photos/9.jpg"
					alt="Image de présentation du buffet">
			</div>
			<div class="carousel-item">
				<img class="img-redimensionnement d-block w-100" src="@/assets/photos/10.jpeg"
					alt="Image de présentation du buffet">
			</div>
			<div class="carousel-item">
				<img class="img-redimensionnement d-block w-100" src="@/assets/photos/11.jpg"
					alt="Image de présentation du buffet">
			</div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>

	<div class="container d-flex flex-row pt-5 pb-5 mt-5 mb-5 mr-sm-3" id="menu">
		<div class="row">
			<div class="col-sm-6 order-2 order-sm-1">
				<img class="d-block w-100" src="@/assets/photos/2.jpg" alt="Image de présentation du buffet">
			</div>
			<div class="little-card card col-11 col-sm-6 order-1 order-sm-2" style="width: 18rem;">
				<div class="card-body">
					<h5 class="card-title">La carte</h5>
					<h6 class="card-subtitle mb-2 text-muted">Repas du midi 14,90€</h6>
					<h6 class="card-subtitle mb-2 text-muted">Soirs, weekend et jours feriés 21,90€</h6>
					<h6 class="card-subtitle mb-2 text-muted">Label certifié <i>Frais Equilibre Santé</i></h6>
					<ul>
						<li>
							Cuisine asiatique et européenne
						</li>
						<li>
							Wok
						</li>
						<li>
							Sushi
						</li>
						<li>
							Grillade
						</li>
						<li>
							Plancha
						</li>
					</ul>
					<img class="icone" src="@/assets/images/phoneModif.png" alt="Logo téléphone">&nbsp;<a href="tel:+33625926100" class="card-link">06 25 92 61 00</a>
				</div>
			</div>

		</div>
	</div>

	<div class="container d-flex flex-row pt-5 pb-5 mt-5 mb-5 ml-sm-3" id="evenements">
		<div class="row">
			<div class="little-card card col-11 col-10 col-sm-6" style="width: 18rem;">
				<div class="card-body">
					<h5 class="card-title">Événements</h5>
					<h6 class="card-subtitle mb-2 text-muted">Réservation pour des événements</h6>
					<ul>
						<li>
							Restaurant avec ambiance conviviale et musicale avec piano de scène
						</li>
						<li>
							Grande salle de 260 places climatisée
						</li>
						<li>
							Salle privatisable de 20 places
						</li>
						<li>
							Seminaires, repas d'affaires
						</li>
						<li>
							Anniversaire, mariage
						</li>
						<li>
							Terrasse de 60 places
						</li>
					</ul>
					<div class="row h-0 justify-content-center align-items-center pt-2">
						<router-link to="/Reservation" class="slogan-button">Réservation samedis soir</router-link>
					</div>
					<div class="row h-0 justify-content-center align-items-center pt-2">
						<router-link to="/Reservation31decembre" class="slogan-button">Réservation 31 décembre</router-link>
					</div>
				</div>
			</div>
			<div class="col-sm-6">
				<img class="d-block w-100" src="@/assets/photos/7.jpg" alt="Image de présentation du buffet">
			</div>
		</div>
	</div>

	<div class="container d-flex flex-row pt-5 pb-5 mt-5 mb-5 mr-sm-3" id="horaires">
		<div class="row">
			<div class="col-sm-6 order-2 order-sm-1">
				<img class="d-block w-100" src="@/assets/photos/1.jpg" alt="Image de présentation du buffet">
			</div>
			<div class="little-card card col-11 col-sm-6 order-1 order-sm-2" style="width: 18rem;">
				<div class="card-body">
					<h5 class="card-title">Horaires</h5>
					<div class="row">
						<div class="col-6 pb-3">
							<h6 class="card-subtitle mb-2 text-muted">Lundi</h6>
							<p class="card-text">11h30 - 14h30</p>
						</div>
						<div class="col-6 pb-3">
							<h6 class="card-subtitle mb-2 text-muted">Mardi</h6>
							<p class="card-text">11h30 - 14h30</p>
						</div>
						<div class="col-6 pb-3">
							<h6 class="card-subtitle mb-2 text-muted">Mercredi</h6>
							<p class="card-text">11h30 - 14h30</p>
						</div>
						<div class="col-6 pb-3">
							<h6 class="card-subtitle mb-2 text-muted">Jeudi</h6>
							<p class="card-text">11h30 - 14h30</p>
						</div>
						<div class="col-6 pb-3">
							<h6 class="card-subtitle mb-2 text-muted">Vendredi</h6>
							<p class="card-text">11h30 - 14h30</p>
						</div>
						<div class="col-6 pb-3">
							<h6 class="card-subtitle mb-2 text-muted">Samedi</h6>
							<p class="card-text">19h - 22h</p>
						</div>
						<div class="col-6 pb-3">
							<h6 class="card-subtitle mb-2 text-muted">Dimanche</h6>
							<p class="card-text">Fermé</p>
						</div>
					</div>
					<img class="icone" src="@/assets/images/phoneModif.png" alt="Logo téléphone">&nbsp;<a
						href="tel:+33625926100" class="card-link">06 25 92 61 00</a>
				</div>
			</div>
		</div>
	</div>

	<div class="container localisation d-flex flex-row pt-5 pb-5 mt-5 mb-5 ml-sm-3" id="localisation">
		<div class="row">
			<div class="little-card card col-11 col-sm-7" style="width: 18rem;">
				<div class="card-body">
					<h5 class="card-title mb-4">Localisation</h5>
					<h6 class="card-subtitle mb-2 text-muted mb-4">91140 Villebon-sur-Yvette,<br /> 4 Avenue de la
						Baltique</h6>
					<ul>
						<li>
							Parking gratuit et sécurisé de 200 places
						</li>
						<li>
							Accessible en bus numéro 02, 23, 22, 17
						</li>
						<li>
							Accessible pour les personnes à mobilité réduite (PMR)
						</li>
					</ul>
					<a href="https://maps.app.goo.gl/yGJehcPyTSjADKdf9" class="card-link" target="_blank">Ouvrir avec
						Google Maps</a>
				</div>
			</div>
			<div class="col-sm-5">
				<iframe class="card-map-iframe"
					src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4355.731786422988!2d2.2042835776347385!3d48.68603327130949!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e5d7005f165f6b%3A0x719f7b1af10f72ad!2sPLAISIRS%20D&#39;AILLEURS!5e1!3m2!1sfr!2sfr!4v1731681092567!5m2!1sfr!2sfr"
					style="border:0;" allowfullscreen="" loading="lazy"
					referrerpolicy="no-referrer-when-downgrade"></iframe>
			</div>
		</div>
	</div>

	<div class="container d-flex flex-row pt-5 pb-5 mt-5 mb-5 mr-sm-3" id="emporter">
		<div class="row">
			<div class="col-sm-6 order-2 order-sm-1">
				<img class="d-block w-100" src="@/assets/photos/3.jpg" alt="Image de présentation du buffet">
			</div>
			<div class="little-card card col-11 col-sm-6 order-1 order-sm-2" style="width: 18rem;">
				<div class="card-body">
					<h5 class="card-title">Commande à emporter</h5>
					<h6 class="card-subtitle mb-2 text-muted">A partir de 10€</h6>
					<ul>
						<li>
							Entre 11h30 et 14h30
						</li>
						<li>
							Panier surpise en option
						</li>
					</ul>
					<img class="icone" src="@/assets/images/phoneModif.png" alt="Logo téléphone">&nbsp;<a
						href="tel:+33625926100" class="card-link">06 25 92 61 00</a>
				</div>
			</div>
		</div>
	</div>
</template>


<script>
import { onMounted } from 'vue';

export default {
	name: 'Home',
	setup() {
		onMounted(() => {
			const carouselElement = document.getElementById('carouselExampleIndicators');
			const carousel = new bootstrap.Carousel(carouselElement, {
				interval: 6000,
				ride: 'carousel'
			});
		});
	},
}
</script>


<style>
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

.carousel-inner .carousel-item {
	transition: transform 0.6s ease-in;
}

.carousel-control-prev,
.carousel-control-next {
	opacity: 1;
}

.img-redimensionnement {
	max-height: 75vh;
	width: 100%;
	object-fit: cover;
	object-position: center;
}

.card {
	border: none;
	background-color: #FFF;
}

.card-map-iframe {
	width: 200%;
	height: 300px;
}

.icone {
	width: 15px;
	margin-top: -2px !important;
}

.slogan-button {
	border: 1px solid;
	border-color: #7985B1;
	padding: 1.5% 2.8rem;
	background-color: #888;
	color: #FFF !important;

	text-decoration: none;
	font-size: 115%;
	font-weight: 600;
	cursor: pointer;
}

.slogan-button:hover {
	background-color: #777;
	text-decoration: none;
}

@media screen and (max-width: 865px) {
	.card-map-iframe {
		width: 150%;
	}

	.slogan-button {
		padding: 1.5% 0.5rem;
		font-size: 100%;
	}
}

@media screen and (max-width: 665px) {
	.card-map-iframe {
		width: 100%;
	}
}

@media screen and (max-width: 575px) {
	h1 {
		font-size: 2.5rem;
		padding-bottom: 10px;
	}

	.little-card {
		display: block;
		margin-left: auto;
		margin-right: auto;

		margin-top: 10px;
		margin-bottom: 10px;
	}

	.localisation {
		margin-bottom: 150px !important;
	}

	.card-map-iframe {
		width: 100%;
		height: 150%;
	}

	.slogan-button {
		padding: 1.5% 1.5rem;
	}
}
</style>