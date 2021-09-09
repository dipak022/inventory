import Token from "./Token";
import appStroage from "./appStroage";


class User{
       
    responseAfterLogin(res){

        const access_token = res.data.access_token;
        const username = res.data.name;
        if(Token.isValid(access_token)){

            appStroage.store(access_token,username)

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

            const payload = Token.payload(localStorage.getItem('token'));
            return payload.sub;

        }
        return false;
    }


}

export default User = new User();

