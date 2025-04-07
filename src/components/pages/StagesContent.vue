<template>
    <div>

        <div class="pb-5">
            <span><b>Stagiaire en R&D, secteur du Diagnostic System, Groupe-Renault, Guyancourt (78) </b>Mars –
                Septembre 2020 (6 mois)</span>
            <ul>
                <li>• Mise en place d'une <b>application web</b> pour automatiser la <b>gestion</b> des retours d’usines
                    par code erreur. L’objectif est d’<b>automatiser</b> et de <b>rendre paramétrables</b> par les
                    utilisateurs ces retours, remplaçant l’administration par fichiers Excel.</li>
                <li>• Intégrer de l’accessibilité pour <b>personne à déficience visuelle</b> et d’une interface
                    <b>multilingue</b>. Projet réalisé en grande autonomie durant la crise du covid-19, utilisant les
                    technologies PHP, HTML/CSS et <b>PostgreSQL</b>.
                </li>
            </ul>
            <div class="row col-12 align-items-center justify-content-center">
                <button class="btn btn-primary fw-bold col-6 col-sm-4 mb-2" @click="Memoire_de_stage_Jean_Baptiste_SEVESTRE_Master">Télécharger le rapport</button>
                <span class="col-0 col-sm-1"></span>
                <button class="btn btn-success fw-bold col-6 col-sm-4 mb-2" @click="Oral_Jean_Baptiste_SEVESTRE_Master">Télécharger la présentation</button>
            </div>
        </div>

        <div class="pb-5">
            <span><b>Stagiaire en domotique dans un EHPAD, Fondation Partage & Vie, Corbehem (62)</b> Février – Juin
                2018 (5 mois)</span>
            <ul>
                <li>• Ma mission était la réalisation d'une étude de faisabilité, de conception et de réalisation d'un
                    appartement dans le but de le domotiser.</li>
                <li>• Capacité de recherche de matériel à mettre en place, travail en équipe, en lien étroit avec de
                    nombreuses entreprises, réalisation d'appel à projet, préparation et animation des réunions, force
                    de proposition.</li>
            </ul>
            <div class="row col-12 align-items-center justify-content-center">
                <a class="btn btn-primary fw-bold col-6 col-sm-4 mb-2" @click="Rapport_de_stage_Jean_Baptiste_SEVESTRE_Licence">Télécharger le rapport</a>
                <span class="col-0 col-sm-1"></span>
                <a class="btn btn-success fw-bold col-6 col-sm-4 mb-2" @click="Oral_Jean_Baptiste_SEVESTRE_Licence">Télécharger la présentation</a>
            </div>
        </div>

        <div class="pb-5">
            <span><b>Stagiaire en R&D, secteur du Diagnostic System, Groupe Renault, Guyancourt (78)</b> Avril - Juillet
                2017 (3 mois)</span>
            <ul>
                <li>• Ma mission était la réalisation d'une étude visant la réduction du temps de transfert des données
                    lors de la production des véhicules.</li>
                <li>• Présentation de mes travaux devant mon groupe projet de 18 personnes avec la présence des
                    responsables du Groupe Renault qui décident des investissements.</li>
            </ul>
            <div class="row col-12 align-items-center justify-content-center">
                <a class="btn btn-primary fw-bold col-6 col-sm-4 mb-2" @click="Rapport_De_Stage_Jean_Baptiste_SEVESTRE_IUT">
                    Télécharger le rapport
                </a>
                <span class="col-0 col-sm-1"></span>
                <a class="btn btn-success fw-bold col-6 col-sm-4 mb-2" @click="Oral_Jean_Baptiste_SEVESTRE_IUT">
                    Télécharger la présentation
                </a>
            </div>

        </div>

        <div class="pb-3">
            <span><b>Stagiaire en robotique, Université Glyndwr, Pays de Galles</b> Juillet 2015 (4 semaines)</span>
            <ul>
                <li>• Perfectionnement de l'anglais et présentation en anglais des performances du robot Nao devant des
                    journalistes d'une chaine nationale et des professeurs de l'université.</li>
            </ul>
        </div>

    </div>
</template>

<script>
export default {
    name: 'StageContent',

    methods: {
        Memoire_de_stage_Jean_Baptiste_SEVESTRE_Master() {
            const lien = document.createElement('a');
            lien.href = 'http://jsevestre02.free.fr/fichiers/Memoire_de_stage_Jean_Baptiste_SEVESTRE_Master.pdf';
            lien.setAttribute('download', 'Memoire_de_stage_Jean_Baptiste_SEVESTRE_Master.pdf');
            document.body.appendChild(lien);
            lien.click();
            document.body.removeChild(lien);
        },
        Oral_Jean_Baptiste_SEVESTRE_Master() {
            const lien = document.createElement('a');
            lien.href = 'http://jsevestre02.free.fr/fichiers/Oral_Jean_Baptiste_SEVESTRE_Master.pptx';
            lien.setAttribute('download', 'Oral_Jean_Baptiste_SEVESTRE_Master.pptx');
            document.body.appendChild(lien);
            lien.click();
            document.body.removeChild(lien);
        },

        Rapport_de_stage_Jean_Baptiste_SEVESTRE_Licence() {
            const lien = document.createElement('a');
            lien.href = 'http://jsevestre02.free.fr/fichiers/Rapport_de_stage_Jean_Baptiste_SEVESTRE_IUT.pdf';
            lien.setAttribute('download', 'Rapport_de_stage_Jean_Baptiste_SEVESTRE_IUT.pdf');
            document.body.appendChild(lien);
            lien.click();
            document.body.removeChild(lien);
        },
        Oral_Jean_Baptiste_SEVESTRE_Licence() {
            const lien = document.createElement('a');
            lien.href = 'http://jsevestre02.free.fr/fichiers/Oral_Jean_Baptiste_SEVESTRE_Licence.pptx';
            lien.setAttribute('download', 'Oral_Jean_Baptiste_SEVESTRE_Licence.pptx');
            document.body.appendChild(lien);
            lien.click();
            document.body.removeChild(lien);
        },

        Rapport_De_Stage_Jean_Baptiste_SEVESTRE_IUT() {
            const lien = document.createElement('a');
            lien.href = 'http://jsevestre02.free.fr/fichiers/Rapport_de_stage_Jean_Baptiste_SEVESTRE_IUT.pdf';
            lien.setAttribute('download', 'Rapport_De_Stage_Jean_Baptiste_SEVESTRE_IUT.pdf');
            document.body.appendChild(lien);
            lien.click();
            document.body.removeChild(lien);
        },
        Oral_Jean_Baptiste_SEVESTRE_IUT() {
            const lien = document.createElement('a');
            lien.href = 'http://jsevestre02.free.fr/fichiers/Oral_Jean_Baptiste_SEVESTRE_IUT.pptx';
            lien.setAttribute('download', 'Oral_Jean_Baptiste_SEVESTRE_IUT.pptx');
            document.body.appendChild(lien);
            lien.click();
            document.body.removeChild(lien);
        }
    }
};
</script>

<style scoped></style>
