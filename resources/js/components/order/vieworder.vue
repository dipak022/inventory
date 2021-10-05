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
                        <div class="col-lg-6">
                            <div class="card  ">
                                <div class="card-body">
                                    <div id="calendar1" class="calendar-s">
                                        <div class="list-group" >
                                            <a href="#" class="list-group-item list-group-item-action active" style="text-align:center;">
                                                Customer Details
                                            </a>
                                            <a href="#" style="color:white;" class="list-group-item list-group-item-action">Name :{{ orders.name }}</a>
                                            <a href="#" style="color:white;" class="list-group-item list-group-item-action">Phone :{{ orders.phone }}</a>
                                            <a href="#" style="color:white;" class="list-group-item list-group-item-action">Address :{{ orders.address }}</a>
                                            <a href="#" style="color:white;" class="list-group-item list-group-item-action disabled">Date :{{ orders.order_date }}</a>
                                            <a href="#" style="color:white;" class="list-group-item list-group-item-action disabled">Quentity :{{ orders.qty }}</a>
                                            </div>

                                         
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card  ">
                                <div class="card-body">
                                    <div id="calendar1" class="calendar-s">
                                        <div class="list-group">
                                            <a href="#" class="list-group-item list-group-item-action active" style="text-align:center;">
                                                Product Information Details
                                            </a>
                                            <a href="#" style="color:white; " class="list-group-item list-group-item-action">Sub Total :{{ orders.sub_total }}</a>
                                            <a href="#" style="color:white;" class="list-group-item list-group-item-action">Vat :{{ orders.vat }}</a>
                                            <a href="#" style="color:white;" class="list-group-item list-group-item-action">Total :{{ orders.total }}</a>
                                            <a href="#" style="color:white;" class="list-group-item list-group-item-action disabled">Pay :{{ orders.pay }}</a>
                                             <a href="#" style="color:white;" class="list-group-item list-group-item-action disabled">Due :{{ orders.due }}</a>
                                            </div>

                                         
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
                                          
                                            <div class="table-responsive">
                                                <table id="user-list-table" class="table table-striped" role="grid">
                                                    <thead>
                                                        <tr class="ligth">
                                                        
                                                        <th>Name </th>     
                                                        <th>Code </th>    
                                                        <th>Image </th> 
                                                        <th>Quentity </th>        
                                                        <th>Unit Price </th>  
                                                        <th>Total </th>              
                                                        
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr v-for="detail in details" :key="detail.id">
                                                        
                                                        <td>{{ detail.product_name }}</td>
                                                         <td>{{ detail.product_code }}</td>
                                                         <td class="text-center"><img class="bg-soft-primary rounded img-fluid avatar-40 me-3" :src=" '/' +detail.patho" alt="profile" id="em_patho"></td>
                                                         <td>{{ detail.product_quentity }}</td>
                                                         <td>{{ detail.product_price }}</td>
                                                         <td>{{ detail.sub_total }}</td>
                                                        
                                                        
                                                        <td>
                                                            
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
        return {
            errors:{},
            orders:{},
            details:{},

        }

    },
    created(){

        let id = this.$route.params.id
         axios.get('/api/order/details/'+id)
         .then(({data}) => (this.orders = data))
         .catch()

        axios.get('/api/order/orderdetails/'+id)
         .then(({data}) => (this.details = data))
         .catch()

    },
    methods:{
        

    }
    
}
</script>

<style>
#em_patho{
   height: 40px;
   widows: 40px; 
}
</style>

