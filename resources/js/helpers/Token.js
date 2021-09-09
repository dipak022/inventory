class Token {


    isValid(token){
        const paylpad = this.paylpad(token);

        if(paylpad){

            return paylpad.iss == "http://127.0.0.1:8000/api/auth/login" || "http://127.0.0.1:8000/api/auth/register" ? true : false;

        }

        return false;
    }

    paylpad(token){
        const paylpad = token.split('.')[1];
        return this.decode(paylpad);
    }


    decode(paylpad){

        return JSON.parse(atob(paylpad));

    }
    
}
export default Token = new Token();