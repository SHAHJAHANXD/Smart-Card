<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pages.category.index');
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
        $Category = new Category();
        $Category->name = $request->name;

        if ($request->has('file')) {

            $files = $request->file;
            $file_name_original =  $files->getClientOriginalName();
            $file_name = $file_name_original . time() . "." . $files->getClientOriginalExtension();
            $files->move('storage/images/', $file_name);
            $image = url('/') . '/' . 'storage/images/' . $file_name;

            $Category->image = $image;
        }

        $Category->save();

        if ($Category) {
            return back()->with('message', 'Category Added Successfully');
        } else {
            return back()->with('error', 'Category Not Added Something Wrong!');
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
        $Category = Category::find($id);

        return response()->json(['category' => $Category]);
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
        $Category =  Category::find($id);
        $Category->name = $request->name;

        if ($request->has('file')) {

            $files = $request->file;
            $file_name_original =  $files->getClientOriginalName();
            $file_name = $file_name_original . time() . "." . $files->getClientOriginalExtension();
            $files->move('storage/images/', $file_name);
            $image = url('/') . '/' . 'storage/images/' . $file_name;


            $Category->image = $image;
        }

        $Category->update();

        if ($Category) {
            return back()->with('message', 'Category Updated Successfully');
        } else {
            return back()->with('error', 'Category Not Update Something Wrong!');
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
