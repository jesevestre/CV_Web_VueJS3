<template>
    <div>
        
        <div class="row col-12 col-md-8 pt-3 pb-3">
            <div class="col-5 d-flex align-items-center justify-content-center">
                <button class="btn btn-success fw-bold">Environnement</button>
            </div>
            <div class="col-2 d-flex align-items-center justify-content-left">
                <font-awesome-icon :icon="['fas', 'arrow-right']" />
            </div>
            <div class="col-5">
                <ul>
                    <li>
                        Linux/Unix
                    </li>
                    <li>
                        Windows
                    </li>
                </ul>
            </div>
        </div>

        <div class="row col-12 col-md-8 pb-3">
            <div class="col-5 d-flex align-items-center justify-content-center">
                <button class="btn btn-primary fw-bold">Outils d'accessibilité</button>
            </div>
            <div class="col-2 d-flex align-items-center justify-content-left">
                <font-awesome-icon :icon="['fas', 'arrow-right']" />
            </div>
            <div class="col-5">
                <ul>
                    <li>
                        Bonnes pratiques
                    </li>
                    <li>
                        W3C
                    </li>
                    <li>
                        WAI
                    </li>
                    <li>
                        WCAG 2.0
                    </li>
                </ul>
            </div>
        </div>

        <div class="row col-12 col-md-8 pb-3">
            <div class="col-5 d-flex align-items-center justify-content-center">
                <button class="btn btn-info text-white fw-bold">Méthodes Agiles</button>
            </div>
            <div class="col-2 d-flex align-items-center justify-content-left">
                <font-awesome-icon :icon="['fas', 'arrow-right']" />
            </div>
            <div class="col-5">
                <ul>
                    <li>
                        WeKan
                    </li>
                    <li>
                        Trello
                    </li>
                    <li>
                        Gantt
                    </li>
                </ul>
            </div>
        </div>

        <div class="row col-12 col-md-8 pb-5">
            <div class="col-5 d-flex align-items-center justify-content-center">
                <button class="btn btn-secondary fw-bold">Versionning</button>
            </div>
            <div class="col-2 d-flex align-items-center justify-content-left">
                <font-awesome-icon :icon="['fas', 'arrow-right']" />
            </div>
            <div class="col-5">
                <ul>
                    <li>
                        Git/GitHub
                    </li>
                    <li>
                        SVN
                    </li>
                </ul>
            </div>
        </div>

        <div class="row col-12 col-md-8 pb-5">
            <div class="col-5 d-flex align-items-center justify-content-center">
                <button class="btn btn btn-light border-dark fw-bold">Hébergement et services</button>
            </div>
            <div class="col-2 d-flex align-items-center justify-content-left">
                <font-awesome-icon :icon="['fas', 'arrow-right']" />
            </div>
            <div class="col-5">
                <ul>
                    <li>
                        OVH
                    </li>
                    <li>
                        Règles RGPD
                    </li>
                </ul>
            </div>
        </div>

        <div class="row col-12 col-md-8 pb-5">
            <div class="col-5 d-flex align-items-center justify-content-center">
                <button class="btn btn-dark fw-bold">Visualisation des données</button>
            </div>
            <div class="col-2 d-flex align-items-center justify-content-left">
                <font-awesome-icon :icon="['fas', 'arrow-right']" />
            </div>
            <div class="col-5">
                <ul>
                    <li>
                        Power BI
                    </li>
                </ul>
            </div>
        </div>

    </div>
</template>

<script>
export default {
    name: 'EnvironnementsContent'
};
</script>

<style scoped>

</style>
