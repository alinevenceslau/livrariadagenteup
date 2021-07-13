<template>
    <div><h1>These are your books</h1>
    {{items}}
    </div>    
</template>

<script>
import { mapState } from 'vuex'

export default {
    name: 'MeuAcervo',

    mounted(){
        this.$store.dispatch('fetchData')
    },

    computed:{
        ...mapState(['items'])
    },
}
</script>