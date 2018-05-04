import Vue from 'vue';

// Fallback for promises for old browsers
import 'core-js/fn/object/assign';

// Vue.component('ListingPage', require('./components/ListingPage'));
import ListingPage from './components/ListingPage';

var app = new Vue({
    el    : '#app',
    render: h => h(ListingPage),
});
