<template>

    <div class="header">
        <div class="header-img" :style="headerImageStyle" @click="$emit('header-clicked')">
            <button class="view-photos">View Photos</button>
        </div>
    </div>

</template>

<script>
    export default {

        props: [
            'image-url',
        ],

        computed: {
            headerImageStyle() {
                return {
                    'background-image': `url(${this.imageUrl})`
                }
            }
        }

    }
</script>
