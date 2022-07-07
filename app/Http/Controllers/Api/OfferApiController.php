<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Offer;
use App\Models\Image;
use Illuminate\Support\Str;

class OfferApiController extends Controller
{
    public function AddOffer(Request $request){

     
   $random = Str::random(40).time();
  $r =    $random.".png";
    $qrg=  \QrCode::size(500)->format('png')->generate($random, 'storage/images/qr/'.$r);
    $qr = url('/').'/'.'storage/images/qr/'.$r;
  


        $add = new Offer();
        $add->user_id = $request->user_id;
        $add->qr_code = $qr;
        $add->serial_number = $random;
        $add->description = $request->description;
        $add->discount = $request->discount;
        $add->points = $request->points;
        $add->save();


        if($request->file){

        foreach($request->file as $index => $file){

        $image = new Image();
        $image->image_id = $add->id;
        $image->image_type = 'App\Models\Offer';
        $image->path = $file;
        $image->save();
        }
        $add['images'] = Image::where([['image_id',$add->id],['image_type','App\Models\Offer']])->get();
            }

            if($add){
                return response()->json(['status' => true, 'message' =>'Offer Added Successfully', 'data' => $add],200);
            }else{
               return response()->json(['status' => false, 'message' =>'Offer Not Added Something Wrong!', 'data' => $add],400);
            }

    }

    public function UpdateOffer(Request $request,$id){


   $random = Str::random(40).time();
  $r =    $random.".png";
    $qrg=  \QrCode::size(500)->format('png')->generate($random, 'storage/images/qr/'.$r);
    $qr = url('/').'/'.'storage/images/qr/'.$r;

        $add = Offer::findOrFail($id);
      //  dd($add);
      $add->qr_code = $qr;
      $add->serial_number = $random;
      if($request->description){
      $add->description = $request->description;
      }
      if($request->discount){
      $add->discount = $request->discount;
      }
      if($request->points){
      $add->points = $request->points;
      }
        $add->update();

        if($request->file){

        foreach($request->file as $index => $file){

        $image = Image::where([['image_id',$add->id],['image_type','App\Models\Offer']])->first();
        if($image){
        $image->path = $file;
        $image->update();
        }else{
            $image = new Image();
        $image->image_id = $add->id;
        $image->image_type = 'App\Models\Offer';
        $image->path = $file;
        $image->save();
        }
        }
        $add['images'] = Image::where([['image_id',$add->id],['image_type','App\Models\Offer']])->get();
            }

            if($add){
                return response()->json(['status' => true, 'message' =>'Offer Update Successfully', 'data' => $add],200);
            }else{
               return response()->json(['status' => false, 'message' =>'Offer Not Update Something Wrong!', 'data' => $add],400);
            }

    }

    public function GetOffer($id){

        $Offer = Offer::with('images')->where('user_id',$id)->get();

        if($Offer){
            return response()->json(['status' => true, 'message' =>'User All Offer', 'data' => $Offer],200);
        }else{
           return response()->json(['status' => false, 'message' =>'User Not Found!', 'data' => $Offer],400);
        }

    }

    public function DeleteOffer($id){

        $Offer = Offer::findOrFail($id);
        $Offer->delete();

        if($Offer){

            $image = Image::where([['image_id',$id],['image_type','App\Models\Offer']])->delete();

            return response()->json(['status' => true, 'message' =>'Offer Delete Successfully'],200);
        }else{
           return response()->json(['status' => false, 'message' =>'Offer Not Delete Something Wrong!'],400);
        }

    }



}
