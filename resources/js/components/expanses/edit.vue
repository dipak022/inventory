<template>

      <div class="conatiner-fluid content-inner mt-n5 py-0">
        
            
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <div class="card-title mb-0">
                                <h4 class="mb-0">Update Expanses</h4>
                            </div>
                            <div class="card-action">
                                
                                 <router-link  class="btn btn-info"  to="/expanses" >
                                    <i class="fa fa-plus"></i>All Expanses 
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

                                        <form @submit.prevent="expansesUpdate" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label class="form-label" for="exampleInputText1">Expanses Details</label>
                                                <input type="text" class="form-control" id="exampleInputText1"  placeholder="Enter Name" v-model="form.details">
                                                <small class="text-danger" v-if="errors.details">{{ errors.details[0] }}</small>
                                            </div>

                                            <div class="form-group">
                                                <label class="form-label" for="exampleInputText1">Expanses Amount</label>
                                                <input type="number" class="form-control" id="exampleInputText1"  placeholder="Enter Name" v-model="form.amount">
                                                <small class="text-danger" v-if="errors.amount">{{ errors.amount[0] }}</small>
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
                details : null,
                amount : null,
            },
            errors:{}
        }

    },
    created(){
        let id = this.$route.params.id
         axios.get('/api/expanses/'+id)
         .then(({data}) => (this.form = data))
         .catch()

    },
    methods:{
        expansesUpdate(){

            let id = this.$route.params.id
            axios.patch('/api/expanses/'+id,this.form)
            .then(()=>{
                Toast.fire({
                    icon: 'success',
                    title: 'Update  in successfully'
                })
                this.$router.push({ name : 'expanses'})
            })
            .catch(error => this.errors = error.response.data.errors)

        }

    }
    
}
</script>

<style>

</style>

