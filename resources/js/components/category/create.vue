<template>

      <div class="conatiner-fluid content-inner mt-n5 py-0">
        
            
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <div class="card-title mb-0">
                                <h4 class="mb-0">Add New Category</h4>
                            </div>
                            <div class="card-action">
                                
                                 <router-link  class="btn btn-info"  to="/category" >
                                    <i class="fa fa-plus"></i>All Category 
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

                                        <form @submit.prevent="categoryInsert" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label class="form-label" for="exampleInputText1">Category Name</label>
                                                <input type="text" class="form-control" id="exampleInputText1"  placeholder="Enter Name" v-model="form.category_name">
                                                <small class="text-danger" v-if="errors.category_name">{{ errors.category_name[0] }}</small>
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
    created(){
       if(! User.loggedIn()){
          this.$router.push({ name : '/'});
       }
    },
    data(){
        return {
            form:{
                category_name : null,
              
                
            },
            errors:{}
        }

    },
    methods:{
        categoryInsert(){

            axios.post('/api/category/',this.form)
            .then(()=>{
                Toast.fire({
                    icon: 'success',
                    title: 'category added successfully'
                })
                this.$router.push({ name : 'category'})
            })
            .catch(error => this.errors = error.response.data.errors)

        },
     

    }
    
}
</script>

<style>

</style>

