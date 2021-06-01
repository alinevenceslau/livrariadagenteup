<template>
  <form>

<!-- <label>Nome:</label>
    <input type="text" class="border border-black" v-model="pessoa.nome">
    <label>Idade:</label>
    <input type="text" class="border border-black" v-model="pessoa.idade">
<button @click="add" key="add">OK</button> -->


    <input class="border-none text-black mr-3 focus:outline-none" placeholder="Digite sua Senha" type="text">
    <input class="border-none text-black mr-3 focus:outline-none" placeholder="Digite seu Nome" type="text">
    <button class="btn-BordaAzul">OK
    </button>
 
  </form>

</template>

<script>
export default {
  name: 'Formulario',
  data(){
    return{
      pessoaAtual: [],
      users: [],
    pessoa: {
      nome: "",
      idade: ""
    }
    }
  },
  methods: {
    add(){
      this.pessoaAtual.push(this.pessoa.nome, this.pessoa.idade)
      this.users.push(this.pessoaAtual);
      this.pessoaAtual = [],
      this.pessoa.nome = "";
      this.pessoa.idade= "";
    }
  },
}
</script>

<style scoped>

</style>
