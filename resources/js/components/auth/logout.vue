
<template>

</template>
<script lang="ts">


export default ({
    created(){
       //User.loggedOut();
       localStorage.removeItem('token');
       localStorage.removeItem('user');
       Toast.fire({
            icon: 'success',
            title: 'Successfully Logout!'
        })

        this.$router.push({ name : '/'})
    }
})
</script>

<style>

</style>
