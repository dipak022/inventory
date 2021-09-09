
<template>
    <div>

        <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header"><h3 class="text-center font-weight-light my-4">Forgate Password</h3></div>
                                <div class="card-body">
                                    <form>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="inputEmail" type="email" placeholder="name@example.com" />
                                            <label for="inputEmail">Exesting Email address</label>
                                        </div>
                                        
                                    </form>
                                </div>
                                <div class="card-footer text-center py-3">
                                    <div class="small">
                                       
                                        <router-link to="/register">Need an account? Sign up!</router-link>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

    </div>
</template>
<script lang="ts">


export default ({
    
})
</script>

<style>

</style>
