import { createStore } from 'vuex'

export default createStore({
  state: {
    items:[]
  },
  mutations: {
    setLivros(state, items){
      state.items = items
    }
  },
  actions: {
    async fetchData({ commit }) {
      console.log('fetching data')

      //Armazena os livros vindos da api laravel
      let response = await fetch('http://localhost:8000/api/livro')
      console.dir(await response.json)
      let livros = await response.json

      commit('setLivros', livros)
    }
  },
  modules: {
  },
})
