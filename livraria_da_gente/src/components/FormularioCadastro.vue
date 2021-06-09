<template>
    <form> 
        <div class="flex items-center justify-center h-screen">
            <div class="bg-gray-100 shadow-2xl rounded mb-20 max-w-5xl h-4/6 w-2/6 ">
                <h1 class="py-5 text-3xl font-bold text-center">Cadastro de Usuário</h1>
                <div class="grid ml-10 ">
                    <label class="labelForm">Nome:</label>
                    <input type="text" placeholder="Nome de Usuário" class="border-none text-black focus:outline-none ml-3 w-80">
                
                    <label class="labelForm">E-mail:</label>
                    <input type="text" placeholder="E-mail" class="border-none text-black focus:outline-none ml-3 w-80">
                
                    <label class="labelForm">Senha:</label>
                    <input type="text" placeholder="Senha" class="border-none text-black focus:outline-none ml-3  w-80">
                
                    <label class="labelForm">Confime a sua senha:</label>
                    <input type="text" placeholder="Confirme sua Senha" class="border-none text-black focus:outline-none ml-3 w-80">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-4 rounded-full my-5 justify-self-center">Cadastrar</button>
                </div>
            </div>
        </div>
    </form>
</template>

<script>
export default {
    name: 'Cadastro',
}
</script>
<style scoped>

</style>