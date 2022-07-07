<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class BuyerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pages.buyer.index');
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
             $user = new  User();
     if($request->first_name){
     $user->first_name = $request->first_name;
    }
     if($request->last_name){
     $user->last_name = $request->last_name;
    }
     if($request->email){
     $user->email = $request->email;
    }
     if($request->phone){
     $user->phone = $request->phone;
    }
     
     if($request->region){
     $user->region = $request->region;
    }
    $user->role = 'User';
     
   
   
     if($request->has('profile_pic')){
     
                $files = $request->profile_pic;
                 $file_name_original =  $files->getClientOriginalName();
            $file_name = $file_name_original.time() . "." . $files->getClientOriginalExtension();
            $files->move('storage/images/',$file_name);
            $image = url('/').'/'.'storage/images/'.$file_name;
            
           
     $user->profile_pic = $image;

     
     }
     
    
     $user->save();
    

     if($user){
            return back()->with('message','Buyer Added Successfully');
        }else{
             return back()->with('error','Buyer Not Added Something Wrong!');
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
            $buyer = User::join('regions','regions.id','=','users.region')
        ->where('users.id',$id)
        ->select('users.*','regions.name as region_name')
        ->first();
        
        return response()->json(['buyer'=> $buyer]);
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

     $user =  User::findOrFail($id);
     if($request->first_name){
     $user->first_name = $request->first_name;
    }
     if($request->last_name){
     $user->last_name = $request->last_name;
    }
     if($request->email){
     $user->email = $request->email;
    }
     if($request->phone){
     $user->phone = $request->phone;
    }
   
     if($request->region){
     $user->region = $request->region;
    }
     if($request->has('profile_pic')){
     
                $files = $request->profile_pic;
                 $file_name_original =  $files->getClientOriginalName();
            $file_name = $file_name_original.time() . "." . $files->getClientOriginalExtension();
            $files->move('storage/images/',$file_name);
            $image = url('/').'/'.'storage/images/'.$file_name;
            
           
     $user->profile_pic = $image;

     
     }
     
     $user->update();
    

     if($user){
            return back()->with('message','Buyer Updated Successfully');
        }else{
             return back()->with('error','Buyer Not Update Something Wrong!');
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
