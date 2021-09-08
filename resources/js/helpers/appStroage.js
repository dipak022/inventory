class appStroage{

     storeToken(token){
         localStorage.setItem('token',token);
     }

     storeUser(user){
        localStorage.setItem('user',user);
     }

     store(){
         this.storeToken('token',token);
         this.storeUser('user',user);
     }

     clear(){
         localStorage.removeItem('token');
         localStorage.removeItem('user');
     }

     getToken(){
        localStorage.getItem('token');
     }

     getUser(){
        localStorage.getItem('user');
     }





}

export default appStroage = new appStroage();