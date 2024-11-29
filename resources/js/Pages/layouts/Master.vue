<script setup>

import { Head, Link } from '@inertiajs/vue3';

const props = defineProps(['articles'])
</script>

 
<template>

<div>
  <Head title="Master" />

<a href="/articles/create">Créer un article</a>
<a href="{{ route('profile') }}">Votre profil</a>
<a class="text-red-600" href="/contact-us">Contactez-nous</a>
<a href="/articles">Afficher tout les articles</a>

<div class="flex flex-wrap gap-7">
  <div class="w-80 border p-5 rounded-xl  transition-all hover:shadow-2xl cursor-pointer" v-for="article in articles" :key="article">
 <img :src="article.image" alt="">
  <p > title : <span class="font-bold">{{ article.title }}</span></p>
  <p > author : <span class="font-bold">{{ article.user.name }}</span></p>
</div>
</div>

</div>

</template>


<style scoped>


</style>