<?php

namespace App\Http\Controllers;

use App\Models\Mobile;
use Illuminate\Http\Request;

class MobileController extends Controller
{
    public function showCustomer($id)
    {
        $customer =Mobile::find($id)->customer;
        return view('customer',compact('customer'));
    }
}
