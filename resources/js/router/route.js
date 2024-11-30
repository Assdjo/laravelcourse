import { createRouter, createWebHistory } from 'vue-router';
import Dashboard from '@/Pages/Dashboard.vue';
import Master from '@/Pages/layouts/Master.vue';

const routes = [
    {
        path: '/dashboard',
        name: 'welcome',
        component: Dashboard,
        children: [
            {
                path: '/master',
                name: 'master',
                component: Master,
            },
        ]
    },
    
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

export default router;
