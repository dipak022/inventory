<template>

      <div class="conatiner-fluid content-inner mt-n5 py-0">
        
            
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <div class="card-title mb-0">
                                <h4 class="mb-0">Add New Supplier</h4>
                            </div>
                            <div class="card-action">
                                
                                 <router-link  class="btn btn-info"  to="/supplier" >
                                    <i class="fa fa-plus"></i>All Supplier 
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

                                        <form @submit.prevent="supplierUpdate" enctype="multipart/form-data">
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
                                                <label class="form-label" for="exampleInputNumber1">Shop name</label>
                                                <input type="text" class="form-control" id="exampleInputNumber1" placeholder="Enter Shop name" v-model="form.shop_name">
                                                <small class="text-danger" v-if="errors.shop_name">{{ errors.shop_name[0] }}</small>
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
                                            
                                            <button type="submit" class="btn btn-primary">Update</button>
                                            
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
                name : null,
                email : null,
                phone : null,
                shop_name : null,
                address : null,
                patho : null,
                newpatho : null,
                
            },
            errors:{}
        }

    },
    created(){
        let id = this.$route.params.id
         axios.get('/api/supplier/'+id)
         .then(({data}) => (this.form = data))
         .catch()

    },
    methods:{
        supplierUpdate(){

            let id = this.$route.params.id
            axios.patch('/api/supplier/'+id,this.form)
            .then(()=>{
                Toast.fire({
                    icon: 'success',
                    title: 'Update  in successfully'
                })
                this.$router.push({ name : 'supplier'})
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
                   this.form.newpatho = event.target.result
               }
               
              reader.readAsDataURL(file);
            }
              

        }

    }
    
}
</script>

<style>

</style>

