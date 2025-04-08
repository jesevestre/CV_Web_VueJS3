<template>
    <div>

        <div class="row pb-5">
            <p><b>Mon Curriculum vitæ</b><br />
                <span class="small"> Mis à jour le 1er Avril 2025</span>
            </p>

            <div class="text-center col-12">
                <iframe
                    src="/fichiers/CV_Jean_Baptiste_SEVESTRE.pdf"
                    width="90%"
                    height="800"
                    style="border: none;"
                ></iframe>

                <div class="text-center pt-1">
                    <div class="row col-12 align-items-center justify-content-center">
                        <a class="btn btn-secondary fw-bold col-8 col-sm-6 col-md-4" role="button" aria-label="Téléchargement du CV" @click="CV_Jean_Baptiste_SEVESTRE">Télécharger le CV</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</template>

<script>
export default {
    name: 'FormationsContent',

    methods: {
        CV_Jean_Baptiste_SEVESTRE() {
            const lien = document.createElement('a');
            lien.href = 'http://jsevestre02.free.fr/fichiers/CV_Jean_Baptiste_SEVESTRE.pdf';
            lien.setAttribute('download', 'CV_Jean_Baptiste_SEVESTRE.pdf');
            document.body.appendChild(lien);
            lien.click();
            document.body.removeChild(lien);
        },
    }
};
</script>

<style scoped></style>
