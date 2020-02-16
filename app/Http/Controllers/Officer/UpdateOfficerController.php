<?php

namespace App\Http\Controllers\Officer;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use DB;
use Auth;
use App\office;

class UpdateOfficerController extends Controller
{
    //
    public function viewOffice()
    {
        //->where('header', Auth::guard('officer')->user()->id)
        $offices=DB::table('offices')->where('header', Auth::guard('officer')->user()->serial_no)->get();
        return view('officer/offices.index', compact('offices'));
    }


      public function editOffice($id)
    {
        //
        $office = office::find($id);
        return view('officer/offices.edit',['office'=> $office]);

    }

       public function updateOffice(Request $request)
    {
        //
         //
         $request->validate([
            'status'=>'required',

           
        ]);

        $office = office::find($request->input('id'));
        $office->status= $request->input('status');
        $office->save(); 
        return redirect()->route('offices.index')->with('info','office Updated Successfully');
    }
}
