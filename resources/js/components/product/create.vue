<template>

      <div class="conatiner-fluid content-inner mt-n5 py-0">
        
            
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <div class="card-title mb-0">
                                <h4 class="mb-0">Add New Product</h4>
                            </div>
                            <div class="card-action">
                                
                                 <router-link  class="btn btn-info"  to="/product" >
                                    <i class="fa fa-plus"></i>All Product 
                                    </router-link>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card  ">
                                <div class="card-body">
                                    <div id="calendar1" class="calendar-s">

                                        <form @submit.prevent="productInsert" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label class="form-label" for="exampleInputText1">Select Category</label>
                                                
                                                <select class="form-control" v-model="form.category_id">
                                                    <option :value="category.id" v-for="category in categories" >{{ category.category_name }}</option>
                                                    
                                                </select> 
                                                <small class="text-danger" v-if="errors.category_id">{{ errors.category_id[0] }}</small>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label" for="exampleInputEmail3">Select Supplier</label>
                                                
                                               
                                                <select class="form-control" v-model="form.supplier_id">
                                                    <option v-bind:value="supplier.id" v-for="supplier in suppliers" >{{ supplier.name }}</option>
                                                </select>
                                                <small class="text-danger" v-if="errors.supplier_id">{{ errors.supplier_id[0] }}</small>
                                                
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label" for="exampleInputEmail3">Product Name</label>
                                                <input type="text" class="form-control" id="exampleInputEmail3"  placeholder="Product Name" v-model="form.product_name">
                                                <small class="text-danger" v-if="errors.product_name">{{ errors.product_name[0] }}</small>
                                            </div>
                                            
                                            
                                            

                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-level-group">
                                                        <label class="form-label" for="exampleInputdate">Product Code </label>   
                                                        <input type="text" class="form-control" id="exampleInputphone" placeholder="Product Code" v-model="form.product_code">
                                                        <small class="text-danger" v-if="errors.product_code">{{ errors.product_code[0] }}</small>
                                                        </div>
                                                    </div>  
                                                    <div class="col-md-6">
                                                        <div class="form-level-group">
                                                        <label class="form-label" for="exampleInputdate">Product Quantaty </label>   
                                                        <input type="text" class="form-control" id="exampleInputphone" placeholder="Product Quantaty" v-model="form.product_quantaty">
                                                        <small class="text-danger" v-if="errors.product_quantaty">{{ errors.product_quantaty[0] }}</small>
                                                        </div>
                                                    </div>   
                                                </div>   
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-level-group">
                                                        <label class="form-label" for="exampleInputdate">Baying Price  </label>   
                                                        <input type="text" class="form-control" id="exampleInputphone" placeholder="Baying Price" v-model="form.baying_price">
                                                        <small class="text-danger" v-if="errors.baying_price">{{ errors.baying_price[0] }}</small>
                                                        </div>
                                                    </div>  
                                                    <div class="col-md-6" >
                                                        <div class="form-level-group">
                                                        <label class="form-label" for="exampleInputdate">Selling Price </label>   
                                                        <input type="text" class="form-control" id="exampleInputphone" placeholder="Selling Price" v-model="form.selling_price">
                                                        <small class="text-danger" v-if="errors.selling_price">{{ errors.selling_price[0] }}</small>
                                                        </div>
                                                    </div>   
                                                </div>   
                                            </div>
                                            <div class="form-group">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-level-group">
                                                        <label class="form-label" for="exampleInputdate">Root  </label>   
                                                        <input type="text" class="form-control" id="exampleInputphone" placeholder="Product Root Price" v-model="form.root">
                                                        <small class="text-danger" v-if="errors.root">{{ errors.root[0] }}</small>
                                                        </div>
                                                    </div>  
                                                    <div class="col-md-6">
                                                        <div class="form-level-group">
                                                        <label class="form-label" for="exampleInputdate">Baying Date </label>   
                                                        <input type="date" class="form-control" id="exampleInputphone"  v-model="form.baying_date">
                                                        <small class="text-danger" v-if="errors.baying_date">{{ errors.baying_date[0] }}</small>
                                                        </div>
                                                    </div>   
                                                </div>   
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
                                                    <div class="col-md-6">
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
    </div>
        
      

</template>
<script>
export default {
    mounted(){
       if(! User.loggedIn()){
          this.$router.push({ name : '/'});
       }
    },
    data(){
        return {
            form:{
                category_id : null,
                supplier_id : null,
                product_name : null,
                product_code : null,
                baying_price : null,
                selling_price : null,
                baying_date : null,
                product_quantaty : null,
                root :null,
                patho : null,
                
            },
            errors:{},
            categories:{},
            suppliers:{},

        }

    },
    created(){
             axios.get('/api/category/')
             .then(({data})=>(this.categories = data))

              axios.get('/api/supplier/')
             .then(({data})=>(this.suppliers = data))

    },
    methods:{
       
        productInsert(){

            axios.post('/api/product/',this.form)
            .then(()=>{
                Toast.fire({
                    icon: 'success',
                    title: 'Product added successfully'
                })
                this.$router.push({ name : 'product'})
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
        

    }
    
}
</script>

<style>

</style>

