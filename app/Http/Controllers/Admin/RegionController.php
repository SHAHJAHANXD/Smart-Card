<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Region;
use App\Models\Package;
use App\Models\User;
use App\Models\Offer;
use App\Models\Advertisment;
use App\Models\Category;
use App\Models\State;
use App\Models\City;
use App\Models\Area;

class RegionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pages.region.index');
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
        $region = new Region();
        $region->name = $request->name;
        $region->save();
        
        if($region){
            return back()->with('message','Region Added Successfully');
        }else{
             return back()->with('error','Region Not Added Something Wrong!');
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
        $region = Region::find($id);
        
        return response()->json(['region' =>$region]);
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
        $region =  Region::find($id);
        $region->name = $request->name;
        $region->update();
        
        if($region){
            return back()->with('message','Region Updated Successfully');
        }else{
             return back()->with('error','Region Not Update Something Wrong!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     
     public function delete(Request $request)
    {
        if($request->type == 'pkg'){
         $pkg = Package::find($request->delete_id);
         $pkg->delete();
         
         if($pkg){
            return back()->with('message','Package Delete Successfully');
        }else{
             return back()->with('error','Package Not Delete Something Wrong!');
        }
         
        }
        
         if($request->type == 'region'){
         $region = Region::find($request->delete_id);
         $region->delete();
         
         $state = State::where('region_id',$request->delete_id)->first();
         if($state){
         $state->delete();
         
         $city = City::where('state_id',$state->id)->first();
         if($city){
         $city->delete();
         
         $area = Area::where('city_id',$city->id)->first();
         if($area){
         $area->delete();
         }
         
         }
         
         }
         
         
         
         
         
         if($region){
            return back()->with('message','Region Delete Successfully');
        }else{
             return back()->with('error','Region Not Delete Something Wrong!');
        }
         
        }
        
          if($request->type == 'offer'){
         $offer = Offer::find($request->delete_id);
         $offer->delete();
         
         if($offer){
            return back()->with('message','Offer Delete Successfully');
        }else{
             return back()->with('error','Offer Not Delete Something Wrong!');
        }
         
        }
        
        if($request->type == 'advertisment'){
         $advertisment = Advertisment::find($request->delete_id);
         $advertisment->delete();
         
         if($advertisment){
            return back()->with('message','Advertisment Delete Successfully');
        }else{
             return back()->with('error','Advertisment Not Delete Something Wrong!');
        }
         
        }
        
         if($request->type == 'merchant'){
         $user = User::find($request->delete_id);
         $user->delete();
         
          $offer = Offer::where('user_id',$request->delete_id);
         $offer->delete();
         
         $advertisment = Advertisment::where('user_id',$request->delete_id);
         $advertisment->delete();
         
         if($user){
            return back()->with('message','Trader Delete Successfully');
        }else{
             return back()->with('error','Trader Not Delete Something Wrong!');
        }
         
        }
        
        if($request->type == 'buyer'){
         $user = User::find($request->delete_id);
         $user->delete();
         
         if($user){
            return back()->with('message','Buyer Delete Successfully');
        }else{
             return back()->with('error','Buyer Not Delete Something Wrong!');
        }
         
        }
        
        
         if($request->type == 'category'){
         $category = Category::find($request->delete_id);
         $category->delete();
         
         if($category){
            return back()->with('message','Category Delete Successfully');
        }else{
             return back()->with('error','Category Not Delete Something Wrong!');
        }
         
        }
        
           if($request->type == 'state'){
         $state = State::find($request->delete_id);
         $state->delete();
         
          $city = City::where('state_id',$request->delete_id)->first();
          if($city){
         $city->delete();
         
         $area = Area::where('city_id',$city->id)->first();
          if($area){
         $area->delete();
          }
         
          }
         
          
         
         if($state){
            return back()->with('message','State Delete Successfully');
        }else{
             return back()->with('error','State Not Delete Something Wrong!');
        }
         
        }
        
           if($request->type == 'city'){
         $city = City::find($request->delete_id);
         $city->delete();
         
          $area = Area::where('city_id',$request->delete_id)->first();
          if($area){
         $area->delete();
          }
         
         if($city){
            return back()->with('message','City Delete Successfully');
        }else{
             return back()->with('error','City Not Delete Something Wrong!');
        }
         
        }
        
           if($request->type == 'area'){
         $area = Area::find($request->delete_id);
         $area->delete();
         
         if($area){
            return back()->with('message','Area Delete Successfully');
        }else{
             return back()->with('error','Area Not Delete Something Wrong!');
        }
         
        }
        
        
        
        
    }
     
    public function destroy($id)
    {
        //
    }
}
