<template>
    <div class="home-container">
        <div class="listings-summary-group" v-for="(group, country) in listingGroups">
            <h1>Places in {{ country }}</h1>
            <div class="listing-summaries-wrapper">
                <div class="listing-summaries">
                    <ListingSummary v-for="listing in group" :key="listing.id" :listing="listing"></ListingSummary>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import {groupByCountry} from '../helpers';

    import ListingSummary from './ListingSummary.vue';

    let serverData    = JSON.parse(window.vuebnb_server_data);
    let listingGroups = groupByCountry(serverData);

    export default {
        data() {
            return {listingGroups}
        },

        components: {
            ListingSummary,
        }
    }
</script>
