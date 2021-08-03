import { createStore } from 'vuex'
import axios from 'axios'

export default createStore({
  state: {
    livros:[],
    token: ''
  },
  getters:{
    isLogged: state =>{
      return state.token !== ''
    }
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
    async fetchData({ state, commit }) {
      console.log('fetching data')

      //Armazena os livros vindos da api laravel
      let response = await axios.get('http://localhost:8000/api/livro', {
        headers:{ Authorization: `Bearer ${state.token}`}
      })
      let livros = await response.data

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
      commit('storeToken', '')
      commit('setLivros', [])
    },

    async loadToken({ commit }){
      const token = localStorage.getItem('token')
      if(token){
        commit('storeToken', token)
      }
    },

    async criarLivro({ state, commit }, livroData){
      // Envio dos dados para o servidor laravel
      let response = await axios.post('http://localhost:8000/api/livro',
        {
          titulo: livroData.titulo,
          autor: livroData.autor,
          genero: livroData.genero,
          subtitulo: livroData.subtitulo,
          edicao: livroData.edicao,
          valor: livroData.valor,
          isbn: livroData.isbn,
          estado: livroData.estado,
        }, 
        {
          headers:{ 
          Authorization: `Bearer ${state.token}`
        }
      })
    }
  },
  modules: {
  },
})
