<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class stripeController extends Controller
{
    public function showform(){
        return view('paymentform');
    }
    public function payment(Request $request){
        $productname = 'apple';
        $productprice = 1000;
        

    }
    public function sucess(){
        return 'paymentdone';
    }
}