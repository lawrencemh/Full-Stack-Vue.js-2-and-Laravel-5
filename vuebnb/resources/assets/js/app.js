import Vue from 'vue';

// Fallback for promises for old browsers
import 'core-js/fn/object/assign';

import {populateAmenitiesAndPrices} from './helpers';

Vue.component('ImageCarousel', require('./components/ImageCarousel.vue'));
Vue.component('ModalWindow', require('./components/ModalWindow.vue'));
Vue.component('FeatureList', require('./components/FeatureList.vue'));
Vue.component('HeaderImage', require('./components/HeaderImage.vue'));
Vue.component('ExpandableText', require('./components/ExpandableText.vue'));

let model = JSON.parse(window.vuebnb_listing_model);
model     = populateAmenitiesAndPrices(model);


var app = new Vue({
    el: '#app',

    data: Object.assign(model, {
        contracted: true,
    }),

    methods: {
        /**
         * Set the image modal to open.
         *
         * @returns {void}
         */
        openModal() {
            this.$refs.imageModal.modalOpen = true;
        }
    },

    watch: {
        //
    }
});
