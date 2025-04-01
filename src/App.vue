<template>
	<router-view v-slot="{ Component }">
		<transition name="cloud" mode="out-in">
		  <component :is="Component" :key="$route.path" />
		</transition>
	</router-view>
</template>


<style>
/* Effet Nuage - Transition plus douce */
.cloud-enter-active, .cloud-leave-active {
  transition: opacity 1s ease-out, filter 1s ease-out, transform 1s ease-out;
}

/* Apparition en douceur de la nouvelle page */
.cloud-enter {
  opacity: 0;
  filter: blur(10px);
  transform: scale(1);
}

/* Disparition douce de l'ancienne page */
.cloud-leave-to {
  opacity: 0;
  filter: blur(10px);
  transform: scale(1);
}
</style>