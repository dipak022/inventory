<template>

      <div class="conatiner-fluid content-inner mt-n5 py-0">
        
            
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="card">
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <div class="card-title mb-0">
                                <h4 class="mb-0">Add New Product</h4>
                            </div>
                            <div class="card-action">
                                
                                 <a  class="btn btn-info"  to="/product" data-toggle="modal" data-target="#exampleModal" style="color:white;">
                                    Create Customer 
                                    </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="card">
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <div class="card-title mb-0">
                                <h4 class="mb-0" style="text-align:center;">All Product</h4>
                            </div>
                            
                            <div class="card-body">

                            </div>   
                        </div>
                    </div>
                </div>
            </div> 
             
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card  ">
                                <div class="card-body">
                                    <div id="calendar1" class="calendar-s">

                                       <div class="card-body px-0">
                                            <div class="table-responsive">
                                                
                                                <table id="user-list-table" class="table table-striped" role="grid">
                                                    <thead>
                                                        <tr class="ligth">
                                                        <th>Name</th>
                                                        <th>Qty</th>
                                                        <th>Unit</th>
                                                        <th> Price</th>
                                                        <th style="min-width: 100px">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr v-for="cart in carts" :key="cart.id">
                                                        <td>{{cart.pro_name}}</td>
                                                        <td><input type="text" readonly="" style="width:20px;" :value="cart.pro_quentity">
                                                        <button @click.prevent="increment(cart.id)" class="btn btn-sm btn-success">+</button>

                                                        <button @click.prevent="decrement(cart.id)" class="btn btn-sm btn-danger" v-if="cart.pro_quentity >=2">-</button>
                                                        <button class="btn btn-sm btn-danger" v-else="" disabled>-</button>
                                                        </td>
                                                        <td>{{cart.pro_price}}</td>
                                                        <td>{{cart.sub_total}}</td>
                                                        <td>
                                                            <div class="flex align-items-center list-user-action">
                                                                
                                                                
                                                                <a class="btn btn-sm btn-icon btn-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" @click="removeItem(cart.id)">
                                                                    <span class="btn-inner">
                                                                    <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="currentColor">
                                                                        <path d="M19.3248 9.46826C19.3248 9.46826 18.7818 16.2033 18.4668 19.0403C18.3168 20.3953 17.4798 21.1893 16.1088 21.2143C13.4998 21.2613 10.8878 21.2643 8.27979 21.2093C6.96079 21.1823 6.13779 20.3783 5.99079 19.0473C5.67379 16.1853 5.13379 9.46826 5.13379 9.46826" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                        <path d="M20.708 6.23975H3.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                        <path d="M17.4406 6.23973C16.6556 6.23973 15.9796 5.68473 15.8256 4.91573L15.5826 3.69973C15.4326 3.13873 14.9246 2.75073 14.3456 2.75073H10.1126C9.53358 2.75073 9.02558 3.13873 8.87558 3.69973L8.63258 4.91573C8.47858 5.68473 7.80258 6.23973 7.01758 6.23973" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                    </svg>
                                                                    </span>
                                                                </a>
                                                            </div>
                                                        </td>
                                                        </tr>
                                                        
                                                    </tbody>
                                                </table>
                                            </div>
                                            </div>

                                    </div>
                                </div>




                            <div class="card-body">
                                    <div id="calendar1" class="calendar-s">

                                       <div class="card-body px-0">
                                            <div class="table-responsive">
                                                <div class="container">
                                                    <h4>Product Sell Information</h4>
                                                    <br>
                                                    <ul class="list-group">
                                                        <li class="list-group-item" style="color:white;">Total Quentity : <span class="badge" style="margin-left:180px;">{{qty}} pices</span></li>
                                                        <li class="list-group-item" style="color:white;">Sub Total : <span class="badge" style="margin-left:200px;">{{subtotal}} tk</span></li>
                                                        <li class="list-group-item" style="color:white;">Vat : <span class="badge" style="margin-left:250px;">{{ vats.vat }} %</span></li>
                                                        <li class="list-group-item" style="color:white;">Total : <span class="badge" style="margin-left:230px;">{{ subtotal*vats.vat /100 +subtotal }} tk</span></li>
                                                    </ul>
                                                </div> 
                                               
                                            </div>
                                        </div>

                                    </div>
                                </div>






                                <div class="card-body">
                                    <div id="calendar1" class="calendar-s">

                                       <div class="card-body px-0">
                                            <div class="table-responsive">
                                                <div class="container">
                                                   
                                                    <br>
                                                    <form @submit.prevent="orderDone"  enctype="multipart/form-data">
                                                        <div class="form-group">
                                                            <label class="form-label" for="exampleInputText1">Customer Name</label>
                                                            <select class="form-control" v-model="customer_id">
                                                                <option :value="customer.id"  v-for="customer in customers" >{{ customer.name }}</option>
                                                                
                                                            </select> 
                                                            <small class="text-danger" ></small>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="form-label" for="exampleInputText1">Pay Amount</label>
                                                            <input type="text" class="form-control" id="exampleInputText1"  placeholder="Enter Name" v-model="pay">
                                                            <small class="text-danger" ></small>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="form-label" for="exampleInputText1">Due Amount</label>
                                                            <input type="text" class="form-control" id="exampleInputText1"  placeholder="Enter Name" v-model="due">
                                                            <small class="text-danger" ></small>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="form-label" for="exampleInputText1">Tranestion Amount Select </label>
                                                            <select class="form-control" v-model="payby">
                                                                <option v-model="handcash">hand cash</option>
                                                                <option v-model="others">oters</option>
                                                                
                                                            </select> 
                                                            <small class="text-danger" ></small>
                                                        </div>
                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                        
                                                </form>
                                                </div> 
                                               
                                            </div>
                                        </div>

                                    </div>
                                </div>

    




                            



                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    
                    <div class="row">
                        <div class="col-lg-12">
                            
                            
                            <div class="card">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">All Products</a>
                                    </li>
                                    <li class="nav-item" v-for="categore in categoryes" :key="categore.id">
                                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false" @click="subProducts(categore.id)">{{categore.category_name}}</a>
                                    </li>
                                   
                                    </ul>
                                        <div class="tab-content" id="myTabContent">
                                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                                            <div class="card-body">
                                                <input type="text" v-model="searchTerm" class="form-control" placeholder="Search.." style="witth:50px;"><br><br>
                                                <div class="row container" style="padding:10px;">
                                                    
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-6" v-for="product in filtersearch" :key="product.id" >
                                                        <button class="btn btn-sm" @click.prevent="AddtoCart(product.id)">
                                                            <div class="card" >
                                                            <img class="bg-soft-primary rounded" :src="product.patho" alt="profile" id="em_patho" style="width: 5rem; text-align:center;">
                                                            <div class="card-body">
                                                                <small class="">{{ product.product_name }}</small>
                                                                <td v-if="product.product_quantaty>=1"><span class="badge bg-success">Available({{product.product_quantaty}} pics)</span></td>
                                                                <td v-else=""><span class="badge bg-danger">Strock Out</span></td>
                                                            
                                                            </div>
                                                            </div>
                                                        </button>    
                                                    </div>  
                                                </div>
                                            </div>

                                        </div>
                                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                            <div class="card-body">
                                                <input type="text" v-model="getsearchTerm" class="form-control" placeholder="Search.." style="witth:50px;"><br><br>
                                                <div class="row container" style="padding:10px;">
                                                    
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-6" v-for="singleproduct in singlefiltersearch" :key="singleproduct.id" >
                                                        <button @click.prevent="AddtoCart(singleproduct.id)">
                                                            <div class="card" >
                                                            <img class="bg-soft-primary rounded" :src="singleproduct.patho" alt="profile" id="em_patho" style="width: 5rem; text-align:center;">
                                                            <div class="card-body">
                                                                <small class="">{{ singleproduct.product_name }}</small>
                                                                <td v-if="singleproduct.product_quantaty>=1"><span class="badge bg-success">Available({{singleproduct.product_quantaty}} pics)</span></td>
                                                                <td v-else=""><span class="badge bg-danger">Strock Out</span></td>
                                                            
                                                            </div>
                                                            </div>
                                                        </button>    
                                                    </div>  
                                                </div>
                                            </div>
                                        </div>
                                        
                                        </div>
                                
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Customer  Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close" id="closeModel">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="card-body">
                                    <div id="calendar1" class="calendar-s">

                                        <form @submit.prevent="customerInsert" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label class="form-label" for="exampleInputText1">Full Name</label>
                                                <input type="text" class="form-control" id="exampleInputText1"  placeholder="Enter Name" v-model="form.name">
                                                <small class="text-danger" v-if="errors.name">{{ errors.name[0] }}</small>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label" for="exampleInputEmail3">Email Address</label>
                                                <input type="email" class="form-control" id="exampleInputEmail3"  placeholder="Enter Email" v-model="form.email">
                                                <small class="text-danger" v-if="errors.email">{{ errors.email[0] }}</small>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label" for="exampleInputEmail3">Phone</label>
                                                <input type="number" class="form-control" id="exampleInputEmail3"  placeholder="Enter Phone" v-model="form.phone">
                                                <small class="text-danger" v-if="errors.phone">{{ errors.phone[0] }}</small>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label class="form-label" for="exampleInputphone">Address </label>
                                                <input type="text" class="form-control" id="exampleInputphone" placeholder="Enter Address" v-model="form.address">
                                                <small class="text-danger" v-if="errors.address">{{ errors.address[0] }}</small>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label" for="exampleInputNumber1">NID Number</label>
                                                <input type="number" class="form-control" id="exampleInputNumber1" placeholder="Enter NID Number" v-model="form.nid">
                                                <small class="text-danger" v-if="errors.nid">{{ errors.nid[0] }}</small>   
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-level-group">
                                                        <label class="form-label" for="exampleInputdate">Choice Image </label>   
                                                        <input type="file" class="form-control" id="patho" @change="onFileSelect">
                                                        <small class="text-danger" v-if="errors.patho">{{ errors.patho[0] }}</small>
                                                        </div>
                                                    </div>  
                                                    <div class="col-md-6" style="text-align:center; ">
                                                        <div class="form-level-group">
                                                        <label class="form-label" for="exampleInputdate">Choice Image Here</label>  
                                                        
                                                        <img :src="form.patho" style="height : 50px; width : 50px; ">
                                                    
                                                        </div>
                                                    </div>   
                                                </div>               
                                            </div>                         
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                    </form>
                                    </div>
                                </div>
                           </div>
                    
                    </div>
                </div>
                </div>
    </div>
        
      

</template>
<script>
export default {
    created(){
       if(! User.loggedIn()){
          this.$router.push({ name : '/'});
       }
    },
    data(){
        return{
            form:{
                name : null,
                email : null,
                phone : null,
                address : null,
                patho : null,
                nid : null,
            },
            customer_id:'',
            pay:'',
            due:'',
            payby:'',
            errors:[],
            products:[],
            categoryes:'',
            getProducts:[],
            searchTerm:'',
            getsearchTerm:'',
            customers: '',
            carts:[],
            vats:'',

            
        }

    },computed: {
        filtersearch(){
           return this.products.filter(product =>{
              return product.product_name.match(this.searchTerm)
            })
        },
        singlefiltersearch(){
           return this.getProducts.filter(getProduct =>{
              return getProduct.product_name.match(this.getsearchTerm)
            })
        },
        qty(){
            let sum =0;
            for(let i =0; i < this.carts.length; i++){
                sum = sum + (parseFloat(this.carts[i].pro_quentity));
            }
            return sum;
        },
        subtotal(){
            let sum =0;
            for(let i =0; i < this.carts.length; i++){
                sum = sum + (parseFloat(this.carts[i].sub_total));
            }
            return sum;
        }

    },
    methods:{
        // cart methords here 
        AddtoCart(id){

            axios.get('/api/addTocart/'+id)
            .then(()=>{
                Reload.$emit('afterAdd');
                Toast.fire({
                    icon: 'success',
                    title: 'add To Cart successfully'
                })
            })
            .catch(error => this.errors = error.response.data.errors)

        },
        showCartProduct(){
            axios.get('/api/cart/product/')
            .then(({ data })=>{
                this.carts = data
            })
            .catch()

        },
        removeItem(id){
            axios.get('/api/remove/cart/'+id)
            .then(()=>{
                Reload.$emit('afterAdd');
                Toast.fire({
                    icon: 'success',
                    title: 'Remove product'
                })
            })
            .catch(error => this.errors = error.response.data.errors)

        },
        increment(id){
            axios.get('/api/increment/'+id)
            .then(()=>{
                Reload.$emit('afterAdd');
                Toast.fire({
                    icon: 'success',
                    title: 'increment successfully'
                })
               
            })
            .catch(error => this.errors = error.response.data.errors)

        },
        decrement(id){
            axios.get('/api/decrement/'+id)
            .then(()=>{
                Reload.$emit('afterAdd');
                Toast.fire({
                    icon: 'success',
                    title: ' decrement successfully'
                })
               
            })
            .catch(error => this.errors = error.response.data.errors)

        },
        vat(){
            axios.get('/api/vats/')
            .then(({ data })=>{
                this.vats = data
            })
            .catch()

        },
        orderDone(){
            let total =this.subtotal*this.vats.vat /100 +this.subtotal;
            var data ={qty:this.qty, subtotal:this.subtotal, customer_id:this.customer_id, payby:this.payby, pay:this.pay, due:this.due, vat:this.vats.vat, total:total}
            axios.post('/api/orderdone/',data)
            .then(()=>{
                  Toast.fire({
                    icon: 'success',
                    title: 'Signed in successfully'
                     })
                })
            .catch(error => this.errors = error.response.data.errors)

        },
        // end cart methords here 
        allProducts(){
            axios.get('/api/product/')
            .then(({ data })=>{
                this.products = data
            })
            .catch()
        },
        allCategory(){
             axios.get('/api/category/')
            .then(({ data })=>{
                this.categoryes = data
            })
            .catch(console.log('error'))
        },subProducts(id){
            axios.get('/api/getting/product/'+id)
            .then(({ data })=>{
                this.getProducts = data
            })
            .catch(console.log('error'))

        },
        allcustomer(){
            axios.get('/api/customer/')
            .then(({ data })=>{
                this.customers = data
            })
            .catch()
        },
        customerInsert(){

            axios.post('/api/customer/',this.form)
            .then(()=>{
                  Toast.fire({
                    icon: 'success',
                    title: 'Signed in successfully'
                     })
                     $('#closeModel').click();
                    this.customers =this.customers.filter(customer =>{
                        return customer.id != id; 

                    })  

                })
            .catch(error => this.errors = error.response.data.errors)

        },
        onFileSelect(event){
            let file= event.target.files[0];
            //console.log(file);
            if(file.size > 1045770){

             Toast.fire({
                    icon: 'warning',
                    title: 'Image Less then 1 mb. '
                })

            }else{
               let reader = new FileReader();
               reader.onload = event =>{
                   this.form.patho = event.target.result
               }
               
              reader.readAsDataURL(file);
            }
              

        }
    },

    mounted(){
        this.allProducts();
        this.allCategory();
        this.allcustomer();
        this.vat();
        this.showCartProduct();
        Reload.$on('afterAdd',()=>{
            this.showCartProduct();
        })

    }
    
}
</script>

<style>
#em_patho{
   height: 100px;
   widows: 50px; 
}
</style>

