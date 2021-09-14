//Start authentation
let login = require('./components/auth/login.vue').default;
let register = require('./components/auth/register.vue').default;
let forgate = require('./components/auth/forgate.vue').default;
let logout = require('./components/auth/logout.vue').default;
//end authentation
// home or deshbord componet load
let home = require('./components/home.vue').default;
// employye component load 

let storeemployee = require('./components/employee/create.vue').default;
let employee = require('./components/employee/index.vue').default;
let editemployee = require('./components/employee/edit.vue').default;
// supplier component load 
let storesupplier = require('./components/supplier/create.vue').default;
let supplier = require('./components/supplier/index.vue').default;
let editsupplier = require('./components/supplier/edit.vue').default;
// category component load 
let storecategory = require('./components/category/create.vue').default;
let category = require('./components/category/index.vue').default;
let editcategory = require('./components/category/edit.vue').default;


// product component load 
let storeproduct = require('./components/product/create.vue').default;
let product = require('./components/product/index.vue').default;
let editproduct = require('./components/product/edit.vue').default;

// expanses component load 
let storeexpanses = require('./components/expanses/create.vue').default;
let expanses = require('./components/expanses/index.vue').default;
let editexpanses = require('./components/expanses/edit.vue').default;


// expanses component load 
//let storesalary = require('./components/salary/create.vue').default;
//let salary = require('./components/salary/index.vue').default;
//let editsalary = require('./components/salary/edit.vue').default;

// strock compnonet load
let strock = require('./components/product/strock.vue').default;
let editstrock = require('./components/product/edit-strock.vue').default;

// employye component load 

let storecustomer = require('./components/customer/create.vue').default;
let customer = require('./components/customer/index.vue').default;
let editcustomer = require('./components/customer/edit.vue').default;

export const routes = [
  { path: '/', component: login, name: '/' },
  { path: '/register', component: register, name: 'register' },
  { path: '/forgate', component: forgate, name: 'forgate' },
  { path: '/logout', component: logout, name: 'logout' },
  { path: '/home', component: home, name: 'home' },
  // employee route here
  { path: '/store-employee', component: storeemployee, name: 'store-employee' },
  { path: '/employee', component: employee, name: 'employee' },
  { path: '/edit-employee/:id', component: editemployee, name: 'edit.employee' },
  // supplier route here  
  { path: '/store-supplier', component: storesupplier, name: 'store-supplier' },
  { path: '/supplier', component: supplier, name: 'supplier' },
  { path: '/edit-supplier/:id', component: editsupplier, name: 'edit.supplier' },
  // category route here  
  { path: '/store-category', component: storecategory, name: 'store-category' },
  { path: '/category', component: category, name: 'category' },
  { path: '/edit-category/:id', component: editcategory, name: 'edit.category' },

  // Product route here  
  { path: '/store-product', component: storeproduct, name: 'store-product' },
  { path: '/product', component: product, name: 'product' },
  { path: '/edit-product/:id', component: editproduct, name: 'edit.product' },


    
  // expanses route here  
  { path: '/store-expanses', component: storeexpanses, name: 'store-expanses' },
  { path: '/expanses', component: expanses, name: 'expanses' },
  { path: '/edit-expanses/:id', component: editexpanses, name: 'edit.expanse' },

  
   // salary route here  
   //{ path: '/store-salary', component: storesalary, name: 'store-salary' },
   //{ path: '/salary', component: salary, name: 'salary' },
   //{ path: '/edit-salary/:id', component: editsalary, name: 'edit.salary' },

   //strock route here
   { path: '/strock', component: strock, name: 'strock' },
   { path: '/edit-strock/:id', component: editstrock, name: 'edit.strock' },


  // customer route here
  { path: '/store-customer', component: storecustomer, name: 'store-customer' },
  { path: '/customer', component: customer, name: 'customer' },
  { path: '/edit-customer/:id', component: editcustomer, name: 'edit.customer' },
  
 
  
]