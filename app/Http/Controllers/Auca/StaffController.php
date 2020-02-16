<?php

namespace App\Http\Controllers\Auca;
use App\Http\Controllers\Controller;
use App\office;
use App\staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $staffs=staff::all();
        return view('auca/staff.index', compact('staffs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($office_id=null)
    { 
        //
        $offices=null;
        if(!$office_id){
            $offices=office::all();
        }
         return view('auca/staff.create',['office_id'=>$office_id, 'offices'=>$offices]);

    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
         $request->validate([
            'name'=>'required',
            'office_id'=>'required',
            'serial_no'=>'required',
            'phone'=>'required',
        ]);

        $staff = new staff();
        $staff->serial_no= $request->input('serial_no');
        $staff->name= $request->input('name');
        $staff->office_id= $request->input('office_id');
        $staff->phone= $request->input('phone');
        $staff->save(); 
        return redirect()->route('staff.index')->with('info','staff Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function show(staff $staff)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function edit($id,$office_id=null)
    {
        //
        $offices=null;
        if(!$office_id){
            $offices=office::all();
        }
        
        $staff = staff::find($id);
        return view('auca/staff.edit',['staff'=> $staff ,'office_id'=>$office_id, 'offices'=>$offices]);

    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, staff $staff)
    {
        //
         //
         $request->validate([
            'name'=>'required',
            'office_id'=>'required',
            'serial_no'=>'required',
            'phone'=>'required',
        ]);

        $staff = staff::find($request->input('id'));
        $staff->serial_no= $request->input('serial_no');
        $staff->name= $request->input('name');
        $staff->office_id= $request->input('office_id');
        $staff->phone= $request->input('phone');
        $staff->save(); 
        return redirect()->route('staff.index')->with('info','staff Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
         $staff = staff::find($id);
        //delete
        $staff->delete();
        return redirect()->route('staff.index');
    }
}
