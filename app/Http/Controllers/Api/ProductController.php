<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use DB;
use Image;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$product= Product::all();
        
        $product = DB::table('products')
                   ->join('categories','products.category_id','categories.id')
                   ->join('suppliers','products.supplier_id','suppliers.id')
                   ->select('categories.category_name','suppliers.name','products.*')
                   ->orderBy('products.id','DESC')
                   ->get();
        return response()->json($product);           
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'category_id' => 'required',
            'supplier_id' => 'required',
            'product_code' => 'required | unique:products',
            'product_name' => 'required',
            'baying_price' => 'required',
            'selling_price' => 'required',
            'root' => 'required',
            'baying_date' => 'required',
            'product_quantaty' => 'required',
            
        ]);

        

        if($request->patho){

            $image = $request->patho;
            $position = strpos($image,';');
            $sub = substr($image, 0 , $position);
            $ext = explode('/',$sub)[1];
            //return $ext;
            $name = time().".".$ext;
            $patho = Image::make($image)->resize(240,200);
            $upload_path = "backend/product/";
            $image_url = $upload_path.$name;
            $patho->save($image_url);

            $product = new Product;
            $product->category_id = $request->category_id;
            $product->supplier_id = $request->supplier_id;
            $product->product_code = $request->product_code;
            $product->product_name = $request->product_name;
            $product->baying_price = $request->baying_price;
            $product->selling_price = $request->selling_price;
            $product->root = $request->root;
            $product->baying_date = $request->baying_date;
            $product->product_quantaty = $request->product_quantaty;
        
            $product->patho = $image_url;
            $product->save();


        }else{

            $product = new Product;
            $product->category_id = $request->category_id;
            $product->supplier_id = $request->supplier_id;
            $product->product_code = $request->product_code;
            $product->product_name = $request->product_name;
            $product->baying_price = $request->baying_price;
            $product->selling_price = $request->selling_price;
            $product->root = $request->root;
            $product->baying_date = $request->baying_date;
            $product->product_quantaty = $request->product_quantaty;
            $product->save();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = DB::table('products')->where('id',$id)->first();
        return response()->json($product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {


         $data=array();   
         $data['supplier_id']=$request->supplier_id;
         $data['category_id']=$request->category_id;
         $data['product_code']=$request->product_code;
         $data['product_name']=$request->product_name;
         $data['baying_price']=$request->baying_price;
         $data['selling_price']=$request->selling_price;
         $data['root']=$request->root;
         $data['baying_date']=$request->baying_date;
         $data['product_quantaty']=$request->product_quantaty;
        
         $image = $request->newpatho;
         if($image){
            
            $position = strpos($image,';');
            $sub = substr($image, 0 , $position);
            $ext = explode('/',$sub)[1];
            //return $ext;
            $name = time().".".$ext;
            $patho = Image::make($image)->resize(240,200);
            $upload_path = "backend/product/";
            $image_url = $upload_path.$name;
            $success= $patho->save($image_url);
            if($success){
                $data['patho']=$image_url;
                $product = DB::table('products')->where('id',$id)->first();
                $image_path = $product->patho;
                unlink($image_path);
                $done=DB::table('products')->where('id',$id)->update($data);

            }
         }else{
            $old_patho = $request->patho;
            $data['patho']=$old_patho;
            $done=DB::table('products')->where('id',$id)->update($data);

         }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = DB::table('products')->where('id',$id)->first();
        $patho = $product->patho;
        if($patho){
            unlink($patho);
            DB::table('products')->where('id',$id)->delete();
        }
        else{
            DB::table('products')->where('id',$id)->delete();
        }
    }
}
