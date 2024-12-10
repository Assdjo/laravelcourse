<script setup>
const props = defineProps(['article'])

</script>


<template>

<div>

    <p>le titre {{ article.title }}</p>
    <p>la description {{ article.body }}</p>
    <div>
        les commentaires : 
    <p v-for="comment in article.comments"> {{ comment.comment }}</p>
    </div>

</div>

</template>


<style scoped>


</style>