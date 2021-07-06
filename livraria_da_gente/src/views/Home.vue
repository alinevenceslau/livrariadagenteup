<template>
    <Navbar/>

    <!-- Imagem de fundo -->
    <div class="bg-red-500 rounded">
        <img class="object-cover h-80 w-full" src="https://i.ibb.co/Rb84LvW/estante.jpg" alt="Estante de Livros">
    </div>
</template>

<script>
    import Navbar from '@/components/Navbar.vue'
    export default {
        name: 'Home',

        components:{
            Navbar
        }
    };
</script>