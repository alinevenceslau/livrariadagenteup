import { createRouter, createWebHashHistory } from 'vue-router'

const routes = [
  {
    path: '/',
    name: 'Home',
    component: ()=> import('../views/Home.vue')
  },
  {
    path: '/about',
    name: 'About',
    // route level code-splitting
    // this generates a separate chunk (about.[hash].js) for this route
    // which is lazy-loaded when the route is visited.
    component: () => import(/* webpackChunkName: "about" */ '../views/About.vue')
  },
  {
    path: '/cadastrarLivros',
    name: 'CadastrarLivros',
    component: () => import('../views/CadastrarLivros.vue') 
  },

  {
    path: '/login',
    name:'Login',
    component: ()=> import('../views/Login.vue')
  },

  {
    path: '/Logout',
    name: 'Logout',
    component: ()=> import('../views/Logout.vue')
  },

  {
    path: '/cadastro',
    name:'Cadastro',
    component: ()=> import('../views/Cadastro.vue')
  },
  {
    path:'/meuAcervo',
    name:'MeuAcervo',
    component: ()=> import('../views/MeuAcervo.vue')
  },
  {
    path:'/landingPage',
    name:'LandingPage',
    component: ()=> import('../views/LandingPage.vue')
  }
]

const router = createRouter({
  history: createWebHashHistory(),
  routes
})

export default router
