<template>
    <div>
        <div class="row mt-3">

            <div class="col-4 col-lg-2 d-flex align-items-center justify-content-end">
                <button class="btn btn-success fw-bold">PHP</button>
            </div>
            <div class="col-1 d-flex align-items-center justify-content-center">
                <font-awesome-icon :icon="['fas', 'arrow-right']" />
            </div>
            <div class="col-6 col-lg-2 d-flex align-items-center">
                <ul>
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

            <div class="col-4 col-lg-2 d-flex align-items-center justify-content-end">
                <button class="btn btn-primary fw-bold">SQL</button>
            </div>
            <div class="col-1 d-flex align-items-center justify-content-center">
                <font-awesome-icon :icon="['fas', 'arrow-right']" />
            </div>
            <div class="col-6 col-lg-2 d-flex align-items-center">
                <ul>
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

        <div class="row mt-3">

            <div class="col-4 col-lg-2 d-flex align-items-center justify-content-end">
                <button class="btn btn-info text-white fw-bold">JavaScript</button>
            </div>
            <div class="col-1 d-flex align-items-center justify-content-center">
                <font-awesome-icon :icon="['fas', 'arrow-right']" />
            </div>
            <div class="col-6 col-lg-2 d-flex align-items-center">
                <ul>
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

            <div class="col-4 col-lg-2 d-flex align-items-center justify-content-end">
                <button class="btn btn-secondary fw-bold">Framework</button>
            </div>
            <div class="col-1 d-flex align-items-center justify-content-center">
                <font-awesome-icon :icon="['fas', 'arrow-right']" />
            </div>
            <div class="col-6 col-lg-2 d-flex align-items-center">
                <ul>
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

<style scoped></style>
