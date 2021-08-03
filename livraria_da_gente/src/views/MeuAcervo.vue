<template>
    <Navbar/>

    <div class="flex items-center justify-center min-w-screen">
        <div class="grid grid-cols-3 gap-2">
            <div v-for="livro in livros" :key="livro.id">
                <div class="bg-blue-100 px-36 rounded h-96">
                    {{livro.titulo}} 
                </div>
            </div>      
        </div>
    </div>
</template>

<script>
import { mapState, mapGetters } from 'vuex'
import Navbar from '@/components/Navbar.vue'


export default {
    name: 'MeuAcervo',

    mounted(){
        if(this.isLogged){
            // Para pegar todos os livros do usuário no momento da montagem
            this.$store.dispatch('fetchData')
        }
    },

    computed:{
        ...mapGetters(['isLogged']),
        ...mapState(['livros'])
    },

    components:{
        Navbar
    }
}
</script>