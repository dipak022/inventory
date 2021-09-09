
let login = require('./components/auth/login.vue').default;
let register = require('./components/auth/register.vue').default;
let forgate = require('./components/auth/forgate.vue').default;
let home = require('./components/home.vue').default;

export const routes = [
  { path: '/', component: login, name: '/' },
  { path: '/register', component: register, name: 'register' },
  { path: '/forgate', component: forgate, name: 'forgate' },
  { path: '/home', component: home, name: 'home' },
  
]