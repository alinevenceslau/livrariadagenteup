<template>
    <form method="POST" class="justify-items-center px-80 py-2 mx-auto" v-on:submit.prevent="salvarLivro">
        <div class="flex flex-wrap -mx-3 mb-4">

        <!-- Input e label de título -->
            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                <label class="block tracking-wide text-gray-700 text-base font-bold mb-2">
                    Título:
                </label>
                <input class="appearance-none block w-full bg-gray-200 rounded text-gray-700 border py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" type="text" placeholder="ex: Jogos Vorazes" name="titulo" required v-model="titulo">
            </div>

            <!-- Input e label de subtítulo -->
            <div class="w-full md:w-1/2 px-3">
                <label class="block tracking-wide text-gray-700 font-bold mb-2">
                    Subtítulo:
                </label>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" placeholder="ex: Em chamas" name="subtitulo" required v-model="subtitulo">
            </div>
        </div>

        <div class="flex flex-wrap -mx-3 mb-4">

            <!-- Input e label de Autor -->
            <div class="w-full px-3">
                <label class="block tracking-wide text-gray-700 font-bold mb-2">
                    Autor:
                </label>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" placeholder="ex: Suzanne Collins" name="autor" required v-model="autor">
            </div>
        </div>
        
        <div class="flex flex-wrap -mx-3 mb-2">
            
            <!-- Label e select do gênero -->
            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-4">
                <label class="block tracking-wide text-gray-700 font-bold mb-2">
                    Gênero:
                </label>

                <div class="relative">
                    <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" required name="genero" v-model="genero">
                        <option value="genero" selected disabled>Escolha uma opção...</option>
						<option value="Ação">Ação</option>
						<option value="Ficção">Ficção</option>
						<option value="Aventura">Aventura</option>
						<option value="Romance">Romance</option>
						<option value="Biografia">Biografia</option>
						<option value="HQ/Mangá">HQ/Mangá</option>
						<option value="Didáticos">Didáticos</option>
						<option value="Literatura Brasileira">Literatura Brasileira</option>
						<option value="Poesia">Poesia</option>
						<option value="Literatura Estrangeira">Literatura Estrangeira</option>
						<option value="Terror">Terror</option>
						<option value="Outros">Outros</option>
                    </select>

                    <!-- Seta para baixo select -->
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                    </div>
                </div>
            </div>
        
            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">

                <!-- Label e select de estado -->
                <label class="block tracking-wide text-gray-700 font-bold mb-2">
                    Estado:
                </label>
            
                <div class="relative">
                    <select class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500" required name="estado" v-model="estado">
                        <option value="estado" disabled selected>Escolha uma opção...</option>
							<option value="Novo">Novo</option>
							<option value="Conservado">Usado</option>
							<option value="Usado">Desgastado</option>
                    </select>

                    <!-- Seta para baixo select -->
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
                    </div>
                </div>
            </div>
        </div>

        <div class="flex flex-wrap -mx-3 mb-4">

            <!-- Label e input de ISBN -->
            <div class="w-full md:w-1/2 px-3 mb-4 md:mb-0">
                <label class="block tracking-wide text-gray-700 font-bold mb-2">
                    ISBN:
                </label>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="text" placeholder="ex: Apenas números" name="isbn" required v-model="isbn">
            </div>

            <!-- Label e input de edição -->
            <div class="w-full md:w-1/2 px-3">
                <label class="block tracking-wide text-gray-700 font-bold mb-2">
                    Edição:
                </label>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="number" placeholder="ex: 1° Edição" required name="edicao" v-model="edicao">
            </div>
        </div>

        <div class="flex flex-wrap -mx-3 mb-4">

            <!-- Label e input de valor -->
            <div class="w-full px-3">
                <label class="block tracking-wide text-gray-700 font-bold mb-2">
                    Valor:
                </label>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" type="number" placeholder="ex: Valor do livro (apenas números)" required name="valor" v-model="valor">
            </div>

            <!-- Label e input de upload -->

            <div v-if="this.hasImage == ''">
                <div class="w-full px-3">
                    <label class="block tracking-wide text-gray-700 font-bold mb-2">
                        Capa:
                    </label>
                    <input class="appearance-none w-2/3 text-gray-700 py-3 px-4 mb-3" type="file" name="image" @change="setImage($event)">
                </div>
            </div>

            <div v-else>
                <img :src="showImage(this.livro)" alt="Capa do livro">
                <div class="w-full px-3">
                    <label class="block tracking-wide text-gray-700 font-bold mb-2">
                        Atualizar:
                    </label>
                    <input class="appearance-none w-2/3 text-gray-700 py-3 px-4 mb-3" type="file" name="image" @change="setImage($event)">
                </div>
            </div>
            
            <div v-if="livro == undefined" class="mx-auto">
                <button class="mx-auto bg-blue-900 hover:bg-blue text-white font-base hover:text-white py-2 mb-4 px-16 border border-blue hover:border-transparent rounded">
                    Criar livro
                </button>
            </div>

            <div v-else class="flex mx-auto gap-5">
                
                <button class="bg-blue-900 hover:bg-blue text-white font-base hover:text-white py-2 mb-4 px-16 border border-blue hover:border-transparent rounded">
                    Atualizar
                </button>

                <button class="bg-red-600 text-white font-base py-2 mb-4 px-16 border border-blue rounded" @click.prevent="cancelChanges()">
                    Cancelar
                </button>
            </div>
        </div>
    </form>
</template>

<script>
export default {
    name: 'LivroForm',

    props:['livro'],

    data(){
        return{
            titulo: this.livro?.titulo ?? '',
            autor: this.livro?.autor ?? '',
            genero: this.livro?.genero ?? '',
            subtitulo: this.livro?.subtitulo ?? '',
            edicao: this.livro?.edicao ?? '',
            isbn: this.livro?.isbn ?? '',
            estado: this.livro?.estado ?? '',
            valor: this.livro?.valor ?? '',
            image: this.livro?.image ?? '',
            hasImage:this.livro?.image ?? ''
        }
    },

    methods:{
        criarLivro(){
            let livroData = {
                titulo: this.titulo,
                autor: this.autor,
                genero: this.genero,
                subtitulo: this.subtitulo,
                edicao: this.edicao,
                isbn: this.isbn,
                estado: this.estado,
                valor: this.valor,
                image: this.image
            }
            const isCreated = this.$store.dispatch('criarLivro', livroData)
            // Verificação usada para evitar a criação de vários livros em sequência
            if(isCreated){
                this.$router.push('/meuAcervo')
            }
        },

        atualizarLivro(){
            let livroData = {
                id: this.livro.id,
                titulo: this.titulo,
                autor: this.autor,
                genero: this.genero,
                subtitulo: this.subtitulo,
                edicao: this.edicao,
                valor: this.valor,
                isbn: this.isbn,
                estado: this.estado,
                image: this.image
            }
            this.$store.dispatch('updateLivro', livroData)
        },

        salvarLivro(){
            if(this.livro == undefined){
                this.criarLivro()
            } else{
                this.atualizarLivro()
            }
        },

        setImage(e) {
            this.image = e.target.files[0]
        },

        showImage(livro){
            return 'http://localhost:8000/img/capasLivro/' + livro.image
        },

        cancelChanges(){
            console.log(this.livro)
            this.$store.dispatch('isEditingUpdate')
        }
    }
}
</script>