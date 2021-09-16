<template>

      <div class="conatiner-fluid content-inner mt-n5 py-0">
        
            
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <div class="card-title mb-0">
                                <h4 class="mb-0">Employee Selary Details</h4>
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
                                           <label>Search data :</label>
                                            <input type="text" v-model="searchTerm" class="float-right"><br><br>
                                            <div class="table-responsive">
                                                <table id="user-list-table" class="table table-striped" role="grid">
                                                    <thead>
                                                        <tr class="ligth">
                                                        <th>Name</th>
                                                        <th>Month</th>
                                                        <th>Date</th>
                                                        <th>Amount</th>
                                                        <th style="min-width: 100px">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr v-for="salary in filtersearch" :key="salary.id">
                                                        
                                                        <td>{{ salary.name }}</td>
                                                        <td>{{ salary.salary_month }}</td>
                                                        <td>{{ salary.salary_date }}</td>
                                                        <td>{{ salary.amounts }}</td>
                                                        <td>
                                                            <div class="flex align-items-center list-user-action">

                                                            <router-link class="btn btn-sm btn-icon btn-warning" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" :to="{name : 'edit.salary', params :{id:salary.id} }">
                                                                <span class="btn-inner">
                                                                <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M11.4925 2.78906H7.75349C4.67849 2.78906 2.75049 4.96606 2.75049 8.04806V16.3621C2.75049 19.4441 4.66949 21.6211 7.75349 21.6211H16.5775C19.6625 21.6211 21.5815 19.4441 21.5815 16.3621V12.3341" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M8.82812 10.921L16.3011 3.44799C17.2321 2.51799 18.7411 2.51799 19.6721 3.44799L20.8891 4.66499C21.8201 5.59599 21.8201 7.10599 20.8891 8.03599L13.3801 15.545C12.9731 15.952 12.4211 16.181 11.8451 16.181H8.09912L8.19312 12.401C8.20712 11.845 8.43412 11.315 8.82812 10.921Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                    <path d="M15.1655 4.60254L19.7315 9.16854" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                </svg>
                                                                </span>
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
            salarys:[],
             searchTerm:'',
        }

    },
    computed: {
        filtersearch(){
           return this.salarys.filter(salary =>{
              return salary.salary_month.match(this.searchTerm) 
            })
        }

    },
    methods:{
        viewSalary(){
            let id = this.$route.params.id
            axios.get('/api/salary/view/'+id)
            
            .then(({ data })=>{
                this.salarys = data
            })
            .catch(error => this.errors = error.response.data.errors)
        }
    },
    mounted(){
        this.viewSalary();

    }
    
}
</script>

<style>
#em_patho{
   height: 40px;
   widows: 40px; 
}
</style>

