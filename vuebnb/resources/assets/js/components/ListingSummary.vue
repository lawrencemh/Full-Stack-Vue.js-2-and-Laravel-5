<template>
    <div class="listing-summary">
        <div class="listing-summary__wrapper">
            <div class="listing-summary--thumbnail" :style="backgroundImageStyle"></div>
            <div class="listing-summary--title">
                <span>{{ listing.price_per_night }}</span>
                <span>{{ listing.title }}</span>
            </div>
            <div class="listing-summary--address">
                {{ listing.address }}
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        props : [
            'listing',
        ],

        computed : {
            backgroundImageStyle() {
                return {
                    'background-image': `url("${this.listing.thumb}")`
                }
            }
        }
    }
</script>
