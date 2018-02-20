<template>
    <i :class="classes" @click="click"></i>
</template>

<script>
    export default {

        props: [
            'dir',
        ],

        computed: {
            classes() {
                return 'carousel-control fa fa-2x fa-chevron-' + this.dir;
            }
        },

        methods: {
            click() {
                this.$emit('change-image', this.dir === 'left' ? -1 : 1);
            }
        }

    }
</script>
