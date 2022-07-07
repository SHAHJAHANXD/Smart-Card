<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Advertisment;
use App\Models\Image;

class AdvertismentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pages.advertisment.index');
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
       // dd($request->all());
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
       // $add['images'] = Image::where([['image_id',$add->id],['image_type','App\Models\Advertisment']])->get();
            }

             if($add){
                return back()->with('message','Advertisment Added Successfully');
            }else{
                return back()->with('error','Advertisment Not Added Somthing Wrong!');
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
     dd('f');   
        $advertisment = Advertisment::find($id);
        $image = Image::where('image_id',$id)->get();
        
        return response()->json(['advertisment'=>$advertisment,'image'=>$image]);
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
        //
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
