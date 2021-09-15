<template>

      <div class="conatiner-fluid content-inner mt-n5 py-0">
        
            
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <div class="card-title mb-0">
                                <h4 class="mb-0">All Selary </h4>
                            </div>
                            <div class="card-action">
                                
                                 <router-link  class="btn btn-info"  to="/given-salary" >
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
                                                        <th>Month</th>
                                                      
                                                        <th style="min-width: 100px">Details</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr v-for="salary in salarys" :key="salary.salary_month">
                                                       
                                                        <td>{{ salary.salary_month }}</td>
                                                        
                                                        <td>
                                                            <div class="flex align-items-center list-user-action">
                                                               
                                                                <router-link  class="btn btn-info"  :to="{name : 'view-salary', params :{id:salary.salary_month} }" >
                                                                    <i class="fa fa-plus"></i> View Salary
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
            salarys:{}
        }

    },methods:{
        allSalary(){
            axios.get('/api/salary/')
            .then(({ data })=>{
                this.salarys = data
            })
            .catch()
        }
    },
    mounted(){
        this.allSalary();

    }
    
}
</script>

<style>
#em_patho{
   height: 40px;
   widows: 40px; 
}
</style>

