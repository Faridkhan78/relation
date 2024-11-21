<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Mobile;
use Illuminate\Http\Request;

class MobileController extends Controller
{
    public function show_customer($id){
        $customer = Mobile::find($id)->customer;
        return view('customer',['customer' => $customer]);
        //return  $customer;
    }
}
