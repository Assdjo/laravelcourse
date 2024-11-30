<script setup>

import { reactive, ref } from 'vue';
import axios from 'axios';
axios.defaults.withCredentials = true; // Assure que les cookies sont envoyés avec la requête


axios.defaults.headers.common['X-XSRF-TOKEN'] = getCsrfToken();
// axios.defaults.headers.common['Authorization'] = `Bearer ${userToken}`;


// Fonction pour récupérer le token depuis le cookie
function getCsrfToken() {
    const token = document.querySelector('meta[name="csrf-token"]');
    console.log(token.getAttribute('content'));
    
    return token ? token.getAttribute('content') : null;

}
// Initialisation du formulaire et des erreurs
const form = reactive({
  title: '',
  body: '',
  user_id: '',
  image: null,
  _token : getCsrfToken(),
});

const errors = reactive({
  title: null,
  body: null,
  image: null,
});

// Simulation des utilisateurs (vous pouvez utiliser une API pour charger les vrais utilisateurs)


// Méthodes de validation
const validateTitle = () => {
  errors.title = form.title ? null : 'Le titre est requis';
};

const validateBody = () => {
  errors.body = form.body ? null : 'Le contenu de l\'article est requis';
};

// Gestion de l'upload de l'image
const handleImageUpload = (event) => {
  form.image = event.target.files[0];
};

// Méthode de soumission du formulaire
const submitForm = async () => {
  validateTitle();
  validateBody();

  if (Object.values(errors).some(error => error !== null)) {
    return errors; 
  }

  const formData = new FormData();
  formData.append('title', form.title);
  formData.append('body', form.body);
  formData.append('user_id', form.user_id);
  if (form.image) formData.append('image', form.image);
   formData.append('_token', form._token);

  return formData; // Retourne les données prêtes à être envoyées

}
const emit = defineEmits(['formData'])

async function emitFunc() {
  const formData = await submitForm();
  if (formData) {
    emit('formData', formData); // Envoie les données validées au parent
  }
}
</script>


<template>

<div>

    <div class="form-group">
      <label for="title">Titre</label>
      <input 
        type="text" 
        class="form-control" 
        id="title" 
        v-model="form.title"
        @blur="validateTitle"
      >
      <div v-if="errors.title" class="text-danger">{{ errors.title }}</div>
    </div>

    <div class="form-group">
      <label for="body">Contenu de l'article</label>
      <textarea 
        class="form-control" 
        id="body" 
        rows="5" 
        v-model="form.body"
        @blur="validateBody"
      ></textarea>
      <div v-if="errors.body" class="text-danger">{{ errors.body }}</div>
    </div>

    <div class="form-group">
      <label for="image">Image</label>
      <input 
        type="file" 
        class="form-control" 
        id="image" 
        @change="handleImageUpload"
      >
      <div v-if="errors.image" class="text-danger">{{ errors.image }}</div>
    </div>

   

    <button type="submit" class="btn btn-primary" @click="emitFunc()">Enregistrer</button>

</div>

</template>


<style scoped>


</style>