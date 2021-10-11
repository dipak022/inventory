<template>

      <div class="conatiner-fluid content-inner mt-n5 py-0">
        
            
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <div class="card-title mb-0">
                                <h4 class="mb-0">Search Order</h4>
                            </div>
                            <div class="card-action">
                                
                                 <router-link  class="btn btn-info"  to="/order" >
                                    <i class="fa fa-plus"></i>Today Order 
                                    </router-link>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card  ">
                                <div class="card-body">
                                    <div id="calendar1" class="calendar-s">

                                        <form @submit.prevent="SearchDate" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label class="form-label" for="exampleInputText1">Serch By Date </label>
                                                <input type="date" class="form-control" id="exampleInputText1"   required v-model="date">
                                                
                                            </div>
                                            
                                            <button type="submit" class="btn btn-primary">Search</button>
                                            
                                    </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="card  ">
                                <div class="card-body">
                                    <div id="calendar1" class="calendar-s">

                                        <form @submit.prevent="SearchMonth" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label class="form-label" for="exampleInputText1">Month Name</label>
                                                <select class="form-control" v-model="month">
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
                                            </div>
                                            
                                            <button type="submit" class="btn btn-primary">Search</button>
                                            
                                    </form>
                                    </div>
                                </div>
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
                                       <div class="card-body px-0">
                                           <label>Search data :</label>
                                            <input type="text" v-model="searchTerm" class="float-right"><br><br>
                                            <div class="table-responsive">
                                                <table id="user-list-table" class="table table-striped" role="grid">
                                                    <thead>
                                                        <tr class="ligth">
                                                        
                                                        <th>Name </th> 
                                                        <th>Quantaty </th>      
                                                        <th>Sub Total  </th>    
                                                        <th>Vat </th> 
                                                        <th>Total </th> 
                                                        <th>Pay </th> 
                                                        <th>Due </th>                    
                                                        <th style="min-width: 100px">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr v-for="order in orders" :key="order.id">
                                                        
                                                        <td>{{ order.name }}</td>
                                                        <td>{{ order.qty }}</td>
                                                         <td>{{ order.sub_total }}</td>
                                                         <td>{{ order.vat }}</td>
                                                         <td>{{ order.total }}</td>
                                                         <td>{{ order.pay }}</td>
                                                         <td>{{ order.due }}</td>
                                                        
                                                        
                                                        <td>
                                                            <div class="flex align-items-center list-user-action">
                                                                
                                                                <router-link class="btn btn-sm btn-icon btn-success" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit" :to="{name : 'view.order', params :{id:order.id} }">
                                                                    <span class="btn-inner">
                                                                    <svg width="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <path d="M11.4925 2.78906H7.75349C4.67849 2.78906 2.75049 4.96606 2.75049 8.04806V16.3621C2.75049 19.4441 4.66949 21.6211 7.75349 21.6211H16.5775C19.6625 21.6211 21.5815 19.4441 21.5815 16.3621V12.3341" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M8.82812 10.921L16.3011 3.44799C17.2321 2.51799 18.7411 2.51799 19.6721 3.44799L20.8891 4.66499C21.8201 5.59599 21.8201 7.10599 20.8891 8.03599L13.3801 15.545C12.9731 15.952 12.4211 16.181 11.8451 16.181H8.09912L8.19312 12.401C8.20712 11.845 8.43412 11.315 8.82812 10.921Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                        <path d="M15.1655 4.60254L19.7315 9.16854" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                                                    </svg>
                                                                    </span>
                                                                </router-link>
                                                                <a class="btn btn-sm btn-icon btn-danger" data-toggle="tooltip" data-placement="top" title="" data-original-title="Delete" @click="deletEexpanse(expanse.id)">
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
    created(){
       if(! User.loggedIn()){
          this.$router.push({ name : '/'});
       }
    },
    data(){
        return {
            
            date:'',
            month:'',
            orders :{},
            
        }

    },
    methods:{
        SearchDate(){
            var data ={data:this.data}
            axios.post('/api/search/order/',data)
            .then(({ data })=>{
                this.orders = data
            })
           

        },
        SearchMonth(){
             var month ={month:this.month}
            axios.post('/api/search/month/',month)
            .then(()=>{
                
            })
            .catch(error => this.errors = error.response.data.errors)

        },
     

    }
    
}
</script>

<style>

</style>

