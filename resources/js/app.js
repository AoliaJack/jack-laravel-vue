import './bootstrap'
import Vue from 'vue'

import VueRouter from 'vue-router';
Vue.use(VueRouter)

import VueAxios from 'vue-axios';
import axios from 'axios';

import App from './layouts/App.vue'
Vue.use(VueAxios, axios);

import Home from './views/Home.vue'



const routes = [
        {
            path: '/',
            name: 'home',
            component: Home
        }
];

const router = new VueRouter({
    mode: 'history',
    routes: routes
});

const app = new Vue(Vue.util.extend({ router }, App)).$mount('#app');
