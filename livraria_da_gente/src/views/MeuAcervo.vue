<template>
    <Navbar/>

    <h1 class="text-center text-2xl mb-5">Meu acervo</h1>

    <div class="flex items-center justify-center min-w-screen px-10">
        <div class="grid grid-cols-4 gap-1">
            <div v-for="livro in livros" :key="livro.id">
                <div class="border px-5 py-5 rounded h-116 flex flex-col">
                    
                    <!-- Imagem do livro -->
                    <div class="bg-gray-200 h-3/5 flex justify-center items-center">
                        <span class="text-center font-bold">Imagem do livro aqui</span>
                    </div>
                    
                    <div class="flex-grow">
                        <!-- Título -->
                        <div class="pt-3 flex flex-col">
                            <span class="text-lg font-medium">{{livro.titulo}} - {{livro.subtitulo}}</span>
                            <span class="py-2">{{livro.autor}}</span>
                        </div>
                    </div>

                    <!-- Botões -->
                    <div class="pb-1">
                        <button @click.prevent="" class="py-2 px-6 float-left border border-blue-900 text-blue-900 rounded hover:bg-blue-900 hover:text-white">Editar livro</button>
                        <button @click.prevent="deleteLivro(livro.id)" class="py-2 px-6 float-right bg-red-500 hover:bg-red-700 text-white rounded">Deletar livro</button>
                    </div>
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
    },
    
    methods:{
        deleteLivro(id){
            this.$store.dispatch('deleteLivro', id)
        }
    }
}
</script>