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

