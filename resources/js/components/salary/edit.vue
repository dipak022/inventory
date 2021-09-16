<template>

      <div class="conatiner-fluid content-inner mt-n5 py-0">
        
            
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <div class="card-title mb-0">
                                <h4 class="mb-0"> Salary Update</h4>
                            </div>
                            <div class="card-action">
                                
                                 <router-link  class="btn btn-info"  to="/employee" >
                                    <i class="fa fa-plus"></i>All Employee 
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

                                        <form @submit.prevent="Salaryupdate" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label class="form-label" for="exampleInputText1">First Name</label>
                                                <input type="text" class="form-control" id="exampleInputText1"  placeholder="Enter Name" v-model="form.name">
                                                <small class="text-danger" v-if="errors.name">{{ errors.name[0] }}</small>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label" for="exampleInputEmail3">Email Address</label>
                                                <input type="email" class="form-control" id="exampleInputEmail3"  placeholder="Enter Email" v-model="form.email">
                                                <small class="text-danger" v-if="errors.email">{{ errors.email[0] }}</small>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label class="form-label" for="exampleInputNumber1">Salary</label>
                                                <input type="number" class="form-control" id="exampleInputNumber1" placeholder="Enter Salary" v-model="form.amounts">
                                                <small class="text-danger" v-if="errors.amounts">{{ errors.amounts[0] }}</small>
                                            </div>
                                            
                                            <div class="form-group">
                                                <label class="form-label" for="exampleInputText1">Select Month</label>
                                                
                                                <select class="form-control" v-model="form.salary_month">
                                                    <option value="January">January</option>
                                                    <option value="February">February</option>
                                                    <option value="March">March</option>
                                                    <option value="April">April</option>
                                                    <option value="May">May</option>
                                                    <option value="June">June</option>
                                                    <option value="July">July</option>
                                                    <option value="August">August</option>
                                                    <option value="September">September</option>
                                                    <option value="October">October</option>
                                                    <option value="November">November</option>
                                                    <option value="December">December</option>

                                                    
                                                </select> 
                                                <small class="text-danger" v-if="errors.salary_month">{{ errors.salary_month[0] }}</small>
                                            </div>
                                            <input type="hidden" class="form-control" id="exampleInputNumber1"  v-model="form.employee_id">
                                            
                                            
                                           
                                            
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
                salary : null,
                salary_month : null,
                employee_id : null,

            },
            errors:{}
        }

    },
    created(){
        let id = this.$route.params.id
         axios.get('/api/edit/salary/'+id)
         .then(({data}) => (this.form = data))
         .catch()

    },
    methods:{
        Salaryupdate(){

            let id = this.$route.params.id
            axios.post('/api/salary/update/'+id,this.form)
            .then(()=>{
                Toast.fire({
                    icon: 'success',
                    title: 'Update  in successfully'
                })
                this.$router.push({ name : 'given-salary'})
            })
            .catch(error => this.errors = error.response.data.errors)

        }

    }
    
}
</script>

<style>

</style>

 