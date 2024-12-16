<template>
  {{ visites }} visites en décembre 
</template>

<script>
  import axios from 'axios';

  export default {
    data() {
      return {
        visites: "",
      };
    },
    mounted() {
    axios.get('http://localhost:8000/api.php')
      .then((response) => {
        console.log("test :" + response.data.visites)
        if (response.data && response.data.visites !== undefined) {
          this.visites = response.data.visites;
        } else {
          console.error('Réponse inattendue de l\'API:', response.data);
        }
      })
      .catch((error) => {
        console.error('Erreur lors de la récupération des données depuis PHP:', error);
      });
  },
};
  </script>