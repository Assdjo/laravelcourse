<script setup>
import { Head, Link } from '@inertiajs/vue3';
import NavLink from '@/Components/NavLink.vue';
import Edit from '../articles/edit.vue';

const props = defineProps(['articles'])
</script>

 
<template>

<div>
  <Head title="Master" />



<div class="flex flex-wrap gap-7 justify-center">
  <div class="w-80 border p-5 rounded-xl  transition-all hover:shadow-2xl cursor-pointer" v-for="article in articles" :key="article">
 <NavLink :href="route('edit')" :active="route().current('edit')" @click="()=>{ newCurrent(Edit)}">
  <img :src="article.image" alt="">
  <p > title : <span class="font-bold">{{ article.title }}</span></p>
  <p > author : <span class="font-bold">{{ article.user.name }}</span></p>
  <p>tags :
    
    <span class="font-bold text-blue-700" v-for="tags in article.tags" :key="tags">
      #{{ tags.name }}
 </span></p>
 </NavLink>
</div> 
</div>

</div>

</template>


<style scoped>


</style>