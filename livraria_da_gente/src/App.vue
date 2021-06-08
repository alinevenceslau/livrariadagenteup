<template>
  <div class="bg-blue-500 p-5 text-white">
    <h3 class="pl-5 text-2xl font-medium">Livraria da gente</h3>
    <div class="relative pl-5 text-1xl font-medium">
    <div class="absolute bottom-px right-0 pr-5">
      <router-link to="/" class="pr-3">Home</router-link> |
      <router-link to="/login" class="pr-3 pl-3">Login</router-link> |
      <router-link to="/cadastro" class="pr-3 pl-3">Cadastro</router-link> |
      <router-link to="/about" class="pl-3">About</router-link>
    </div>
  </div>
  </div>
  <router-view />
</template>

<style lang="scss">
</style>
