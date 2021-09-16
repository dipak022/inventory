<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Salaries;
use DB;
class SalariesController extends Controller
{

    public function paid(Request $request, $id){
        $validated = $request->validate([
            'salary_month' => 'required',
        ]);
        $data =array();
        $check = DB::table('salaries')->where('employee_id',$id)->where('salary_month',$request->salary_month)->first();
        if($check){
            return response()->json("Sallary Already Paid");

        }else{
            $data['employee_id']=$id;
            $data['amounts']=$request->salary;
            $data['salary_date']=date('d/m/Y');
            $data['salary_month']=$request->salary_month;
            $data['salary_year']=date('Y');
            DB::table('salaries')->insert($data);

        }
        
        

    }

    public function AllSalary(){
        $allsalaey =DB::table('salaries')->select('salary_month')->groupBy('salary_month')->get();
        return response()->json($allsalaey);

    }


    public function viewSalaey($id){

        $month = $id;
        $view =DB::table('salaries')
            ->join('employees','salaries.employee_id','employees.id')
            ->select('employees.name','salaries.*')
            ->where('salaries.salary_month',$month)
            ->get();

        return response()->json($view);
       
    }

    public function editSalaey($id){
       
        $view =DB::table('salaries')
            ->join('employees','salaries.employee_id','employees.id')
            ->select('employees.name','employees.email','employees.phone','salaries.*')
            ->where('salaries.id',$id)
            ->first();
        return response()->json($view);

    }

    public function UpdateSalaey(Request $request, $id){
        $data = array();
        $data['employee_id']=$request->employee_id;
        $data['amounts']=$request->amounts;
        $data['salary_date']=date('d/m/Y');
        $data['salary_month']=$request->salary_month;
        $data['salary_year']=date('Y');
        $done=DB::table('salaries')->where('id',$id)->update($data);

    }














    public function updateStrock(Request $request, $id){

        $validated = $request->validate([
            
            'product_quantaty' => 'required',
            
        ]);

        $data=array();   
         $data['product_quantaty']=$request->product_quantaty;
         $done=DB::table('products')->where('id',$id)->update($data);

    }
}
