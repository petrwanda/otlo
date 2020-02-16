<?php

namespace App\Http\Controllers\Officer;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\staff;

class UpdateStaffController extends Controller
{
       public function viewStaff()
    {
        //
        $staffs=DB::table('staff')->where('serial_no', Auth::guard('officer')->user()->serial_no)->get();
        return view('officer/staffs.index', compact('staffs'));
    }

      public function editStaff($id)
    {
        //
        $staff = staff::find($id);
        return view('officer/staffs.edit',['staff'=> $staff]);

    }

     public function updateStaff(Request $request, staff $staff)
    {
        //
         //
         $request->validate([
            'status'=>'required',

           
        ]);

        $staff = staff::find($request->input('id'));
        $staff->status= $request->input('status');
        $staff->save(); 
        return redirect()->route('staffs.index')->with('info','staff Updated Successfully');
    }
}
