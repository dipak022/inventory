<template>

      <div class="conatiner-fluid content-inner mt-n5 py-0">
        
            
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <div class="card-title mb-0">
                                <h4 class="mb-0">All  Employee</h4>
                            </div>
                            <div class="card-action">
                                
                                 <router-link  class="btn btn-info"  to="/store-employee" >
                                    <i class="fa fa-plus"></i>Add Employee 
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
                                                        <th>Profile</th>
                                                        <th>Name</th>
                                                        <th>Contact</th>
                                                        <th>Email</th>
                                                        <th>address</th>
                                                        <th>Salary</th>
                                                        <th>Nid Number</th>
                                                        <th>Join Date</th>
                                                        <th style="min-width: 100px">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr v-for="employee in filtersearch" :key="employee.id">
                                                        <td class="text-center"><img class="bg-soft-primary rounded img-fluid avatar-40 me-3" :src="employee.patho" alt="profile" id="em_patho"></td>
                                                        <td>{{ employee.name }}</td>
                                                        <td>{{ employee.phone }}</td>
                                                        <td>{{ employee.email }}</td>
                                                        <td>{{ employee.address }}</td>
                                                        <td>{{ employee.salary }}</td>
                                                        <td>{{ employee.nid }}</td>
                                                        <td>{{ employee.joining_date }}</td>
                                                        
                                                        <td>
                                                            <div class="flex align-items-center list-user-action">
                                                                
                                                                <router-link class="btn btn-sm btn-icon btn-warning" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" :to="{name : 'edit.employee', params :{id:employee.id} }">
                                                                    <span class="btn-inner">
                                                                    <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M11.4925 2.78906H7.75349C4.67849 2.78906 2.75049 4.96606 2.75049 8.04806V16.3621C2.75049 19.4441 4.66949 21.6211 7.75349 21.6211H16.5775C19.6625 21.6211 21.5815 19.4441 21.5815 16.3621V12.3341" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M8.82812 10.921L16.3011 3.44799C17.2321 2.51799 18.7411 2.51799 19.6721 3.44799L20.8891 4.66499C21.8201 5.59599 21.8201 7.10599 20.8891 8.03599L13.3801 15.545C12.9731 15.952 12.4211 16.181 11.8451 16.181H8.09912L8.19312 12.401C8.20712 11.845 8.43412 11.315 8.82812 10.921Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                        <path d="M15.1655 4.60254L19.7315 9.16854" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                    </svg>
                                                                    </span>
                                                                </router-link>
                                                                <a class="btn btn-sm btn-icon btn-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" @click="deleteEmployee(employee.id)">
                                                                    <span class="btn-inner">
                                                                    <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="currentColor">
                                                                        <path d="M19.3248 9.46826C19.3248 9.46826 18.7818 16.2033 18.4668 19.0403C18.3168 20.3953 17.4798 21.1893 16.1088 21.2143C13.4998 21.2613 10.8878 21.2643 8.27979 21.2093C6.96079 21.1823 6.13779 20.3783 5.99079 19.0473C5.67379 16.1853 5.13379 9.46826 5.13379 9.46826" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                        <path d="M20.708 6.23975H3.75" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                        <path d="M17.4406 6.23973C16.6556 6.23973 15.9796 5.68473 15.8256 4.91573L15.5826 3.69973C15.4326 3.13873 14.9246 2.75073 14.3456 2.75073H10.1126C9.53358 2.75073 9.02558 3.13873 8.87558 3.69973L8.63258 4.91573C8.47858 5.68473 7.80258 6.23973 7.01758 6.23973" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                    </svg>
                                                                    </span>
                                                                </a>
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
    mounted(){
       if(! User.loggedIn()){
          this.$router.push({ name : '/'});
       }
    },
    data(){
        return{
            employees: [],
            searchTerm:'',
        }

    },computed: {
        filtersearch(){
           return this.employees.filter(employee =>{
              return employee.phone.match(this.searchTerm)
            })
        }

    },methods:{
        allEmployee(){
            axios.get('/api/employee/')
            .then(({ data })=>{
                this.employees = data
            })
            .catch()
        },
        deleteEmployee(id){
            Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
            if (result.value) {
                axios.delete('/api/employee/'+id)
                .then(()=>{
                    this.employees =this.employees.filter(employee =>{
                        return employee.id != id;

                    })
                })
                .catch(()=>{
                    this.$router.push({ name : 'employee'})
                })
                Swal.fire(
                'Deleted!',
                'Your file has been deleted.',
                'success'
                )
            }
            })

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

