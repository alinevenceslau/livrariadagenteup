<template>
    <div class="flex items-center justify-center">
        <div class="grid grid-cols-3 grid-rows-3 gap-2">
            <div v-for="livro in livros" :key="livro.id">
                <div class="bg-blue-100 p-3 rounded">
                    {{livro.titulo}} 
                </div>
            </div>      
        </div>
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
        ...mapState(['livros'])
    },
}
</script>