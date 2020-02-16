<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class customerController extends Controller
{
    //
     public function viewOfficeCustomer()
    {
       
        $offices=DB::table('offices')->get();
        return view('customer.office', compact('offices'));
    }
    public function viewStaffCustomer()
    {
        //
        $staffs=DB::table('staff')->get();
        return view('customer.staff', compact('staffs'));
    }

     public function viewServiceCustomer()
    {
        //
        $services=DB::table('services')->get();
        return view('customer.service', compact('services'));
    }
}
