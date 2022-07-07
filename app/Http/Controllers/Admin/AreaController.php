<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Region;
use App\Models\State;
use App\Models\City;
use App\Models\Area;

class AreaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pages.area.index');
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
        $Area = new Area();
        $Area->city_id = $request->city_id;
        $Area->state_id = $request->state_id;
        $Area->region_id = $request->region_id;
        $Area->area_name = $request->area_name;
        $Area->save();

        if ($Area) {
            return back()->with('message', 'Area Added Successfully');
        } else {
            return back()->with('error', 'Area Not Added Something Wrong!');
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Area = Area::join('cities', 'cities.id', '=', 'areas.city_id')
            ->join('states', 'states.id', '=', 'cities.state_id')
            ->join('regions', 'regions.id', '=', 'states.region_id')
            ->where('areas.id', $id)
            ->select('areas.*', 'cities.city_name', 'states.state_name', 'states.id as state_id', 'regions.name as region_name', 'regions.id as region_id')
            ->first();

        return response()->json(['area' => $Area]);
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
        $Area =  Area::find($id);
        $Area->city_id = $request->city_id;
        $Area->area_name = $request->area_name;
        $Area->update();

        if ($Area) {
            return back()->with('message', 'Area Updated Successfully');
        } else {
            return back()->with('error', 'Area Not Update Something Wrong!');
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
