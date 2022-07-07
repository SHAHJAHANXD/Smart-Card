<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Offer;
use App\Models\Advertisment;
use App\Models\User;
use App\Models\Region;

class TraderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pages.trader.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     
     public function offers($id)
    {
        $merchant = User::where([['id',$id],['role','Merchant']])->first();
        $offer = Offer::where('user_id',$id)->get();
         return view('admin.pages.trader.offers.index',['offer' => $offer,'merchant' => $merchant]);
    }
    
      public function advertisment($id)
    {
        $merchant = User::where([['id',$id],['role','Merchant']])->first();
        $advertisment = Advertisment::where('user_id',$id)->get();
         return view('admin.pages.trader.advertisment.index',['advertisment' => $advertisment,'merchant' => $merchant]);
    }
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
     if($request->store_name){
     $user->store_name = $request->store_name;
    }
     if($request->region){
     $user->region = $request->region;
    }
    $user->role = 'Merchant';
     if($request->commercial_register_number){
     $user->commercial_register_number = $request->commercial_register_number;
    }
   
   
     if($request->has('profile_pic')){
     
                $files = $request->profile_pic;
                 $file_name_original =  $files->getClientOriginalName();
            $file_name = $file_name_original.time() . "." . $files->getClientOriginalExtension();
            $files->move('storage/images/',$file_name);
            $image = url('/').'/'.'storage/images/'.$file_name;
            
           
     $user->profile_pic = $image;

     
     }
     
     if($request->has('store_logo')){
         
         
                $files = $request->store_logo;
                 $file_name_original =  $files->getClientOriginalName();
            $file_name = $file_name_original.time() . "." . $files->getClientOriginalExtension();
            $files->move('storage/images/',$file_name);
            $image = url('/').'/'.'storage/images/'.$file_name;
          
               $user->store_logo = $image;
  
         
     }
    
     $user->save();
    

     if($user){
            return back()->with('message','Trader Added Successfully');
        }else{
             return back()->with('error','Trader Not Added Something Wrong!');
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
      //  $trader = User::findOrFail($id);
        $trader = User::join('regions','regions.id','=','users.region')
        ->where('users.id',$id)
        ->select('users.*','regions.name as region_name')
        ->first();
        
        return response()->json(['trader'=> $trader]);
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
     if($request->store_name){
     $user->store_name = $request->store_name;
    }
   
    
    
     if($request->region){
     $user->region = $request->region;
    }
 
  
    
     
    
     if($request->commercial_register_number){
     $user->commercial_register_number = $request->commercial_register_number;
    }
   
   
     if($request->has('profile_pic')){
     
                $files = $request->profile_pic;
                 $file_name_original =  $files->getClientOriginalName();
            $file_name = $file_name_original.time() . "." . $files->getClientOriginalExtension();
            $files->move('storage/images/',$file_name);
            $image = url('/').'/'.'storage/images/'.$file_name;
            
           
     $user->profile_pic = $image;

     
     }
     
     if($request->has('store_logo')){
         
         
                $files = $request->store_logo;
                 $file_name_original =  $files->getClientOriginalName();
            $file_name = $file_name_original.time() . "." . $files->getClientOriginalExtension();
            $files->move('storage/images/',$file_name);
            $image = url('/').'/'.'storage/images/'.$file_name;
          
               $user->store_logo = $image;
  
         
     }
    
     $user->update();
    

     if($user){
            return back()->with('message','Trader Updated Successfully');
        }else{
             return back()->with('error','Trader Not Update Something Wrong!');
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
