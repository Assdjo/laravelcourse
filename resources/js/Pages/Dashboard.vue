<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Welcome from '@/Components/Welcome.vue';
import Master from '@/Pages/layouts/Master.vue';
import { onMounted, ref, watch } from 'vue';

import Create from './articles/Create.vue';
import { usePage } from '@inertiajs/vue3';


const props = defineProps(['articles'])
const currentComponent = ref('');

const { url } = usePage()
console.log(url );

onMounted(()=>{
    setComponent(url)
})

function setComponent(url) {
  switch (url) {
    case '/dashboard':
      currentComponent.value = Welcome;
      break;
    case '/articles':
      currentComponent.value = Master;
      break;
    case '/create/article':
      currentComponent.value = Create;
      break;
    default:
      currentComponent.value = Welcome;
      break;
  }
}
</script>

<template>
    <AppLayout title="Dashboard" @currentComponent="(k)=>{
        currentComponent = k;
        setolocale()
console.log(k);

    }">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboard
            </h2>
            
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-5">
                   <component :is="currentComponent" :articles="currentComponent?.__name =='Master'?articles:''"></component>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
