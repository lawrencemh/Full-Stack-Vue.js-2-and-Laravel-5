<template>

    <div>
        <hr>
        <div class="list">
            <div class="title">{{ title }}</div>
            <div class="content">
                <div class="list-item" v-for="item in items">
                    <slot v-bind="item"></slot>
                </div>
            </div>
        </div>

    </div>

</template>

<script>
    export default {

        props: [
            'title',
            'items',
        ]

    }
</script>
