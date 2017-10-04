
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

import VueRouter from 'vue-router';
Vue.use(VueRouter);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example', require('./components/Example.vue'));
Vue.component('head-nav', require('./components/Header.vue'));

const Post = require('./pages/Post.vue');
const Admin = require('./pages/Admin.vue');

const routes = [
    { path: '/admin', component: Admin },
    { path: '/post', component: Post }
]

const router = new VueRouter({
    routes // short for `routes: routes`
})

const app = new Vue({
    el: '#app',
    router,
    data: {
        message: 'Hello Vue!'
    }
})
