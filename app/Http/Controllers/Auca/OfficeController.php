<?php

namespace App\Http\Controllers\Auca;
use App\Http\Controllers\Controller;
use App\office;
use App\staff;
use Illuminate\Http\Request;


class OfficeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $offices=office::all();
        return view('auca/office.index', compact('offices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('auca/office.create');
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
            'location'=>'required',
            'open_time'=>'required',
            'close_time'=>'required'
        ]);
        $office = new office();
  
        $office->name= $request->input('name');
        $office->location= $request->input('location');
        $office->open_time = $request->input('open_time');
        $office->close_time = $request->input('close_time');
        $office->save(); 
        return redirect()->route('office.index')->with('info','office Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\office  $office
     * @return \Illuminate\Http\Response
     */
    public function show(office $office)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\office  $office
     * @return \Illuminate\Http\Response
     */
    public function edit($id,$staff_id=null)
    {
        //
        $staffs=null;
        if(!$staff_id){
            $staffs=staff::all();
        }
        $office = office::find($id);
        return view('auca/office.edit',['office'=> $office,'staff_id'=>$staff_id, 'staffs'=>$staffs]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\office  $office
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, office $office)
    {
        //
         $request->validate([
            'name'=>'required',
            'location'=>'required',
            'open_time'=>'required',
            'close_time'=>'required'
        ]);

        $office = office::find($request->input('id'));
        $office->name= $request->input('name');
        $office->location= $request->input('location');
        $office->open_time = $request->input('open_time');
        $office->close_time = $request->input('close_time');
        $office->header= $request->input('staff_id');
        $office->update(); 
        return redirect()->route('office.index')->with('info','office Updated Successfully'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\office  $office
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
          $office = office::find($id);
        //delete
        $office->delete();
        return redirect()->route('office.index');
    }
}
