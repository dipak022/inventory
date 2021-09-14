<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Salaries;
use DB;
class SalariesController extends Controller
{
    public function updateStrock( Request $request, $id){

        $validated = $request->validate([
            
            'product_quantaty' => 'required',
            
        ]);

        $data=array();   
         $data['product_quantaty']=$request->product_quantaty;
         $done=DB::table('products')->where('id',$id)->update($data);

    }
}
