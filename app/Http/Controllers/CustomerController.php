<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customers;


class CustomerController extends Controller
{
    public function get_all_customers(){
        $customers = Customers::with('project')->get();
        return view('dashboard', compact('customers'));
    }
}
