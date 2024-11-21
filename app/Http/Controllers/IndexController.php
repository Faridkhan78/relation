<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Mobile;

class IndexController extends Controller
{
    public function index($id){
        
        $customer = Customer::find($id);
        // var_dump($customer->name);
        // var_dump($customer->email);
        // var_dump($customer->mobile->model);

        return response()->json([
            'name' => $customer->name,
            'email' => $customer->email,
            'mobile_model' => $customer->mobile->model,
            'mobile_updated' => $customer->mobile->updated_at,
            'product_brand' => $customer->product->brand,
            'product_price' => $customer->product->price,
            'product_mobile_id' => $customer->product->mobile_id,
           
        ]);

        
        // $customer = Mobile::find($id)->customer;
        // dd($customer);

        // $mobile = Customer::find($id)->mobile;
        // dd($mobile);
      
    }
}
