import Token from "./Token";
import appStroage from "./appStroage";


class User{
       
    responseAfterLogin(response){

        const access_token = response.data.access_token;
        const user_name = response.data.name;
        if(Token.isValid(access_token)){

            appStroage.store(access_token,user_name)

        }

    }
   // jodi token thake 
    hasToken(){
        const strogeToken = localStorage.getItem('token');
        if(strogeToken){
            return Token.isValid(strogeToken) ? true : false;
        }

        return false;
    }

    // login user 

    loggedIn(){
        return this.hasToken();
    }

    loggedOut(){
        appStroage.clear();
        window.location = '/';
    }

    // user name niye asha 

    name(){
        if(this.loggedIn()){
            return localStorage.getItem('user');
        }
    }

    // user id niye asha 

    id(){
        if(this.loggedIn()){

            const paylpad = Token.paylpad(localStorage.getItem('token'));
            return paylpad.sub;

        }
        return false;
    }


}

export default User = new User();

