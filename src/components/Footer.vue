<template>
    <footer class="footer text-center">
		<span>
			<router-link class="footer_span" to="/pages/PlanDuSite">Plan du site</router-link>
		</span>
		&nbsp;|&nbsp;
		<span>
			<a class="footer_span" href="tel:+33604460391">06&nbsp;04&nbsp;46&nbsp;03&nbsp;91</a>
		</span>
		&nbsp;|&nbsp;
		<span>
			<router-link class="footer_span" to="/pages/MentionLegales">Mentions Légales</router-link>
		</span>
	</footer>
</template>

<script>
export default {
    name: 'Footer',
}
</script>

<style>
.footer {
	width: 100%;
	vertical-align: middle;
	text-align: center;
	background-color: #444;
	color: white;
	text-decoration: none;
}
.footer_span {
	color: white !important;
	text-decoration: none !important;
}
</style>