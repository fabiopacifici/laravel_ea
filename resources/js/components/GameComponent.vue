<template>
    <div class="game">
        <img class="card-img-top" :src="'storage/' + game.thumb" alt="">
            <div class="card-body">
                <h4 class="card-title">{{game.name}}</h4>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['text'],
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
<style lang="scss" scoped>
.game {
    background-color: #ededed;
}
</style>
