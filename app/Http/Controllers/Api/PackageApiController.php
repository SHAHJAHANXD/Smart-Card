<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Package;
use App\Models\BuyPoint;
use App\Models\User;
use Illuminate\Support\Str;

class PackageApiController extends Controller
{
   
    public function GetPackage(){

        $Package = Package::orderBy('id','desc')->get();

        if($Package){
            return response()->json(['status' => true, 'message' =>' All Packages', 'data' => $Package],200);
        }else{
           return response()->json(['status' => false, 'message' =>'Packages Not Found!', 'data' => $Package],400);
        }

    }
    
    
     public function BuyPoint(Request $request){

          
          $package = Package::find($request->package_id);
          
         
         $point = new BuyPoint();
         $point->user_id = $request->user_id;
         $point->package_id = $request->package_id;
         $point->points = $package->points;
         $point->save();
       
        $user = User::find($request->user_id);
        $user->points += $point->points;
        $user->update();
       
       $u = User::where('id',$request->user_id)->first();

        if($point){
            return response()->json(['status' => true, 'message' =>' Points Added Successfully', 'data' => $u],200);
        }else{
           return response()->json(['status' => false, 'message' =>'Points Not Added Something Wrong!', 'data' => []],400);
        }

    }
    
     public function GetBuyPackage($id){

        $Package = BuyPoint::join('users','users.id','=','buy_points.user_id')
                   ->join('packages','packages.id','=','buy_points.package_id')
                   ->where('buy_points.user_id',$id)
                   ->select('packages.*','buy_points.user_id')
                   ->get();
       

        if($Package){
            return response()->json(['status' => true, 'message' =>'User All Buy Packages', 'data' => $Package],200);
        }else{
           return response()->json(['status' => false, 'message' =>'Packages Not Found!', 'data' => $Package],400);
        }

    }



}
