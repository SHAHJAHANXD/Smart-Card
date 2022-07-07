<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Offer;
use App\Models\Image;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pages.offer.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function postoffer(Request $request)
    {
        $id = Auth::guard('merchant')->user()->id;
        $offer = new Offer();
        $offer->user_id = $id;
        if ($request->hasfile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $offer->image = $imageName;
            $request->image->move(public_path('images'), $imageName);
        }
        $offer->description = $request->description;
        $offer->discount = $request->discount;
        $offer->points = 200;
        $offer->save();
        return redirect()->back();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


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

            }

            if($add){
                return back()->with('message','Offer Added Successfully');
            }else{
                return back()->with('error','Offer Not Added Somthing Wrong!');
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
        $offer = Offer::find($id);
        $image = Image::where('image_id',$id)->get();

        return response()->json(['offer'=>$offer,'image'=>$image]);
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
      //  $add['images'] = Image::where([['image_id',$add->id],['image_type','App\Models\Offer']])->get();
            }

            if($add){
                return back()->with('message','Offer Update Successfully');
            }else{
                return back()->with('error','Offer Not Update Something Wrong!');
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
