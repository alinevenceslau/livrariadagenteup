import { createStore } from 'vuex'

export default createStore({
  state: {
    user: "",
    users: JSON.parse(localStorage.getItem('users')) ?? [],
  },
  mutations: {
    // setUsername(state, val) {
    //   state.user = val
    // },
    // setPassword(state, val){
    //   state.password = val
    //   localStorage.setItem('users', JSON.stringify(state.users))
    // },
    addUser(state, user) {
         state.users.push(user);
         console.log(state.users);
         localStorage.setItem('users', JSON.stringify(state.users));
    },
  },
  actions: {
  },
  modules: {
  },
})
