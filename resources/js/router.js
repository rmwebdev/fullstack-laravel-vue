import Vue from 'vue'
import Router from 'vue-router'

Vue.use(Router)
import firtspage from './components/pages/firstView'


//project pages


import home from './components/pages/home'
import tags from './admin/pages/tags'
import category from './admin/pages/category'
const routes = [

    //Starter Project router

    {
        path: '/',
        component:home,
    },

    {
        path: '/tags',
        component:tags,
    },

    {
        path: '/category',
        component:category,
    },





    {
        path: '/mynew-vue-route',
        component:firtspage
    }
]

export default new Router({
    mode: 'history',
    routes
})