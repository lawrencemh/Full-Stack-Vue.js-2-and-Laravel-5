import Vue from 'vue';
import VueRouter from 'vue-router';

// Fallback for promises for old browsers
import 'core-js/fn/object/assign';

Vue.use(VueRouter);

import App from './components/App';
import router from './router';

var app = new Vue({
    el    : '#app',
    render: h => h(App),
    router,
});
