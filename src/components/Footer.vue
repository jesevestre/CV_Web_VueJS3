<template>
    <footer class="footer text-center">
		<span>
			<router-link class="footer_span" to="/pages/PlanDuSite" role="button" aria-label="Navigation vers le plan du site">{{ langState.labels.planDuSite }}</router-link>
		</span>
		&nbsp;|&nbsp;
		<span>
			<router-link class="footer_span" to="/pages/Contact" role="button" aria-label="Navigation vers contact">{{ langState.labels.contact }}</router-link>
		</span>
		&nbsp;|&nbsp;
		<span>
			<router-link class="footer_span" to="/pages/MentionLegales" role="button" aria-label="Navigation vers les mentions légales">{{ langState.labels.mentionsLegales }}</router-link>
		</span>
	</footer>
</template>

<script>
import { languageState, changeLangage } from '@/assets/langages/langService';

export default {
    name: 'Footer',

    data() {
        return {
            langState: languageState,
        };
    },

    methods: {
        changeLangage,
    },
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