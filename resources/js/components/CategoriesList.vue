<template>
    <aside>
        <h3>Categories</h3>
        <ul>
            <li v-for="category in categories">{{category.name}}</li>
        </ul>
    </aside>
</template>

<script>
import Axios from 'axios';
export default {
    data () {
    return {
        categories: null
    }
},
mounted () {
    console.log('Component mounted');
    let config = {
        method: 'get',
        url: 'api/categories',
        headers: {
            'Authorization': 'Bearer qw4pg9rhITTnhtimeKAqtZXRW78xmJqLVDl0VGbwUQc1r2FEBRNeNZCGX4EnbGlqVZ3pJDTDkvtKw8kP',
        }
    }
    Axios(config).then(resp => {
        //console.log('Output', resp.data);
        this.categories = resp.data;
    }).catch(e => {
        console.error( "Sorry! I can't make the call: " + e);
    })
},
}
</script>

<style>

</style>
