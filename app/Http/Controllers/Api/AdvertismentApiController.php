<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Advertisment;
use App\Models\Image;

class AdvertismentApiController extends Controller
{
    public function AddAdvertisment(Request $request){

        $add = new Advertisment();
        $add->user_id = $request->user_id;
        $add->title = $request->title;
        $add->description = $request->description;
        $add->save();

        if($request->file){

        foreach($request->file as $index => $file){

        $image = new Image();
        $image->image_id = $add->id;
        $image->image_type = 'App\Models\Advertisment';
        $image->path = $file;
        $image->save();
        }
        $add['images'] = Image::where([['image_id',$add->id],['image_type','App\Models\Advertisment']])->get();
            }

            if($add){
                return response()->json(['status' => true, 'message' =>'Advertisment Added Successfully', 'data' => $add],200);
            }else{
               return response()->json(['status' => false, 'message' =>'Advertisment Not Added Something Wrong!', 'data' => $add],400);
            }

    }

    public function UpdateAdvertisment(Request $request,$id){

        $add = Advertisment::findOrFail($id);
      //  dd($add);
        $add->title = $request->title;
        $add->description = $request->description;
        $add->update();

        if($request->file){

        foreach($request->file as $index => $file){

         $image = Image::where([['image_id',$add->id],['image_type','App\Models\Advertisment']])->first();
        if($image){
        $image->path = $file;
        $image->update();
        }else{
            $image = new Image();
        $image->image_id = $add->id;
        $image->image_type = 'App\Models\Advertisment';
        $image->path = $file;
        $image->save();
        }
        }
        $add['images'] = Image::where([['image_id',$add->id],['image_type','App\Models\Advertisment']])->get();
            }

            if($add){
                return response()->json(['status' => true, 'message' =>'Advertisment Update Successfully', 'data' => $add],200);
            }else{
               return response()->json(['status' => false, 'message' =>'Advertisment Not Update Something Wrong!', 'data' => $add],400);
            }

    }

    public function GetAdvertisment($id){

        $Advertisment = Advertisment::with('images')->where('user_id',$id)->get();

        if($Advertisment){
            return response()->json(['status' => true, 'message' =>'User All Advertisments', 'data' => $Advertisment],200);
        }else{
           return response()->json(['status' => false, 'message' =>'Advertisment Not Found!', 'data' => $Advertisment],400);
        }

    }

    public function DeleteAdvertisment($id){

        $Advertisment = Advertisment::findOrFail($id);
        $Advertisment->delete();

        if($Advertisment){

            $image = Image::where([['image_id',$id],['image_type','App\Models\Advertisment']])->delete();

            return response()->json(['status' => true, 'message' =>'Advertisment Delete Successfully'],200);
        }else{
           return response()->json(['status' => false, 'message' =>'Advertisment Not Delete Something Wrong!'],400);
        }

    }


    public function imageupload(Request $request){

        $imagee = $request->file('file');
        $image = [];
        foreach($imagee as $index => $files) {

            $file_name_original =  $files->getClientOriginalName();
            $file_name = $file_name_original.time() . "." . $files->getClientOriginalExtension();
            $files->move('storage/images/',$file_name);
            $image[] = url('/').'/'.'storage/images/'.$file_name;


        }

        return response()->json(['status' => true, 'message' =>'Image Uploaded Successfully', 'data' => $image],200);
    }

}
