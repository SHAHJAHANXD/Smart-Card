<?php

namespace App\Http\Controllers;

use App\Models\Branches;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class BranchesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        return view('admin.pages.branch.index');
    }

    public function store(Request $request)
    {

        $branch = new Branches();
        $branch->merchant_id = auth()->user()->id;
        $branch->branch_name = $request->branch_name;
        $branch->branch_manager_email = $request->branch_manager_email;
        $branch->branch_manager_phone = $request->branch_manager_phone;
        $branch->branch_address = $request->branch_address;
        $branch->branch_lat = $request->branch_lat;
        $branch->branch_lng = $request->branch_lng;
        $branch->save();

        if ($branch) {
            return back()->with('message', 'Branch Added Successfully');
        } else {
            return back()->with('error', 'Branch Not Added Something Wrong!');
        }
    }

    function registerBrand(Request $request)
    {
        $messages = array(
            'branch_name.required' => __('Branch name field is required.'),
            'branch_name.string' => __('Branch name must be string.'),

            'branch_manager_email.required' => __('Branch manager email field is required.'),
            'branch_manager_email.string' => __('Branch manager email must be string.'),
            'branch_manager_email.email' => __('Branch manager email address must be valid.'),
            'branch_manager_email.unique' => __('Branch manager email address is already taken.'),

            'branch_manager_phone.required' => __('Branch phone number field is required.'),
            'branch_manager_phone.integer' => __('Branch phone number must be integer.'),
            'branch_manager_phone.unique' => __('Branch phone number is already taken.'),

            'branch_address.required' => __('Branch address field is required.'),
            'branch_address.string' => __('Branch address must be string.'),

            'branch_lat.required' => __('Branch latitude field is required.'),
            'branch_lat.integer' => __('Branch latitude must be integer.'),

            'branch_lng.required' => __('Branch longitude field is required.'),
            'branch_lng.integer' => __('Branch longitude must be integer.'),
        );
        $validator = Validator::make($request->all(), [
            'merchant_id' => 'required',
            'branch_name' => 'required|string|max:255',
            'branch_manager_email' => 'required|max:255|string|email|unique:branches',
            'branch_manager_phone' => 'required|integer|unique:branches',
            'branch_address' => 'required|string|max:255',
            'branch_lat' => 'required|string',
            'branch_lng' => 'required|string',
        ], $messages);

        if ($validator->fails()) {
            return response()->json(['status' => false, 'errors' => $validator->errors()]);
        }

        $branch = new Branches();
        $branch->merchant_id = $request->merchant_id;
        $branch->branch_name = $request->branch_name;
        $branch->branch_manager_email = $request->branch_manager_email;
        $branch->branch_manager_phone = $request->branch_manager_phone;
        $branch->branch_address = $request->branch_address;
        $branch->branch_lat = $request->branch_lat;
        $branch->branch_lng = $request->branch_lng;
        $branch->save();

        $response = ['status' => true, 'message' => "Branch Created Successfully!"];
        return response($response, 200);
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


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Branches  $branches
     * @return \Illuminate\Http\Response
     */
    public function show(Branches $branches)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Branches  $branches
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $branch = Branches::find($id);

        return response()->json(['branch' => $branch]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Branches  $branches
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $branch =  Branches::find($id);
        $branch->branch_name = $request->branch_name;
        $branch->branch_manager_email = $request->branch_manager_email;
        $branch->branch_manager_phone = $request->branch_manager_phone;
        $branch->branch_address = $request->branch_address;
        $branch->branch_lat = $request->branch_lat;
        $branch->branch_lng = $request->branch_lng;

        $branch->update();

        if ($branch) {
            return back()->with('message', 'Branch Updated Successfully');
        } else {
            return back()->with('error', 'Branch Not Update Something Wrong!');
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Branches  $branches
     * @return \Illuminate\Http\Response
     */
    public function destroy(Branches $branches)
    {
        //
    }
}
