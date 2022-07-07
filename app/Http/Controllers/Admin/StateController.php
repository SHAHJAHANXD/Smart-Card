<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Region;
use App\Models\State;

class StateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pages.state.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $state = new State();
        $state->region_id = $request->region_id;
        $state->state_name = $request->state_name;
        $state->save();
        
        if($state){
            return back()->with('message','State Added Successfully');
        }else{
             return back()->with('error','State Not Added Something Wrong!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $state = State::where('region_id',$id)->get();
        
        return response()->json(['state' => $state]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $state = State::join('regions','regions.id','=','states.region_id')
                    ->where('states.id',$id)
                    ->select('states.*','regions.name as region_name')
                    ->first();
        
        return response()->json(['state' =>$state]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $state =  State::find($id);
          $state->region_id = $request->region_id;
        $state->state_name = $request->state_name;
        $state->update();
        
        if($state){
            return back()->with('message','State Updated Successfully');
        }else{
             return back()->with('error','State Not Update Something Wrong!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     
     
    public function destroy($id)
    {
        //
    }
}
