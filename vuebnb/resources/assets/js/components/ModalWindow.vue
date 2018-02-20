<template>
    <div id="modal" :class="{ show: modalOpen }">
        <button class="modal-close" @click="modalOpen = false">&times;</button>
        <div class="modal-content">
            <slot></slot>
        </div>
    </div>
</template>

<script>
    export default {

        data() {
            return {
                modalOpen: false,
            }
        },

        methods: {

            /**
             * Handle the esc key press to close the modal.
             *
             * @param {*} evt
             * @returns {void}
             */
            escapeKeyListener(evt) {
                if (evt.keyCode === 27 && this.modalOpen) {
                    this.modalOpen = false;
                }
            }
        },

        watch: {
            modalOpen() {
                var className = 'modal-open';

                if (this.modalOpen) {
                    document.body.classList.add(className);
                } else {
                    document.body.classList.remove(className);
                }
            }
        },

        created() {
            document.addEventListener('keyup', this.escapeKeyListener);
        },

        destroyed() {
            document.removeEventListener('keyup', this.escapeKeyListener);
        }

    }
</script>
