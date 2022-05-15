<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Mobile;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function addCustomer()
    {
        $mobile = new Mobile();
        $mobile->model = 'iPhone 13';

        $customer = new Customer();
        $customer->name = 'Govind';
        $customer->save();
        $customer->mobile()->save($mobile);
    }
    public function showMobile($id)
    {
        $mobile =Customer::find($id)->mobile;
        return view('mobile',compact('mobile'));
    }
}
