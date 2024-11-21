<?php

namespace App\Http\Controllers;

use App\Models\Mobile;
use App\Models\Product;
use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CustomerController extends Controller
{
    public function add_customer(){
        
      
      //   $mobile->save();
      
    //   return response()->json(['message' => 'Customer added successfully']);
    
    $customer = new Customer();
    $customer->name = 'Farid';
    $customer->email = 'Farid@gmail.com';
    
    $customer->save();

    $mobile =  new Mobile();
    $mobile->model = 'LG1006';
    $mobile->customer_id = $customer->id;
    
    $mobile->save();


    $product = new Product();
    $product->brand = 'Iphone 15';
    $product->price = 100000;
    $product->mobile_id = $mobile->id;
    $product->customer_id = $customer->id;

   
    $product->save();
    
     
    // dd('hi');
     

    }

    public function show_mobile($id){
        $mobile = Customer::find($id)->mobile;
        //dd($mobile);
        return view('mobile',['mobile' => $mobile]);
      //  return  $mobile;
        //return response()->json(['message' => 'Mobile details', 'data' => $mobile]);
    }
}
