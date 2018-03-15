// import Component from './components/Component.vue';

import AdminIndex from './components/admin/Index.vue';
import AdminWelcome from './components/admin/Welcome.vue';
import AdminDashboard from './components/admin/Dashboard.vue';
import OAuthSetup from './components/admin/OAuthSetup.vue';

export const routes = [
    {
        path: '/admin',
        component: AdminIndex,
        children: [
            { path: '', component: AdminWelcome, name: 'Admin Welcome', },
            { path: 'dashboard', component: AdminDashboard, name: 'Admin Dashboard', },
            { path: 'setup', component: OAuthSetup, name: 'Admin OAuth', },
        ],
    },
];

export default routes;