require('vue');

import Vuex from 'vuex';
import VueRouter from 'vue-router';

Vue.use(Vuex);
Vue.use(VueRouter);

Vue.component(
    'example-component',
    require('./components/ExampleComponent.vue')
);

Vue.component(
    'passport-clients',
    require('./components/passport/Clients')
);

Vue.component(
    'passport-authorized-clients',
    require('./components/passport/AuthorizedClients')
);

Vue.component(
    'passport-personal-access-tokens',
    require('./components/passport/PersonalAccessTokens')
);

import routes from './routes';

const router = new VueRouter({
    mode: 'history',
    routes,
});

const app = new Vue({
    el: '#app',
    router,
});
