<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Region;
use Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash as FacadesHash;
use Illuminate\Support\Facades\Validator;

class UserApiController extends Controller
{
    public function register(Request $request)
    {


        $validator = \Illuminate\Support\Facades\Validator::make($request->all(), [
            'first_name' => 'required',
            'last_name' => 'required',
            'store_name' => 'required',
            'region' => 'required',
            'email' => 'required|unique:users',
            'phone' => 'required',
            'password' => 'required',
            'commercial_register_number' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $user = new User();
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->store_name = $request->store_name;
        $user->region = $request->region;
        $user->location = $request->location;
        $user->latitude = $request->latitude;
        $user->longitude = $request->longitude;
        $user->commercial_register_number = $request->commercial_register_number;
        $user->password = FacadesHash::make($request->password);
        $user->cpassword = $request->password;
        $user->profile_pic = $request->profile_pic;
        $user->store_offer = $request->store_offer;
        $user->store_logo = $request->store_logo;
        $user->role = 'Merchant';
        $user->status = false;
        $user->last_status_change = Now();
        $user->save();

        $usernew  = User::find($user->id);

        $usernew['token'] =  $user->createToken('MyAuthApp')->plainTextToken;
        if ($user) {
            return response()->json(['status' => true, 'message' => 'User Regsiter Successfully', 'data' => $usernew], 200);
        } else {
            return response()->json(['status' => false, 'message' => 'User Not Regsiter Something Wrong!', 'data' => $usernew], 400);
        }
    }


    public function login(Request $request)
    {

        $validator = Validator::make($request->all(), [

            'email' => 'required',
            'password' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return response()->json(['status' => false, 'message' => 'Email Not Regsiter'], 400);
        }
        $passcheck = Hash::check($request->password, $user->password);
        if (!$passcheck) {
            return response()->json(['status' => false, 'message' => 'Password does not match'], 400);
        }

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $authUser = Auth::user();
            // $user->status = true;
            //$user->last_status_change = NOW();
            //$user->update();
            $user['token'] =  $authUser->createToken('MyAuthApp')->plainTextToken;

            return response()->json(['status' => true, 'message' => 'User Login Successfully', 'data' => $user], 200);
        } else {
            return response()->json(['status' => false, 'message' => 'User Not Login Something wrong!'], 401);
        }
    }

    public function update(Request $request, $id)
    {

        $user =  User::findOrFail($id);
        if ($request->first_name) {
            $user->first_name = $request->first_name;
        }
        if ($request->last_name) {
            $user->last_name = $request->last_name;
        }
        if ($request->email) {
            $user->email = $request->email;
        }
        if ($request->phone) {
            $user->phone = $request->phone;
        }
        if ($request->store_name) {
            $user->store_name = $request->store_name;
        }
        if ($request->profile_pic) {
            $user->profile_pic = $request->profile_pic;
        }
        if ($request->store_logo) {
            $user->store_logo = $request->store_logo;
        }
        if ($request->store_offer) {
            $user->store_offer += $request->store_offer;
        }
        if ($request->region) {
            $user->region = $request->region;
        }
        if ($request->password) {
            $user->password = Hash::make($request->password);
            $user->cpassword = $request->password;
        }
        if ($request->has('status')) {
            //  dd('c');
            if ($request->status == 0) {
                //  dd('0');
                $user->status = 0;
                $user->last_status_change = Now();
            }

            if ($request->status == 1) {
                $user->status = 1;
                $user->last_status_change = Now();
            }
        }

        if ($request->location) {
            $user->location = $request->location;
            $user->latitude = $request->latitude;
            $user->longitude = $request->longitude;
        }




        if ($request->commercial_register_number) {
            $user->commercial_register_number = $request->commercial_register_number;
        }
        if ($request->password) {
            $user->password = Hash::make($request->password);
            $user->cpassword = $request->password;
        }

        if ($request->profile_pic) {
            $user->profile_pic = $request->profile_pic;
        }

        if ($request->store_logo) {
            $user->store_logo = $request->store_logo;
        }
        if ($request->points) {
            $user->points += $request->points;
        }
        $user->update();
        $user['last_status_change'] = date('d-m-Y H:i:s', strtotime($user->last_status_change));

        if ($user) {
            if ($request->points) {
                return response()->json(['status' => true, 'message' => 'User Points Added Successfully', 'data' => $user], 200);
            }
            return response()->json(['status' => true, 'message' => 'User Update Successfully', 'data' => $user], 200);
        } else {
            return response()->json(['status' => false, 'message' => 'User Not Update Something Wrong!', 'data' => $user], 400);
        }
    }

    public function getmerchant($id)
    {

        $user = User::find($id);

        return response()->json(['status' => true, 'message' => 'User data', 'data' => $user], 200);
    }

    public function region()
    {

        $region = Region::orderBy('id', 'desc')->get();

        return response()->json(['status' => true, 'message' => 'All Regions', 'data' => $region], 200);
    }
}
