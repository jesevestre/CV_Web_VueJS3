<template>
    <div class="statistiquesVisiteurs container">
        <h1 class="mt-5 mb-5">{{ langState.labels.statistiquesVisiteurs }} <font-awesome-icon :icon="['fa', 'chart-line']" /></h1>
        <table class="table table-bordered text-center">
            <thead class="table-light">
                <tr>
                    <th>{{ langState.labels.mois }}</th>
                    <th>2026</th>
                    <th>2027</th>
                    <th>Stats</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="table-primary">{{ langState.labels.janvier }}</td>
                    <td :class="{ 'table-success': janv2026 > janv2027 }">{{ janv2026 }}</td>
                    <td :class="{ 'table-success': janv2026 < janv2027 }">{{ janv2027 }}</td>
                    <td :class="{ 
                        'text-success': (janv2027 - janv2026 > 0 && janv2026 != 0 && janv2027 != 0),
                        'text-primary': (janv2027 - janv2026 < 0 && janv2026 != 0 && janv2027 != 0)
                        }">
                        {{ 
                            (janv2026 === 0 || janv2027 === 0) 
                            ? (janv2027 - janv2026) 
                            : '+' + ((janv2026 < janv2027) 
                                ? ((janv2027 * 100) / janv2026) + '%' 
                                : (((janv2027 - janv2026) / janv2027) * 100).toFixed(0) + '%')
                        }}
                    </td>
                </tr>
                <tr>
                    <td class="table-secondary">{{ langState.labels.fevrier }}</td>
                    <td :class="{ 'table-success': fevr2026 > fevr2027 }">{{ fevr2026 }}</td>
                    <td :class="{ 'table-success': fevr2026 < fevr2027 }">{{ fevr2027 }}</td>
                    <td :class="{ 
                        'text-success': (fevr2027 - fevr2026 > 0 && fevr2026 != 0 && fevr2027 != 0),
                        'text-primary': (fevr2027 - fevr2026 < 0 && fevr2026 != 0 && fevr2027 != 0)
                        }">
                        {{ 
                            (fevr2026 === 0 || fevr2027 === 0) 
                            ? (fevr2027 - fevr2026) 
                            : ((fevr2026 < fevr2027) 
                                ? ('+' + (fevr2027 * 100) / fevr2026) + '%' 
                                : (((fevr2027 - fevr2026) / fevr2027) * 100).toFixed(0) + '%')
                        }}
                    </td>
                </tr>
                <tr>
                    <td class="table-primary">{{ langState.labels.mars }}</td>
                    <td :class="{ 'table-success': mars2026 > mars2027 }">{{ mars2026 }}</td>
                    <td :class="{ 'table-success': mars2026 < mars2027 }">{{ mars2027 }}</td>
                    <td :class="{ 
                        'text-success': (mars2027 - mars2026 > 0 && mars2026 != 0 && mars2027 != 0),
                        'text-primary': (mars2027 - mars2026 < 0 && mars2026 != 0 && mars2027 != 0)
                        }">
                        {{ 
                            (mars2026 === 0 || mars2027 === 0)
                            ? (mars2027 - mars2026) 
                            : ((mars2026 < mars2027) 
                                ? ('+' + (mars2027 * 100) / mars2026) + '%' 
                                : (((mars2027 - mars2026) / mars2027) * 100).toFixed(0) + '%') 
                        }}
                    </td>
                </tr>
                <tr>
                    <td class="table-secondary">{{ langState.labels.avril }}</td>
                    <td :class="{ 'table-success': avri2026 > avri2027 }">{{ avri2026 }}</td>
                    <td :class="{ 'table-success': avri2026 < avri2027 }">{{ avri2027 }}</td>
                    <td :class="{ 
                        'text-success': (avri2027 - avri2026 > 0 && avri2026 != 0 && avri2027 != 0),
                        'text-primary': (avri2027 - avri2026 < 0 && avri2026 != 0 && avri2027 != 0)
                        }">
                        {{ 
                            (avri2026 === 0 || avri2027 === 0) 
                            ? (avri2027 - avri2026) 
                            : ((avri2026 < avri2027) 
                                ? ('+' + (avri2027 * 100) / avri2026) + '%' 
                                : (((avri2027 - avri2026) / avri2027) * 100).toFixed(0) + '%')
                        }}
                    </td>
                </tr>
                <tr>
                    <td class="table-primary">{{ langState.labels.mai }}</td>
                    <td :class="{ 'table-success': mai2026 > mai2027 }">{{ mai2026 }}</td>
                    <td :class="{ 'table-success': mai2026 < mai2027 }">{{ mai2027 }}</td>
                    <td :class="{ 
                        'text-success': (mai2027 - mai2026 > 0 && mai2026 != 0 && mai2027 != 0),
                        'text-primary': (mai2027 - mai2026 < 0 && mai2026 != 0 && mai2027 != 0)
                        }">
                        {{ 
                            (mai2026 === 0 || mai2027 === 0) 
                            ? (mai2027 - mai2026) 
                            : ((mai2026 < mai2027) 
                                ? ('+' + (mai2027 * 100) / mai2026) + '%' 
                                : (((mai2027 - mai2026) / mai2027) * 100).toFixed(0) + '%')
                        }}
                    </td>
                </tr>
                <tr>
                    <td class="table-secondary">{{ langState.labels.juin }}</td>
                    <td :class="{ 'table-success': juin2026 > juin2027 }">{{ juin2026 }}</td>
                    <td :class="{ 'table-success': juin2026 < juin2027 }">{{ juin2027 }}</td>
                    <td :class="{ 
                        'text-success': (juin2027 - juin2026 > 0 && juin2026 != 0 && juin2027 != 0),
                        'text-primary': (juin2027 - juin2026 < 0 && juin2026 != 0 && juin2027 != 0)
                        }">
                        {{ 
                            (juin2026 === 0 || juin2027 === 0) 
                            ? (juin2027 - juin2026) 
                            : ((juin2026 < juin2027) 
                                ? ('+' + (juin2027 * 100) / juin2026) + '%' 
                                : (((juin2027 - juin2026) / juin2027) * 100).toFixed(0) + '%')
                        }}
                    </td>
                </tr>
                <tr>
                    <td class="table-primary">{{ langState.labels.juillet }}</td>
                    <td :class="{ 'table-success': juil2026 > juil2027 }">{{ juil2026 }}</td>
                    <td :class="{ 'table-success': juil2026 < juil2027 }">{{ juil2027 }}</td>
                    <td :class="{ 
                        'text-success': (juil2027 - juil2026 > 0 && juil2026 != 0 && juil2027 != 0),
                        'text-primary': (juil2027 - juil2026 < 0 && juil2026 != 0 && juil2027 != 0)
                        }">
                        {{ 
                            (juil2026 === 0 || juil2027 === 0) 
                            ? (juil2027 - juil2026) 
                            : ((juil2026 < juil2027) 
                                ? ('+' + (juil2027 * 100) / juil2026) + '%' 
                                : (((juil2027 - juil2026) / juil2027) * 100).toFixed(0) + '%')
                        }}
                    </td>
                </tr>
                <tr>
                    <td class="table-secondary">{{ langState.labels.aout }}</td>
                    <td :class="{ 'table-success': aout2026 > aout2027 }">{{ aout2026 }}</td>
                    <td :class="{ 'table-success': aout2026 < aout2027 }">{{ aout2027 }}</td>
                    <td :class="{ 
                        'text-success': (aout2027 - aout2026 > 0 && aout2026 != 0 && aout2027 != 0),
                        'text-primary': (aout2027 - aout2026 < 0 && aout2026 != 0 && aout2027 != 0)
                        }">
                        {{ 
                            (aout2026 === 0 || aout2027 === 0) 
                            ? (aout2027 - aout2026) 
                            : ((aout2026 < aout2027) 
                                ? ('+' + (aout2027 * 100) / aout2026) + '%' 
                                : (((aout2027 - aout2026) / aout2027) * 100).toFixed(0) + '%')
                        }}
                    </td>
                </tr>
                <tr>
                    <td class="table-primary">{{ langState.labels.septembre }}</td>
                    <td :class="{ 'table-success': sept2026 > sept2027 }">{{ sept2026 }}</td>
                    <td :class="{ 'table-success': sept2026 < sept2027 }">{{ sept2027 }}</td>
                    <td :class="{ 
                        'text-success': (sept2027 - sept2026 > 0 && sept2026 != 0 && sept2027 != 0),
                        'text-primary': (sept2027 - sept2026 < 0 && sept2026 != 0 && sept2027 != 0)
                        }">
                        {{ 
                            (sept2026 === 0 || sept2027 === 0) 
                            ? (sept2027 - sept2026) 
                            : ((sept2026 < sept2027) 
                                ? ('+' + (sept2027 * 100) / sept2026) + '%' 
                                : (((sept2027 - sept2026) / sept2027) * 100).toFixed(0) + '%')
                        }}
                    </td>
                </tr>
                <tr>
                    <td class="table-secondary">{{ langState.labels.octobre }}</td>
                    <td :class="{ 'table-success': octo2026 > octo2027 }">{{ octo2026 }}</td>
                    <td :class="{ 'table-success': octo2026 < octo2027 }">{{ octo2027 }}</td>
                    <td :class="{ 
                        'text-success': (octo2027 - octo2026 > 0 && octo2026 != 0 && octo2027 != 0),
                        'text-primary': (octo2027 - octo2026 < 0 && octo2026 != 0 && octo2027 != 0)
                        }">
                        {{ 
                            (octo2026 === 0 || octo2027 === 0) 
                            ? (octo2027 - octo2026) 
                            : ((octo2026 < octo2027) 
                                ? ('+' + (octo2027 * 100) / octo2026) + '%' 
                                : (((octo2027 - octo2026) / octo2027) * 100).toFixed(0) + '%')
                        }}
                    </td>
                </tr>
                <tr>
                    <td class="table-primary">{{ langState.labels.novembre }}</td>
                    <td :class="{ 'table-success': nove2026 > nove2027 }">{{ nove2026 }}</td>
                    <td :class="{ 'table-success': nove2026 < nove2027 }">{{ nove2027 }}</td>
                    <td :class="{ 
                        'text-success': (nove2027 - nove2026 > 0 && nove2026 != 0 && nove2027 != 0),
                        'text-primary': (nove2027 - nove2026 < 0 && nove2026 != 0 && nove2027 != 0)
                        }">
                        {{ 
                            (nove2026 === 0 || nove2027 === 0) 
                            ? (nove2027 - nove2026) 
                            : ((nove2026 < nove2027) 
                                ? ('+' + (nove2027 * 100) / nove2026) + '%' 
                                : (((nove2027 - nove2026) / nove2027) * 100).toFixed(0) + '%')
                        }}
                    </td>
                </tr>
                <tr>
                    <td class="table-secondary">{{ langState.labels.decembre }}</td>
                    <td :class="{ 'table-success': dece2026 > dece2027 }">{{ dece2026 }}</td>
                    <td :class="{ 'table-success': dece2026 < dece2027 }">{{ dece2027 }}</td>
                    <td :class="{ 
                        'text-success': (dece2027 - dece2026 > 0 && dece2026 != 0 && dece2027 != 0),
                        'text-primary': (dece2027 - dece2026 < 0 && dece2026 != 0 && dece2027 != 0)
                        }">
                        {{ 
                            (dece2026 === 0 || dece2027 === 0) 
                            ? (dece2027 - dece2026) 
                            : ((dece2026 < dece2027) 
                                ? ('+' + (dece2027 * 100) / dece2026) + '%' 
                                : (((dece2027 - dece2026) / dece2027) * 100).toFixed(0) + '%')
                        }}
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</template>

<script>
import { languageState, changeLangage } from '@/assets/langages/langService';

import '@/assets/css/PagesStyle.css';

import axios from 'axios';

export default {
    name: 'statistiquesVisiteurs',
    data() {
		return {
            // Gestion de la langue
            langState: languageState,

            visiteurs: [],
		};
    },
    computed: {
        janv2026() {
            return this.visiteurs.find(item => item.annee_mois === '2026-01')?.total || 0;
        },
        fevr2026() {
            return this.visiteurs.find(item => item.annee_mois === '2026-02')?.total || 0;
        },
        mars2026() {
            return this.visiteurs.find(item => item.annee_mois === '2026-03')?.total || 0;
        },
        avri2026() {
            return this.visiteurs.find(item => item.annee_mois === '2026-04')?.total || 0;
        },
        mai2026() {
            return this.visiteurs.find(item => item.annee_mois === '2026-05')?.total || 0;
        },
        juin2026() {
            return this.visiteurs.find(item => item.annee_mois === '2026-06')?.total || 0;
        },
        juil2026() {
            return this.visiteurs.find(item => item.annee_mois === '2026-07')?.total || 0;
        },
        aout2026() {
            return this.visiteurs.find(item => item.annee_mois === '2026-08')?.total || 0;
        },
        sept2026() {
            return this.visiteurs.find(item => item.annee_mois === '2026-09')?.total || 0;
        },
        octo2026() {
            return this.visiteurs.find(item => item.annee_mois === '2026-10')?.total || 0;
        },
        nove2026() {
            return this.visiteurs.find(item => item.annee_mois === '2026-11')?.total || 0;
        },
        dece2026() {
            return this.visiteurs.find(item => item.annee_mois === '2026-12')?.total || 0;
        },
        janv2027() {
            return this.visiteurs.find(item => item.annee_mois === '2027-01')?.total || 0;
        },
        fevr2027() {
            return this.visiteurs.find(item => item.annee_mois === '2027-02')?.total || 0;
        },
        mars2027() {
            return this.visiteurs.find(item => item.annee_mois === '2027-03')?.total || 0;
        },
        avri2027() {
            return this.visiteurs.find(item => item.annee_mois === '2027-04')?.total || 0;
        },
        mai2027() {
            return this.visiteurs.find(item => item.annee_mois === '2027-05')?.total || 0;
        },
        juin2027() {
            return this.visiteurs.find(item => item.annee_mois === '2027-06')?.total || 0;
        },
        juil2027() {
            return this.visiteurs.find(item => item.annee_mois === '2027-07')?.total || 0;
        },
        aout2027() {
            return this.visiteurs.find(item => item.annee_mois === '2027-08')?.total || 0;
        },
        sept2027() {
            return this.visiteurs.find(item => item.annee_mois === '2027-09')?.total || 0;
        },
        octo2027() {
            return this.visiteurs.find(item => item.annee_mois === '2027-10')?.total || 0;
        },
        nove2027() {
            return this.visiteurs.find(item => item.annee_mois === '2027-11')?.total || 0;
        },
        dece2027() {
            return this.visiteurs.find(item => item.annee_mois === '2027-12')?.total || 0;
        },
    },

    mounted() {
		this.fetchStatsVisiteurs();
    },

    methods: {
        // Gestion de la langue
        changeLangage,

        async fetchStatsVisiteurs() {
			try {
				const rootUrl = `${window.location.protocol}//${window.location.hostname}${window.location.posts ? `:${window.location.posts}` : ''}/`;
				const response = await axios.get(rootUrl + 'backend/vue/adminVisiteurs.php/posts');

				this.visiteurs = response.data;
			} catch {
				console.log('Adresse de récupération des données incorrecte.');
            }
        }
    },
}
</script>