<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
Use DB;
class CartController extends Controller
{
    public function AddtoCart(Request $request,$id){
        
       
        $product = DB::table('products')->where('id',$id)->first();
        //$product_name = $data->product_name;
        $check = DB::table('pos')->where('pro_id',$id)->first();

        if($check){
            DB::table('pos')->where('pro_id',$id)->increment('pro_quentity');
            $product = DB::table('pos')->where('pro_id',$id)->first();
            $subtotal =$product->pro_quentity *$product-> pro_price;
            DB::table('pos')->where('pro_id',$id)->update(['sub_total'=>$subtotal]);
            return response()->json("done");
            
        }else{
            $data = array();
            $data['pro_id'] = $id;
            $data['pro_name'] = $product->product_name;
            $data['pro_quentity'] = 1;
            $data['pro_price'] = $product->selling_price;
            $data['sub_total'] = $product->selling_price;
            DB::table('pos')->insert($data);
            return response()->json("done");

        } 

    }

    public function CartProduct(){
        $cart =DB::table('pos')->get();
        return response()->json($cart);
    }

    public function removeCart($id){
        DB::table('pos')->where('id',$id)->delete();

    }

    public function Increment($id){

        $quentity =DB::table('pos')->where('id',$id)->increment('pro_quentity');
        $product = DB::table('pos')->where('id',$id)->first();

        $subtotal =$product->pro_quentity *$product-> pro_price;

        DB::table('pos')->where('id',$id)->update(['sub_total'=>$subtotal]);
        return response()->json("done");


    }
    public function Decrement($id){
        $quentity =DB::table('pos')->where('id',$id)->decrement('pro_quentity');
        $product = DB::table('pos')->where('id',$id)->first();

        $subtotal =$product->pro_quentity *$product->pro_price;

        DB::table('pos')->where('id',$id)->update(['sub_total'=>$subtotal]);
        return response()->json("done");
        
    }

    public function vats(){
       $done= DB::table('settings')->first();
       return response()->json($done);
    }
    
}
