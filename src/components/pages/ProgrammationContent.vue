<template>
    <div>

        <div class="row d-flex align-items-center col-12 col-md-8 pb-4">
            <div class="col-5 d-flex justify-content-center align-items-center">
                <p class="btn button-color1 fw-bold mb-0" aria-hidden="true">PHP</p>
            </div>
            <div class="col-2 d-flex justify-content-center align-items-center">
                <font-awesome-icon :icon="['fas', 'arrow-right']" />
            </div>
            <div class="col-5 d-flex align-items-center">
                <ul class="mb-0">
                    <li>
                        5.0
                    </li>
                    <li>
                        7.0
                    </li>
                    <li>
                        7.4
                    </li>
                    <li>
                        8.2
                    </li>
                </ul>
            </div>
        </div>

        <div class="row d-flex align-items-center col-12 col-md-8 pb-4">
            <div class="col-5 d-flex justify-content-center align-items-center">
                <p class="btn button-color2 fw-bold mb-0" aria-hidden="true">SQL</p>
            </div>
            <div class="col-2 d-flex justify-content-center align-items-center">
                <font-awesome-icon :icon="['fas', 'arrow-right']" />
            </div>
            <div class="col-5 d-flex align-items-center">
                <ul class="mb-0">
                    <li>
                        MySQL
                    </li>
                    <li>
                        MariaDB
                    </li>
                    <li>
                        SQLServer
                    </li>
                    <li>
                        PostgreSQL
                    </li>
                </ul>
            </div>
        </div>

        <div class="row d-flex align-items-center col-12 col-md-8 pb-4">
            <div class="col-5 d-flex justify-content-center align-items-center">
                <p class="btn button-color4 text-white fw-bold mb-0" aria-hidden="true">JavaScript</p>
            </div>
            <div class="col-2 d-flex justify-content-center align-items-center">
                <font-awesome-icon :icon="['fas', 'arrow-right']" />
            </div>
            <div class="col-5 d-flex align-items-center">
                <ul class="mb-0">
                    <li>
                        Vanilla
                    </li>
                    <li>
                        jQuery
                    </li>
                    <li>
                        AJAX
                    </li>
                </ul>
            </div>
        </div>

        <div class="row d-flex align-items-center col-12 col-md-8 pb-4">
            <div class="col-5 d-flex justify-content-center align-items-center">
                <p class="btn button-color3 fw-bold mb-0" aria-hidden="true">Framework</p>
            </div>
            <div class="col-2 d-flex justify-content-center align-items-center">
                <font-awesome-icon :icon="['fas', 'arrow-right']" />
            </div>
            <div class="col-5 d-flex align-items-center">
                <ul class="mb-0">
                    <li>
                        VueJS3
                    </li>
                    <li>
                        VueJS2
                    </li>
                    <li>
                        Bootstrap
                    </li>
                    <li>
                        CMS&nbsp;:&nbsp;WordPress
                    </li>
                    <li>
                        Symfony4
                    </li>
                </ul>
            </div>
        </div>

        <canvas ref="graphCanvas" style="display: block; margin-left: auto; width: 75%; margin-right: auto;">
            Ce graphique n'est pas soutenu par votre navigateur.
        </canvas>

    </div>
</template>

<script>
import { ref, onMounted } from "vue";
import { Chart, RadarController, RadialLinearScale, PointElement, LineElement, Title, Tooltip, Legend } from "chart.js";

Chart.register(RadarController, RadialLinearScale, PointElement, LineElement, Title, Tooltip, Legend);

export default {
    name: "ProgrammationContent",
    setup() {
        const graphCanvas = ref(null);

        onMounted(() => {
            if (graphCanvas.value) {
                new Chart(graphCanvas.value, {
                    type: "radar",
                    data: {
                        labels: ["Echelle", "PHP", "HTML/CSS", "SQL", "JavaScript", "VueJS2", "Symfony4/5"],
                        datasets: [
                            {
                                label: "Maîtrise des langages",
                                data: [0, 7, 9, 8, 6, 6, 2],
                                backgroundColor: "rgba(203, 200, 192, 0.7)",
                                borderColor: "#32CD32",
                                borderWidth: 2.5,
                                hoverBorderWidth: 2,
                            },
                        ],
                    },
                    options: {
                        layout: {
                            padding: { top: 50 },
                        },
                        plugins: {
                            legend: {
                                labels: {
                                    color: "#111",
                                    font: { size: 20 },
                                },
                            },
                        },
                    },
                });
            }
        });

        return { graphCanvas };
    },
};
</script>

<style scoped>

</style>
