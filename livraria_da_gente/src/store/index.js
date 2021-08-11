import { createStore } from 'vuex'
import axios from 'axios'

export default createStore({
  state: {
    livros:[],
    token: '',
    isEditing: false
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
    },
    removeLivro(state, id){
      for(let contador = 0; contador < state.livros.length; contador++){
        if(state.livros[contador].id === id){
          state.livros.splice(contador, 1)
          break;
        }
      }
    },
    changeIsEditing(state){
      state.isEditing = !state.isEditing
    },
  },
  actions: {
    async fetchData({ state, commit }) {
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

      try {
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
        return true
      } catch (ex) {
        return false
      }
    },

    async deleteLivro({ state, commit } , id){
      // Envio da requisição para a exclusão do livro
      let response = await axios.delete(`http://localhost:8000/api/livro/${id}`, {
        headers:{ Authorization: `Bearer ${state.token}`}
      })
      commit('removeLivro', id)
    },

    async updateLivro({ state, commit } , livroData){
      // Envio do request para a atualização do livro
      let response = await axios.put(`http://localhost:8000/api/livro/${livroData.id}`, livroData, {
        headers:{ Authorization: `Bearer ${state.token}`}
      })

      // Se a resposta da requisição for OK!(200)
      if(response.status == 200){
        for(let counter = 0; counter < state.livros.length; counter++){
          if(state.livros[counter].id == livroData.id){
            state.livros[counter] = livroData
            break;
          }
        }
      }


      commit('changeIsEditing')
      
    },

    async isEditingUpdate({ commit }){
      commit('changeIsEditing')
    }
  },
  modules: {
  },
})
