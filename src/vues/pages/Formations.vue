<template>
    <div class="Formations container mb-5">

        <h1 class="mt-5 mb-5">Formations
            <font-awesome-icon :icon="['fas', 'graduation-cap']" />
        </h1>

        <div class="row pb-5">
            <div class="col-4 d-flex align-items-center justify-content-center">
                <button class="btn btn-success fw-bold">2025</button>
            </div>
            <div class="col-8">
                <b>Formation bases de données</b> (Oracle, SQL server, MySQL, PostgreSQL)<br />
                <u>Niveau</u> - Perfectionnement
                <br />
                <font-awesome-icon :icon="['fas', 'arrow-right']" /> PLB Formation, Levallois-Perret (92)
            </div>
        </div>

        <div class="row pb-5">
            <div class="col-4 d-flex align-items-center justify-content-center"><button class="btn btn-primary fw-bold">2022</button></div>
            <div class="col-8">
                <b>Formation bases de données</b> (Oracle, SQL server, MySQL, PostgreSQL)<br />
                <u>Niveau</u> - Les fondamenteaux
                <br />
                <font-awesome-icon :icon="['fas', 'arrow-right']" /> PLB Formation, Levallois-Perret (92)
            </div>
        </div>

        <div class="row pb-5">
            <div class="col-4 d-flex align-items-center justify-content-center"><button class="btn btn-info text-white fw-bold">2018 - 2020</button></div>
            <div class="col-8">
                <b>Master MIASHS</b> (Mathématiques et Informatique Appliquées aux Sciences Humaines et Sociales) option web
                <br />
                <font-awesome-icon :icon="['fas', 'arrow-right']" /> Université Paris 8, Saint-Denis (93)
            </div>
        </div>

        <div class="row pb-5">
            <div class="col-4 d-flex align-items-center justify-content-center"><button class="btn btn-secondary text-white fw-bold">2017 - 2018</button></div>
            <div class="col-8">
                <b>Licence TNAP</b> (Technologies Nouvelles & Autonomie de la Personne)
                <br />
                <font-awesome-icon :icon="['fas', 'arrow-right']" /> Lycée Colbert et Université Ilis, Lille (59)
            </div>
        </div>

        <div class="row pb-5">
            <div class="col-4 d-flex align-items-center justify-content-center"><button class="btn btn-light border-dark fw-bold">2015 - 2017</button></div>
            <div class="col-8">
                <b>DUT GEII</b> (Génie Electrique et Informatique Industrielle) option électronique
                <br />
                <font-awesome-icon :icon="['fas', 'arrow-right']" /> Institut Universitaire Technologique, Angers (49)
            </div>
        </div>

        <div class="row pb-5">
            <div class="col-4 d-flex align-items-center justify-content-center"><button class="btn btn-dark fw-bold">2017 - 2018</button></div>
            <div class="col-8">
                <b>Baccalauréat technologique</b> (STI2D) avec mention
                <br />
                <font-awesome-icon :icon="['fas', 'arrow-right']" /> Lycée Saint Jean-Baptiste de la Salle, Nantes (44)
            </div>
        </div>

    </div>
</template>

<script>
import '@/assets/css/PagesStyle.css';

export default {
    name: 'Formations',
};
</script>


<style scoped>

</style>