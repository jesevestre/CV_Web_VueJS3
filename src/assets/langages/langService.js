import { reactive } from 'vue';
import francais from '@/assets/langages/francais';
import americain from '@/assets/langages/americain';

const translations = {
	fr: francais,
	en: americain,
};

const supportedLangs = ['fr', 'en'];
const browserLang = navigator.language.slice(0, 2);
const savedLang = localStorage.getItem('lang');
const defaultLang = savedLang || (supportedLangs.includes(browserLang) ? browserLang : 'fr');

document.documentElement.setAttribute('lang', defaultLang);

export const languageState = reactive({
	currentLang: defaultLang,
	labels: translations[defaultLang],
});

export function changeLangage() {
	languageState.currentLang = languageState.currentLang === 'fr' ? 'en' : 'fr';
	languageState.labels = translations[languageState.currentLang];
	localStorage.setItem('lang', languageState.currentLang);
	document.documentElement.setAttribute('lang', languageState.currentLang);
}