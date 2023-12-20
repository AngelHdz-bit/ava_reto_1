import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '../views/HomeView.vue'
import TareaNew from '../views/TareaNew.vue'
import TareaEdit from '../views/TareaEdit.vue'
import TareaView from '../views/TareaView.vue'

const routes = [
  {
    path: '/',
    name: 'home',
    component: HomeView
  },
  {
    path: '/newTarea',
    name: 'create',
    component: TareaNew
  },
  {
    path: '/editTarea/:id',
    name: 'edit',
    component: TareaEdit
  },
  {
    path: '/tareaview',
    name: 'view',
    component: TareaView
  },
  {
    path: '/about',
    name: 'about',
    // route level code-splitting
    // this generates a separate chunk (about.[hash].js) for this route
    // which is lazy-loaded when the route is visited.
    component: () => import(/* webpackChunkName: "about" */ '../views/AboutView.vue')
  }
]

const router = createRouter({
  history: createWebHistory(process.env.BASE_URL),
  routes
})

export default router
