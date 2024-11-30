<script setup>

</script>

<template>
    <div>
        <div class="p-6 lg:p-8 bg-white border-b border-gray-200">
            

            <h1 class="mt-8 text-2xl font-medium text-gray-900">
               Bienvenue sur votre application de gestion d'articles
            </h1>

            <p class="mt-6 text-gray-500 leading-relaxed">
                Bienvenue sur le tableau de bord de gestion des articles. Cet espace vous offre une vue d'ensemble complète de tous les contenus publiés, en cours de rédaction ou en attente de validation. Vous pouvez facilement gérer vos articles, surveiller leur performance, et interagir avec les statistiques en temps réel
            </p>
        </div>

        <div class="bg-gray-200 bg-opacity-25 grid grid-cols-1 md:grid-cols-2 gap-6 lg:gap-8 p-6 lg:p-8">
            <div>
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="size-6 stroke-gray-400">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                   </svg>
                    <h2 class="ms-3 text-xl font-semibold text-gray-900">
                        <a href="/create/article">creer un article</a>
                    </h2>
                </div>

                <p class="mt-4 text-gray-500 text-sm leading-relaxed">
                    ici vous pouvez creer de nouveaux articles
                </p>

                
            </div>

           

           

            <div>
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" class="size-6 stroke-gray-400">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
                    </svg>
                    <h2 class="ms-3 text-xl font-semibold text-gray-900">
                       Voir tout les articles 
                    </h2>
                </div>

                <p class="mt-4 text-gray-500 text-sm leading-relaxed">
                    ici vous pouvez voir tout les articles disponibles
                </p>
            </div>
        </div>
    </div>
</template>
