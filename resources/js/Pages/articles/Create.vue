<script setup>
import { reactive, ref } from 'vue';
import axios from 'axios';
import articleForm from '../partials/article-form.vue';



axios.defaults.withCredentials = true; // Assure que les cookies sont envoyés avec la requête


axios.defaults.headers.common['X-XSRF-TOKEN'] = getCsrfToken();
// axios.defaults.headers.common['Authorization'] = `Bearer ${userToken}`;


// Fonction pour récupérer le token depuis le cookie
function getCsrfToken() {
    const token = document.querySelector('meta[name="csrf-token"]');
    return token ? token.getAttribute('content') : null;
}


const submitForm =ref('')



// Méthode de soumission du formulaire
async function submit() {

    const formData = submitForm.value
    console.log(formData);
    
    try {
      await axios.post('/create/article', formData, 
      {
      headers: {
        'X-XSRF-TOKEN': getCsrfToken()
      }
    }
      );
      alert('Article enregistré avec succès');
    } catch (error) {
      alert('Erreur lors de l\'enregistrement de l\'article');
    
  };
}

</script>


<template>

<div>
    <form action="" method="post" @submit.prevent="submit">
        <articleForm @formData="(k)=>{
            submitForm = k
        }"></articleForm>
    </form>

  </div>

</template>


<style scoped>


</style>