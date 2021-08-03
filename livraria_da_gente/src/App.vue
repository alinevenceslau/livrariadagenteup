<template>
      <router-link to="/" class="pr-3">Home</router-link> |
      <router-link to="/login" class="pr-3 pl-3">Login</router-link> |
      <router-link to="/cadastro" class="pr-3 pl-3">Cadastro</router-link> |
      <router-link to="/about" class="pl-3">About</router-link>
  <router-view />

</template>

<style lang="scss">
</style>

<script>
import { mapGetters } from 'vuex'

export default {
  computed:{
    ...mapGetters(['isLogged'])
  },

  mounted(){
    this.$store.dispatch('loadToken')
  }
}
</script>