<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Mobile;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index($id)
    {
        // $customer = Customer::find($id);
        // dd($customer->name);
        // dd($customer->mobile->model);

        // $customer = Mobile::find($id)->customer;
        // dd($customer);

        $mobile = Customer::find($id)->mobile;
        dd($mobile);
    }
}
