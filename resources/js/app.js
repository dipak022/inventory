
require('./bootstrap');
import Vue from 'vue';

import VueRouter from 'vue-router'

Vue.use(VueRouter)
// router import
import {routes} from './routes';

// import user class
import User from './helpers/User';
window.User = User;






const router = new VueRouter({
  routes ,
  mode: "history",
})

new Vue({
    el: '#app',
    router
    
});