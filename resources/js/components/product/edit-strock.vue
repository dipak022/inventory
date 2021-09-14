<template>

      <div class="conatiner-fluid content-inner mt-n5 py-0">
        
            
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <div class="card-title mb-0">
                                <h4 class="mb-0">Product Strock Update</h4>
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

                                          <form @submit.prevent="strockUpdate" enctype="multipart/form-data">
                                           
                                            <div class="form-group">
                                                <label class="form-label" for="exampleInputEmail3">Strock Update</label>
                                                <input type="text" class="form-control" id="exampleInputEmail3"  placeholder="Product Name" v-model="form.product_quantaty">
                                                <small class="text-danger" v-if="errors.product_quantaty">{{ errors.product_quantaty[0] }}</small>
                                            </div>
                                            
                                           
                                            
                                            <button type="submit" class="btn btn-primary">Strock Update</button>
                                            
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
            
                product_quantaty : null,
            },
            errors:{},
           
        }

    },
    created(){
        let id = this.$route.params.id
         axios.get('/api/product/'+id)
         .then(({data}) => (this.form = data))
         .catch()
        

    },
    methods:{
        strockUpdate(){

            let id = this.$route.params.id
            axios.post('/api/strock/update/'+id,this.form)
            .then(()=>{
                Toast.fire({
                    icon: 'success',
                    title: 'Update  in successfully'
                })
                this.$router.push({ name : 'strock'})
            })
            .catch(error => this.errors = error.response.data.errors)

        }
      

    }
    
}
</script>

<style>

</style>

