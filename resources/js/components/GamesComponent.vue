<template>
    <div class="container d-flex flex-wrap">
        <div class="card text-left" v-for="game in games">
            <img class="card-img-top" :src="'storage/' + game.thumb" alt="">
            <div class="card-body">
                <h4 class="card-title">{{game.name}}</h4>
            </div>
        </div>
    </div>
</template>

<script>

const { default: Axios } = require('axios');
    export default {

        data() {
          return {
            games: null,
            }
        },
        mounted() {
            console.log('Component mounted.')
                    // Api call con axios
            Axios.get('/api/games').then(resp => {
                console.log(resp);
                this.games = resp.data.data;
            }).catch(e => {
                console.error('Sorry! ' + e);
            })
        }
    }
</script>
<style lang="scss" scoped>
.card {
    .card-title {
        color: red;
    }
}
</style>
