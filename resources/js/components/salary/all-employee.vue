<template>

      <div class="conatiner-fluid content-inner mt-n5 py-0">
        
            
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <div class="card-title mb-0">
                                <h4 class="mb-0">Employee Selary Pay</h4>
                            </div>
                            <div class="card-action">
                                
                                 <router-link  class="btn btn-info"  to="/salary" >
                                    <i class="fa fa-plus"></i>Employee Selary Pay
                                </router-link>
                            </div>
                        </div>
                    </div>
                </div>
            </div>            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card  ">
                                <div class="card-body">
                                    <div id="calendar1" class="calendar-s">

                                       <div class="card-body px-0">
                                            <div class="table-responsive">
                                                <table id="user-list-table" class="table table-striped" role="grid" data-toggle="data-table">
                                                    <thead>
                                                        <tr class="ligth">
                                                        <th>Profile</th>
                                                        <th>Name</th>
                                                        <th>Contact</th>
                                                        <th>Email</th>
                                            
                                                        <th>Salary</th>
                                                        <th style="min-width: 100px">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr v-for="employee in employees" :key="employee.id">
                                                        <td class="text-center"><img class="bg-soft-primary rounded img-fluid avatar-40 me-3" :src="employee.patho" alt="profile" id="em_patho"></td>
                                                        <td>{{ employee.name }}</td>
                                                        <td>{{ employee.phone }}</td>
                                                        <td>{{ employee.email }}</td>
                                                        <td>{{ employee.salary }}</td>
                                                        <td>
                                                            <div class="flex align-items-center list-user-action">
                                                               
                                                                <router-link  class="btn btn-info"  :to="{name : 'pay.salary', params :{id:employee.id} }" >
                                                                    <i class="fa fa-plus"></i> Pay Salary
                                                                </router-link>
                                                               
                                                            </div>
                                                        </td>
                                                        </tr>
                                                        
                                                    </tbody>
                                                </table>
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
            employees:{}
        }

    },methods:{
        allEmployee(){
            axios.get('/api/employee/')
            .then(({ data })=>{
                this.employees = data
            })
            .catch()
        }
    },
    mounted(){
        this.allEmployee();

    }
    
}
</script>

<style>
#em_patho{
   height: 40px;
   widows: 40px; 
}
</style>

