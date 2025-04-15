<template>
    <footer class="footer text-center">
		<span>
			<router-link class="footer_span" to="/pages/PlanDuSite" role="button" aria-label="Navigation vers le plan du site">{{ localLabels.planDuSite }}</router-link>
		</span>
		&nbsp;|&nbsp;
		<span>
			<router-link class="footer_span" to="/pages/Contact" role="button" aria-label="Navigation vers contact">{{ localLabels.contact }}</router-link>
		</span>
		&nbsp;|&nbsp;
		<span>
			<router-link class="footer_span" to="/pages/MentionLegales" role="button" aria-label="Navigation vers les mentions légales">{{ localLabels.mentionsLegales }}</router-link>
		</span>
	</footer>
</template>

<script>
export default {
    name: 'Footer',

	props: {
        labels: {
            type: Object,
            default: () => ({
                planDuSite: 'Plan du site',
                contact: 'Contact',
                mentionsLegales: 'Mentions légales'
            })
        }
    },

    data() {
        return {
            localLabels: { ...this.labels }
        };
    },

    mounted() {
        const lang = document.documentElement.lang || 'fr'; 

        if (lang === 'fr') {
            this.localLabels = {
                planDuSite: 'Plan du site',
                contact: 'Contact',
                mentionsLegales: 'Mentions légales',
            };
        } else {
            this.localLabels = {
                planDuSite: 'Site map',
                contact: 'Contact',
                mentionsLegales: 'Legal notices',
            };
        }
    },

    watch: {
        labels: {
            handler(newLabels) {
                this.localLabels = { ...newLabels };
            },
            deep: true
        }
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