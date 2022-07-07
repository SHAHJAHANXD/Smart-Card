<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Region;
use App\Models\State;
use App\Models\City;

class CityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pages.city.index');
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
        $city = new City();
          $city->state_id = $request->state_id;
        $city->city_name = $request->city_name;
        $city->save();
        
        if($city){
            return back()->with('message','City Added Successfully');
        }else{
             return back()->with('error','City Not Added Something Wrong!');
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
         $city = City::where('state_id',$id)->get();
        
        return response()->json(['city' => $city]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $city = City::join('states','states.id','=','cities.state_id')
                    ->join('regions','regions.id','=','states.region_id')
                    ->where('cities.id',$id)
                    ->select('cities.*','states.state_name','regions.name as region_name','regions.id as region_id')
                    ->first();
        
        return response()->json(['city' =>$city]);
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
        $city =  City::find($id);
          $city->state_id = $request->state_id;
        $city->city_name = $request->city_name;
        $city->update();
        
        if($city){
            return back()->with('message','City Updated Successfully');
        }else{
             return back()->with('error','City Not Update Something Wrong!');
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
