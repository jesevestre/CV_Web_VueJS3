<template>
	<div class="admin">
		<div>
			<div v-if="loading">Chargement en cours ...</div>
			<div v-if="error" class="error">{{ error }}</div>
			<ul v-if="posts.length > 0">
				<li v-for="post in posts" :key="post.produit_id">
					{{ post.produit_id }}
				</li>
			</ul>
			<div v-else-if="!loading && !error">Aucun article trouvé.</div>
		</div>
	</div>
</template>

<script>
import axios from 'axios';

export default {
	name: "Dashboard",
	data() {
		return {
			posts: [],
			loading: false,
			error: null,
		};
	},
	mounted() {
		this.fetchPosts();
	},
	methods: {
		async fetchPosts() {
			this.loading = true;
			this.error = null;

			try {
				const response = await axios.get('http://cempolytechnique.free.fr/backend/index.php/posts');
				this.posts = response.data;
			} catch (error) {
				this.error = 'Impossible de récupérer les données.';
			} finally {
				this.loading = false;
			}
		},
	},
};
</script>

<style>
.error {
	color: red;
}
</style>