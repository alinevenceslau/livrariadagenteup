<template>
    <div class="py-8">
        <nav class="bg-gray-100 fixed h-16 top-0 inset-x-0">
            <div class="max-w-6xl mx-auto px-4">
                <div class="flex justify-between">
            
                    <!-- Esquerda -->
                    <div class="hidden md:flex items-center space-x-1">
                        <router-link to="/cadastrarLivros" class="py-5 px-3 text-gray-700 hover:text-gray-900">Cadastrar Livros</router-link>
                        <router-link to="/meuAcervo" class="py-5 px-3 text-gray-700 hover:text-gray-900">Meu acervo</router-link>
                    </div>

                    <!-- Logo -->
                    <div>
                        <router-link to="/" class="flex items-center py-5 px-2 text-gray-700 hover:text-gray-900">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-3 text-blue-900" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                            </svg>
                            <span class="font-bold">Livraria da Gente</span>
                        </router-link>
                    </div>

                    <!-- Direita -->
                    <div class="hidden md:flex items-center space-x-1" v-if="!isLogged">
                        <router-link to="/login" class="py-5 px-3">Entrar</router-link>
                        <router-link to="/cadastro" class="py-2 px-3 bg-blue-900 text-white hover:bg-blue-700 rounded transition duration-300">Cadastrar</router-link>
                    </div>

                    <div class="hidden md:flex items-center space-x-1"  v-else>
                        <router-link to="/logout" class="py-5 px-3">Logout</router-link>
                    </div>
                    <router-view/>
                </div>
            </div>
        </nav>
    </div>

</template>

<script>
import { mapGetters } from 'vuex'
export default {
    name: 'Navbar',

    computed:{
        ...mapGetters(['isLogged'])
    }
}
</script>