<template>
    <div>
        
        <div class="row col-12 col-md-8 pt-3 pb-3">
            <div class="col-5 d-flex align-items-center justify-content-center">
                <p class="btn button-color1 fw-bold" aria-hidden="true">Environnement</p>
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
                <p class="btn button-color2 fw-bold" aria-hidden="true">Outils d'accessibilité</p>
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
                <p class="btn button-color3 text-white fw-bold" aria-hidden="true">Méthodes Agiles</p>
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
                <p class="btn button-color4 fw-bold" aria-hidden="true">Versionning</p>
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
                <p class="btn btn button-color1 fw-bold" aria-hidden="true">Hébergement et services</p>
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
                <p class="btn button-color2 fw-bold" aria-hidden="true">Visualisation des données</p>
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
