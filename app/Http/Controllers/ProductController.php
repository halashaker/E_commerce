<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\EmployeeExport;

//use Excel;

class ProductController extends Controller
{
    public function show_by_category($id)
    {   
     $products=Product::select('id','name','image')->where('category_id',$id)->get();  
     if(isset($products))
     {
       $response['data']=$products;
       $response['message']="success";
       $response['status_code']=200;
       return response()->json($response,200);
     }
     else if (!isset($products))
     {
       $response['data']=$products;
       $response['message']="error not found";
       $response['status_code']=404;
       return response()->json($products,404);
     }
    } 
    public function vote(Request $request)
    {

       $product=Product::where('id',$request->product_id)->first();
       $product->vote_count=$product->vote_count+$request->vote;      
       $product->save();
        return $product;
    }

    public function show_by_date(Request $request)
    {   //$date = $mytime =now();
        $date = date($request->date);
        //$date = date(date('Y-m-d', strtotime($date)));
        $mo=\Carbon\Carbon::parse($date)->format('m');
        $da=\Carbon\Carbon::parse($date)->format('d');
        $ye=\Carbon\Carbon::parse($date)->format('Y');
        //return $ye;
        // if($mo==4)
        // $mo=12;
        // else if($mo==3)
        // $mo=11;
        // else if($mo==2)
        // $mo=10;
        // else if($mo==1)
        // $mo=9;
        // else
        // $mo=$mo-4;

        $products = Product::join("stocks", "stocks.product_id", "=","products.id")
        ->whereYear('stocks.date', $ye)
        ->whereMonth('stocks.date', $mo)->whereDay('stocks.date', $da)
        ->get(array(DB::raw('products.*')));
        if(isset($products))
     {
       $response['data']=$products;
       $response['message']="success";
       $response['status_code']=200;
       return response()->json($response,200);
     }
    

    }
    public function Export_into_exel()
    {
        return Excel::download(new EmployeeExport,'product.csv');
    }

}