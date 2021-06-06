<template>
  <form>

<!-- <label>Nome:</label>
    <input type="text" class="border border-black" v-model="pessoa.nome">
    <label>Idade:</label>
    <input type="text" class="border border-black" v-model="pessoa.idade">
<button @click="add" key="add">OK</button> -->


   Nome: <input class="border-none text-black mr-3 focus:outline-none" placeholder="Digite seu Nome" type="text" v-model="pessoa.user"> <br>
   Senha:  <input class="border-none text-black mr-3 focus:outline-none" placeholder="Digite sua Senha" type="text" v-model="pessoa.pw">
    <button class="" @click="add" key="add">OK
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
      user: "",
      pw: ""
    }
    }
  },
  methods: {
    add(){
      console.log(this.pessoa);
      //this.pessoaAtual = [this.pessoa.user, this.pessoa.pw];
      this.$store.commit('addUser', this.pessoa);
      // this.pessoaAtual.push(this.pessoa.nome, this.pessoa.senha)
      // this.users.push(this.pessoaAtual);
      this.pessoa = {};
      //this.pessoaAtual = [],
      //this.pessoa.nome = "qualquer coisa";
    }
  },
}
</script>

<style scoped>

</style>
