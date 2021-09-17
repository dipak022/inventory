<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
class PosController extends Controller
{
    
    public function getProducts($id)
    {
        $product = DB::table('products')->where('category_id',$id)->get();
        return response()->json($product);
    }

    public function orderDone(Request $request){
        $data = array();
        $data['customer_id'] = $request->customer_id;
        $data['qty'] = $request->qty;
        $data['sub_total'] = $request->subtotal;
        $data['vat'] = $request->vat;
        $data['total'] = $request->total;
        $data['payby'] = $request->payby;
        $data['pay'] = $request->pay;
        $data['due'] = $request->due;
        $data['order_date'] = date('d/m/Y');
        $data['order_month'] = date('F');
        $data['order_year'] = date('Y');
        $order_id = DB::table('oders')->insertGetId($data);

        $contents = DB::table('pos')->get();
        $odata= array();
        foreach($contents as $content){
            $odata['order_id']=$order_id;
            $odata['product_id']=$content->pro_id;
            $odata['product_quentity']=$content->pro_quentity;
            $odata['product_price']=$content->pro_price;
            $odata['sub_total']=$content->sub_total;
            DB::table('oder_details')->insert($odata);
            DB::table('products')->where('id',$content->pro_id)->update(['product_quantaty'=>DB::raw('product_quantaty -'.$content->pro_quentity)]);

        }
        DB::table('pos')->delete();
        return response()->json("done ");

    }
}
