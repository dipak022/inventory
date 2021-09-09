class Token {


    isValid(token){
        const paylpad = this.paylpad(token);

        if(paylpad){

            return paylpad.iss == "http://127.0.0.1:8000/" || "http://127.0.0.1:8000/register" ? true : false;

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