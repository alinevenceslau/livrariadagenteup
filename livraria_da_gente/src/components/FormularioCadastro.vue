<template>

<form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 min-w-sm">
    <h1>Cadastro de Usuário</h1><br>
    Nome: <input type="text" placeholder="Nome de Usuário" class="border-none text-black mr-3 focus:outline-none"><br>
    Email: <input type="text" placeholder="E-mail" class="border-none text-black mr-3 focus:outline-none">  <br>
    Senha: <input type="text" placeholder="Senha" class="border-none text-black mr-3 focus:outline-none"><br>
    Confirma: <input type="text" placeholder="Confirme sua Senha" class="border-none text-black mr-3 focus:outline-none"><br>
    <button class="bg-blue-500 hover:bg-blue-700
         text-white font-bold py-1 px-4 rounded-full">Cadastrar</button>
    </form>
</template>

<script>
export default {
    name: 'Cadastro',
}
</script>
<style scoped>

</style>