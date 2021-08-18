<template>
        <Navbar/>
    <div class="grid grid-cols-2 gap-3 px-20 py-20">
        <!-- Book image -->
        <div>
            <img class="obejct-fill" :src="image(livro)" alt="Capa do livro">
        </div>

        <!-- Book info -->
        <div class="shadow-lg rounded flex flex-col">
            <div class="px-4 pt-6">
                <span class="font-semibold text-2xl">{{this.livro.titulo}} -&nbsp;</span>
                <span class="font-semibold text-2xl">{{this.livro.subtitulo}}</span>
            </div>

            <div class="px-4 py-2">
                <span class="font-light italic">{{this.livro.autor}}</span>
            </div>

            <hr/>

            <div class="flex flex-col mt-5 px-4 py-2">
                <h3 class="text-lg font-bold pb-1">Características</h3>
                <span class="font-extralight">Estado de conservação: {{this.livro.estado}}</span>
                <span class="font-extralight">Valor: {{this.livro.valor}}</span>
                <span class="font-extralight">ISBN: {{this.livro.isbn}}</span>
                <span class="font-extralight">Gênero: {{this.livro.genero}}</span>
                <span class="font-extralight text-1xl">Vol.{{this.livro.edicao}}&nbsp;</span>
                <span class="font-extrabold">Valor: {{this.livro.valor}}</span>
            </div>
        </div>
    </div>
</template>

<script>
    import Navbar from '@/components/Navbar.vue'
    export default {
        components:{
            Navbar
        },

        data(){
            return{
                livro: this.$route.params
            }
        },

        methods:{
            image(livro){
                console.log(livro)
                return 'http://localhost:8000/img/capasLivro/' + (livro.image || 'default.jpg')
            }
        }
    }
</script>

<style>

</style>