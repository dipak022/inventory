
require('./bootstrap');
import Vue from 'vue';

import VueRouter from 'vue-router'

Vue.use(VueRouter)
// router import
import {routes} from './routes';

// import user class
import User from './helpers/User';
window.User = User;

// sweet alert 
import Swal from 'sweetalert2'
window.Swal = Swal;

//Notification 
import Notification from './helpers/Notification'
window.Notification = Notification;
 
const Toast = Swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 3000,
  timerProgressBar: true,
  didOpen: (toast) => {
    toast.addEventListener('mouseenter', Swal.stopTimer)
    toast.addEventListener('mouseleave', Swal.resumeTimer)
  }
})

window.Toast =Toast;

// end swet alert

window.Reload = new Vue();






const router = new VueRouter({
  routes ,
  mode: "history",
})

new Vue({
    el: '#app',
    router
    
});