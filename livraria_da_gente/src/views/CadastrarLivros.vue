<template>
    <Navbar/>
    <LivroForm/>
</template>

<script>
    import Navbar from '@/components/Navbar.vue'
    import LivroForm from '@/components/LivroForm.vue'

    export default {
        name: 'CadastrarLivros',
        components:{
            Navbar, LivroForm
        }
    }
</script>