<template>

      <div class="conatiner-fluid content-inner mt-n5 py-0">
        
            
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body d-flex justify-content-between align-items-center">
                            <div class="card-title mb-0">
                                <h4 class="mb-0">Add New Employee</h4>
                            </div>
                            <div class="card-action">
                                
                                 <router-link  class="btn btn-info"  to="#" >
                                    <i class="fa fa-plus"></i>All Employee 
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

                                          <form>
                            <div class="form-group">
                                <label class="form-label" for="exampleInputText1">First Name</label>
                                <input type="text" class="form-control" id="exampleInputText1"  placeholder="Enter Name">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="exampleInputEmail3">Email Address</label>
                                <input type="email" class="form-control" id="exampleInputEmail3"  placeholder="Enter Email">
                            </div>
                            
                            <div class="form-group">
                                <label class="form-label" for="exampleInputphone">Address </label>
                                <input type="text" class="form-control" id="exampleInputphone" placeholder="Enter Address">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="exampleInputNumber1">Salary</label>
                                <input type="number" class="form-control" id="exampleInputNumber1" placeholder="Enter Salary">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="exampleInputNumber1">Jani nah</label>
                                <input type="text" class="form-control" id="exampleInputNumber1" placeholder="Enter Salary">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="exampleInputNumber1">NID Number</label>
                                <input type="number" class="form-control" id="exampleInputNumber1" placeholder="Enter NID Number">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="exampleInputdate">Date Input</label>
                                <input type="date" class="form-control" id="exampleInputdate" >
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="exampleInputmonth">Month Input</label>
                                <input type="month" class="form-control" id="exampleInputmonth" value="2019-12">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="exampleInputweek">Week Input</label>
                                <input type="week" class="form-control" id="exampleInputweek" value="2019-W46">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="exampleInputtime">Time Input</label>
                                <input type="time" class="form-control" id="exampleInputtime" value="13:45">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="exampleInputdatetime">Date and Time Input</label>
                                <input type="datetime-local" class="form-control" id="exampleInputdatetime" value="2019-12-19T13:45:00">
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="exampleFormControlTextarea1">Example textarea</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="submit" class="btn btn-danger">cancel</button>
                        </form>
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
            form:{
                name : null,
                email : null,
                password : null,
                confirm_password : null,
            },
            errors:{}
        }

    },
    
}
</script>

<style>

</style>

