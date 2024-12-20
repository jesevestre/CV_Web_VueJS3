<!-- <template>
    <div class="admin">
        Page principale Admin dashboard
    </div>
</template>

<script>
export default {
    name: "Dashboard",
}
</script> -->

<script>
import axios from 'axios';

export default {
  data() {
    return {
      posts: [], // Stockera les données récupérées
      loading: false, // Indicateur de chargement
      error: null, // Stockera les erreurs s'il y en a
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

<template>
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
</template>

<style>
.error {
  color: red;
}
</style>