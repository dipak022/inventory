<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use DateTime;
class OrderController extends Controller
{
    public function todayOrder(){
        $date = date('d/m/Y');
        $order = DB::table('oders')
        ->join('customers','oders.customer_id','customers.id')
        ->where('oders.order_date',$date)
        ->select('customers.name','oders.*')
        ->orderBY('oders.id','DESC')->get();
        return response()->json($order);
    }

    public function OrderDetails($id){
        $orders = DB::table('oders')
        ->join('customers','oders.customer_id','customers.id')
        ->where('oders.id',$id)
        ->select('customers.name','customers.phone','customers.address','oders.*')
        ->first();
        return response()->json($orders);

        
    }

    public function OrderDetailsall($id){
        $details = DB::table('oder_details')
                   ->join('products','oder_details.product_id','products.id')
                   ->where('oder_details.order_id',$id)
                   ->select('products.product_name','products.product_code','products.patho','oder_details.*')
                   ->get();
                   return response()->json($details);

    }


    public function SearchOrderDate(Request $request){
        $ordate = $request->date;
        $newdate = new DateTime($ordate);
        $formateDate =  $newdate->format('d/m/Y');

        $orders = DB::table('oders')
        ->join('customers','oders.customer_id','customers.id')
        ->select('customers.name','customers.phone','customers.address','oders.*')
        ->where('oders.order_date',$formateDate)
        ->get();

        return response()->json($orders);

    }

    

    public function SearchOrderMonth(Request $request){
        $ormonth = $request->month;
        return response()->json($ormonth);

    }
}
