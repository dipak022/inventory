<template>

      <div class="conatiner-fluid content-inner mt-n5 py-0">
        
            
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <div class="card-title mb-0">
                                <h4 class="mb-0">Order Details</h4>
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
            errors:{},
            orders:{},
            details:{},

        }

    },
    created(){

        let id = this.$route.params.id
         axios.get('/api/order/details/'+id)
         .then(({data}) => (this.details = data))
         .catch()
        //select category 
         axios.get('/api/category/')
            .then(({data})=>(this.categories = data))
        //select supplier
         axios.get('/api/supplier/')
           .then(({data})=>(this.suppliers = data))

    },
    methods:{
        

    }
    
}
</script>

<style>

</style>

