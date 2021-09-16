<template>

      <div class="conatiner-fluid content-inner mt-n5 py-0">
        
            
            <div class="row">
                <div class="col-lg-5 col-md-5">
                    <div class="card">
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <div class="card-title mb-0">
                                <h4 class="mb-0">Add New Product</h4>
                            </div>
                            <div class="card-action">
                                
                                 <router-link  class="btn btn-info"  to="/product" >
                                    <i class="fa fa-plus"></i>Create Customer 
                                    </router-link>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-7">
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
                <div class="col-lg-5 col-md-5">
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
                                                        <th>Quentity</th>
                                                        <th>Unit</th>
                                                        <th>Total Price</th>
                                                        <th style="min-width: 100px">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr v-for="employee in filtersearch" :key="employee.id">
                                                        <td>Dipak</td>
                                                        <td>10</td>
                                                        <td>2500</td>
                                                        <td>3000</td>
                                                        <td>
                                                            <div class="flex align-items-center list-user-action">
                                                                
                                                                
                                                                <a class="btn btn-sm btn-icon btn-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" @click="deleteEmployee(employee.id)">
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
                                                        <li class="list-group-item" style="color:white;">Total Quentity : <span class="badge" style="margin-left:220px;">120000</span></li>
                                                        <li class="list-group-item" style="color:white;">Sub Total : <span class="badge" style="margin-left:255px;">51020</span></li>
                                                        <li class="list-group-item" style="color:white;">Vat : <span class="badge" style="margin-left:300px;">30000</span></li>
                                                        <li class="list-group-item" style="color:white;">Total : <span class="badge" style="margin-left:286px;">30000</span></li>
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
                                                    <form  enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label class="form-label" for="exampleInputText1">Customer Name</label>
                                                <input type="text" class="form-control" id="exampleInputText1"  placeholder="Enter Name" >
                                                <small class="text-danger" ></small>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label" for="exampleInputText1">Pay Amount</label>
                                                <input type="text" class="form-control" id="exampleInputText1"  placeholder="Enter Name" >
                                                <small class="text-danger" ></small>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label" for="exampleInputText1">Due Amount</label>
                                                <input type="text" class="form-control" id="exampleInputText1"  placeholder="Enter Name" >
                                                <small class="text-danger" ></small>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label" for="exampleInputText1">Tranestion Amount Select </label>
                                                <input type="text" class="form-control" id="exampleInputText1"  placeholder="Enter Name" >
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
                <div class="col-lg-7 col-md-7">
                    
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
                                                        <a href="#">
                                                            <div class="card" >
                                                            <img class="bg-soft-primary rounded" :src="product.patho" alt="profile" id="em_patho" style="width: 5rem; text-align:center;">
                                                            <div class="card-body">
                                                                <small class="">{{ product.product_name }}</small>
                                                                <td v-if="product.product_quantaty>=1"><span class="badge bg-success">Available({{product.product_quantaty}} pics)</span></td>
                                                                <td v-else=""><span class="badge bg-danger">Strock Out</span></td>
                                                            
                                                            </div>
                                                            </div>
                                                        </a>    
                                                    </div>  
                                                </div>
                                            </div>

                                        </div>
                                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                            <div class="card-body">
                                                <input type="text" v-model="getsearchTerm" class="form-control" placeholder="Search.." style="witth:50px;"><br><br>
                                                <div class="row container" style="padding:10px;">
                                                    
                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-6" v-for="singleproduct in singlefiltersearch" :key="singleproduct.id" >
                                                        <a href="#">
                                                            <div class="card" >
                                                            <img class="bg-soft-primary rounded" :src="singleproduct.patho" alt="profile" id="em_patho" style="width: 5rem; text-align:center;">
                                                            <div class="card-body">
                                                                <small class="">{{ singleproduct.product_name }}</small>
                                                                <td v-if="singleproduct.product_quantaty>=1"><span class="badge bg-success">Available({{singleproduct.product_quantaty}} pics)</span></td>
                                                                <td v-else=""><span class="badge bg-danger">Strock Out</span></td>
                                                            
                                                            </div>
                                                            </div>
                                                        </a>    
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
            products:[],
            categoryes:'',
            getProducts:[],
            searchTerm:'',
            getsearchTerm:'',
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
        }

    },
    methods:{
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
            .catch()
        },subProducts(id){
            axios.get('/api/getting/product/'+id)
            .then(({ data })=>{
                this.getProducts = data
            })
            .catch()

        }
    },

    mounted(){
        this.allProducts();
        this.allCategory();

    }
    
}
</script>

<style>
#em_patho{
   height: 100px;
   widows: 50px; 
}
</style>

