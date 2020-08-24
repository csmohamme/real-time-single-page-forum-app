import Vue from 'vue'
import VueRouter from 'vue-router'


Vue.use(VueRouter)

import login from '../components/Login/login'
const routes = [
    { path: '/Login', component: login }
]

const router = new VueRouter({
    routes,
    hashbang: false,
    mode: "history" // short for `routes: routes`
})

export default router