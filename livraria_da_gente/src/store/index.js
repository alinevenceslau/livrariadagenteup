import { createStore } from 'vuex'
import axios from 'axios'

export default createStore({
  state: {
    livros:[],
    token: ''
  },
  mutations: {
    setLivros(state, livros){
      state.livros = livros
    },
    storeToken(state, token){
      state.token = token
      localStorage.setItem('token', token)
    } 
  },
  actions: {
    async fetchData({ commit }) {
      console.log('fetching data')

      //Armazena os livros vindos da api laravel
      let response = await fetch('http://localhost:8000/api/livro')
      let livros = await response.json()

      commit('setLivros', livros)
    },

    async login({ commit }, data){

      try {
        let response =  await axios.post('http://localhost:8000/api/auth/login' , {
          email: data[0],
          password: data[1]
        })
  
        const reponseData = response.data
        commit('storeToken', reponseData.access_token)

        return true
      } catch (ex) {
        return false
      }
    },

    async logout({ commit }){
      commit('storeToken', null)
    }
  },
  modules: {
  },
})
