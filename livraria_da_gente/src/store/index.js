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

    async register({ commit }, data){

      try {
        // Envio dos dados do usuário para a API laravel
        let response = await axios.post('http://localhost:8000/api/cadastrar', data)
      } catch (ex) {
        return false
      }
    },

    async loadToken({ commit }){
      const token = localStorage.getItem('token')
      if(token){
        commit('storeToken', token)
      }
    },

    async criarLivro({ state, commit }, livroData){

      var formData = new FormData()

      formData.append("titulo", livroData.titulo)
      formData.append("autor", livroData.autor)
      formData.append("genero", livroData.genero)
      formData.append("subtitulo", livroData.subtitulo)
      formData.append("edicao", livroData.edicao)
      formData.append("valor", livroData.valor)
      formData.append("isbn", livroData.isbn)
      formData.append("estado", livroData.estado)
      formData.append("image", livroData.image)

      console.log(formData)
      
      // Envio dos dados para o servidor laravel
      try {
        let response = await axios.post('http://localhost:8000/api/livro',
           formData,
          {
            headers:{ 
            Authorization: `Bearer ${state.token}`,
            'Content-Type': 'multipart/form-data'
          }
        })

        console.log(response)

        // return true
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
