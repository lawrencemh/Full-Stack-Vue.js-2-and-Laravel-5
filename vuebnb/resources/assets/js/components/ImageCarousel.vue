<template>
    <div class="image-carousel">
        <img v-bind:src="image"/>
        <div class="controls">
            <carousel-control dir="left" @change-image="changeImage"></carousel-control>
            <carousel-control dir="right" @change-image="changeImage"></carousel-control>
        </div>
    </div>
</template>

<script>
    import CarouselControl from '../components/CarouselControl.vue';

    export default {

        data() {
            return {
                index: 0,
            }
        },

        components: {
            CarouselControl
        },

        props: [
            'images',
        ],

        computed: {
            image() {
                return this.images[this.index];
            }
        },

        methods: {
            /**
             * Handle changing the image based on the new val index.
             *
             * @param {int} val
             * @returns {void}
             */
            changeImage(val) {
                let newVal = this.index + parseInt(val);

                if (newVal < 0) {
                    this.index = this.images.length - 1;
                } else if (newVal == this.images.length) {
                    this.index = 0;
                } else {
                    this.index = newVal;
                }
            }
        },

    }
</script>
