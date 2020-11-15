import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

import adminHome from './components/admin/AdminHome.vue'
import CategoryList from './components/admin/category/List.vue'
import AddCategory from './components/admin/category/New.vue'

const routes = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/home',
            component: adminHome,
        },
        {
            path: '/post',
            component: adminHome,
        },
        {
            path: '/category-list',
            component: CategoryList,
        },
        {
            path: '/add-category',
            component: AddCategory,
        },
    ]
});

export default routes;