<?php

namespace App\Http\Controllers\Auca;
use App\Http\Controllers\Controller;
use App\service;
use App\office;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $services=service::all();
        return view('auca/service.index', compact('services'));
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
         return view('auca/service.create',['office_id'=>$office_id, 'offices'=>$offices]);

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
        ]);
        $service = new service();
  
        $service->name= $request->input('name');
        $service->office_id= $request->input('office_id');
        $service->save(); 
        return redirect()->route('service.index')->with('info','service Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\service  $service
     * @return \Illuminate\Http\Response
     */
   public function edit($id,$office_id=null)
    {
        //
        $offices=null;
        if(!$office_id){
            $offices=office::all();
        }
        
        $service = service::find($id);
        return view('auca/service.edit',['service'=> $service ,'office_id'=>$office_id, 'offices'=>$offices]);

    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, service $service)
    {
        //
         $request->validate([
            'name'=>'required',
            'office_id'=>'required',
        ]);

        $service = service::find($request->input('id'));
        $service->name= $request->input('name');
        $service->office_id= $request->input('office_id');
        $service->save(); 
        return redirect()->route('service.index')->with('info','service Updated Successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
         $service = service::find($id);
        //delete
        $service->delete();
        return redirect()->route('service.index');
    }
}
