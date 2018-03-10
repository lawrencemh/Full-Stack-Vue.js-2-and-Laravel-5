<template>
    <div>
        <p :class="{ contracted: contracted }"><slot></slot></p>
        <button class="more" @click="toggleContract">
            {{ contracted ? 'More' : 'Less' }}
        </button>
    </div>
</template>

<script>
    export default {

        data() {
            return {
                contracted: true,
            }
        },

        methods: {

            toggleContract() {
                this.contracted = !this.contracted;
            }

        }

    }
</script>
