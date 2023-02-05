<?php

namespace App\Http\Controllers;

use App\Models\Avaibility;
use Illuminate\Http\Request;

class AvaibilityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($date)
    {
        $avaibilities = Avaibility::where('toper_id',\Auth::user()->id)->where('date',$date)->get();

        return view('avaibility.create',compact('date','avaibilities'));

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


//        dd($request->data);
        foreach ($request->data as $data){
//            dd(in_array('avaibility_id',$data),$data);
            if(isset($data['avaibility_id'])){
                      $avaibility = Avaibility::find($data['avaibility_id']);
                $avaibility->update($data);
            }else{
                $data['toper_id'] = \Auth::user()->id;
                Avaibility::create($data);
            }

        }

        return redirect()->back()->with('success','Avaibility added successfully');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Avaibility  $avaibility
     * @return \Illuminate\Http\Response
     */
    public function show(Avaibility $avaibility)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Avaibility  $avaibility
     * @return \Illuminate\Http\Response
     */
    public function edit(Avaibility $avaibility)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Avaibility  $avaibility
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Avaibility $avaibility)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Avaibility  $avaibility
     * @return \Illuminate\Http\Response
     */
    public function destroy(Avaibility $avaibility)
    {
        //
    }
}
