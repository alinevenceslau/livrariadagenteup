<template>  
    <Navbar/>
    <div class="flex items-center justify-around p-28">
        <div class="flex justify-center items-center w-2/5 h-60 p-10 border rounded-lg justify-around cursor-pointer" @click="goToMeuAcervo">
            <img class="w-3/4" src="http://localhost:8000/img/styleImages/meuAcervo.png" alt="Meu Acervo">
            <h1 class="p-8 font-bold text-xl whitespace-nowrap">Meu Acervo</h1>
        </div>

        <div class="flex justify-center items-center w-2/5 h-60 p-10 border rounded-lg justify-around cursor-pointer" @click="goToCadastrarLivro">
            <img class="w-2/4" src="http://localhost:8000/img/styleImages/adicionandoLivro.png" alt="Meu Acervo">
            <h1 class="p-8 font-bold text-xl whitespace-nowrap">Cadastrar Livros</h1>
        </div>
    </div>
</template>

<script>
    import Navbar from '@/components/Navbar.vue'
    export default {
        name: 'Home',

        components:{
            Navbar
        },

        methods:{
            goToMeuAcervo(){
                this.$router.push('/meuAcervo')
            },

            goToCadastrarLivro(){
                this.$router.push('/cadastrarLivros')
            }
        }
    };
</script>