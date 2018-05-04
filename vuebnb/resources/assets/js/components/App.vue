<template>
    <div>
        <div id="toolbar">
            <router-link :to="{ name: 'home' }">
                <img class="icon" src="/images/logo.png">
                <h1>vuebnb</h1>
            </router-link>
        </div>
        <router-view></router-view>
    </div>
</template>

<script>
    export default {
        name: "App"
    }
</script>

<style scoped>

</style>
