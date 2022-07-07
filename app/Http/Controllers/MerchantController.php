<?php

namespace App\Http\Controllers;

use App\Models\Merchant;
use App\Models\Offer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use phpDocumentor\Reflection\Types\Void_;

class MerchantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function profile()
    {
        return view('frontend.profile');
    }
    public function payments()
    {
        return view('frontend.payments');
    }
    public function statistics()
    {
        return view('frontend.statistics');
    }
    public function points()
    {
        return view('frontend.points');
    }
    public function messages()
    {
        return view('frontend.messages');
    }
    public function offer()
    {
        $id = Auth::guard('merchant')->user()->id;
        $offer = Offer::where('user_id', $id)->get();
        return view('frontend.offer', compact('offer'));
    }
    public function advertisment()
    {
        return view('frontend.advertisment');
    }

    function register(Request $request)
    {
        $messages = array(
            'first_name.required' => __('First name field is required.'),
            'last_name.required' => __('Last name field is required.'),
            'first_name.string' => __('Name must be string.'),
            'last_name.string' => __('Name must be string.'),

            'email.required' => __('Email field is required.'),
            'email.string' => __('Email must be string.'),
            'email.email' => __('Email address must be valid.'),
            'email.unique' => __('Email address is already taken.'),

            'phone.required' => __('Phone number field is required.'),
            'phone.integer' => __('Phone number must be integer.'),
            'phone.unique' => __('Phone number is already taken.'),

            'password.required' => __('Password field is required.'),
            'password.string' => __('Password must be string.'),
            'password.min' => __('Password must be at-least 8 characters.'),

            'profile_image.required' => __('Profile image field is required.'),
            'profile_image.mimes' => __('Profile image must be JPG, PNG, SVG.'),
            'profile_image.max' => __('Profile image must be at-least 3MB.'),

            'brand_logo.required' => __('Brand image field is required.'),
            'brand_logo.mimes' => __('Brand image must be JPG, PNG, SVG.'),
            'brand_logo.max' => __('Brand image must be at-least 3MB.'),

            'brand_name.required' => __('Brand name field is required.'),
            'brand_name.string' => __('Brand name must be string.'),
            'brand_name.unique' => __('Brand name is already taken.'),

            'brand_number.required' => __('Brand number field is required.'),
            'brand_number.integer' => __('Brand number must be integer.'),
            'brand_number.unique' => __('Brand number is already taken.'),
        );
        $validator = Validator::make($request->all(), [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:merchants',
            'phone' => 'required|integer|unique:merchants',
            'password' => 'required|string|min:8',
            'profile_image' => 'required|mimes:jpg,png,svg|max:3072',
            'brand_logo' => 'required|mimes:jpg,png,svg|max:3072',
            'brand_name' => 'required|string|max:255|unique:merchants',
            'brand_number' => 'required|integer|unique:merchants',
        ], $messages);

        if ($validator->fails()) {
            return response()->json(['status' => false, 'errors' => $validator->errors()]);
        }
        $otp = mt_rand(100000, 999999);
        $user = new Merchant();
        if ($request->hasfile('profile_image')) {
            $imageName = time() . '.' . $request->profile_image->extension();
            $user->profile_image = $imageName;
            $request->profile_image->move(public_path('images'), $imageName);
        }
        if ($request->hasfile('brand_logo')) {
            $imageName = time() . '.' . $request->brand_logo->extension();
            $user->brand_logo = $imageName;
            $request->brand_logo->move(public_path('images'), $imageName);
        }
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = Hash::make($request->password);
        $user->brand_name = $request->brand_name;
        $user->brand_number = $request->brand_number;
        $user->otp = $otp;
        $user->save();

        $usernew  = Merchant::find($user->id);

        $usernew['token'] =  $user->createToken('MyAuthApp')->plainTextToken;
        if ($user) {
            return response()->json(['status' => true, 'message' => 'User Regsiter Successfully', 'data' => $usernew], 200);
        } else {
            return response()->json(['status' => false, 'message' => 'User Not Regsiter Something Wrong!', 'data' => $usernew], 400);
        }

        Mail::send('emails.verifyemail', ['otp' => $otp], function ($message) use ($request) {
            $message->to($request->email);
            $message->subject('Verify Email');
        });

        $response = ['status' => true, 'message' => "Account Created Successfully!"];
        return response($response, 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function verification(Request $request)
    {
        $email = $request->email;
        $user = Merchant::where('email', $email)->first();
        if ($user) {
            if ($user->otp_status == 1) {
                $response = ['status' => true, 'message' => "Account is verfied!"];
                return response($response, 200);
            }
            if ($user->otp_status == 0) {
                $response = ['status' => true, 'message' => "Account is not verfied. Please verify your account."];
                return response($response, 200);
            }
        } else {
            $response = ["message" => 'User does not exist'];
            return response($response, 422);
        }
    }
    public function postregister(Request $request)
    {
        $request->validate(
            [
                'first_name' => 'required|string|max:255',
                'last_name' => 'required|string|max:255',
                'email' => 'required|email|unique:merchants|string|max:255',
                'phone' => 'required|string|unique:merchants|max:255',
                'password' => 'required|string|confirmed|min:8',
                'password_confirmation' => 'required|string|min:8|same:password',
            ],
            [
                'first_name.required' => 'First name is required.',
                'first_name.string' => 'First name must be string.',

                'last_name.required' => 'Last name is required.',
                'last_name.string' => 'Last name must be string.',

                'email.required' => 'Email field is required.',
                'email.string' => 'Email must be string.',
                'email.email' => 'Email address must be valid.',
                'email.unique' => 'Email address is already taken.',

                'phone.required' => 'Phone number field is required.',
                'phone.string' => 'Phone number must be string.',
                'phone.unique' => 'Phone number is already taken.',

                'password.required' => 'Password field is required.',
                'password.string' => 'Password must be string.',
                'password.min' => 'Password must be at-least 8 characters.',
            ]
        );
        $otp = mt_rand(100000, 999999);
        $merchant = new Merchant();
        $merchant->first_name = $request->first_name;
        $merchant->last_name = $request->last_name;
        $merchant->email = $request->email;
        $merchant->phone = $request->phone;
        $merchant->password = Hash::make($request->password);
        $merchant->otp = $otp;
        $merchant->save();
        Mail::send('emails.verifyemail', ['otp' => $otp], function ($message) use ($request) {
            $message->to($request->email);
            $message->subject('Verify Email');
        });
        return redirect()->route('merchant.page.login')->with('success', 'Account created successfully!');
    }
    public function authenticate(Request $request)
    {
        $request->validate([
            'email' => 'required|max:250',
            'password' => 'required|max:250',
        ]);
        $credentials = $request->only('email', 'password');

        if (Auth::guard('merchant')->attempt($credentials)) {
            return redirect('/merchant/features');
        }
        return redirect()->back()->with('error', 'Email or Password is Invalid!');
    }
    public function merchantlogout()
    {
        Auth::logout();
        Session::flush();
        return redirect('/merchant');
    }
    public function verifymerchantaccount()
    {
        return view('frontend.verify');
    }
    public function verifymerchant(Request $request)
    {
        $request->validate([
            'otp' => 'required|max:6',
        ]);
        $id = Auth::guard('merchant')->user()->id;
        $Merchant = Auth::guard('merchant')->user()->otp == $request->otp;
        if ($Merchant == true) {
            $Merchant = Merchant::find($id);
            $Merchant->otp_status = '1';
            $Merchant->otp = NULL;
            $Merchant->save();
            return redirect('/merchant/profile')->with('message', 'Email Verified Successfully!');
        } else {
            return redirect()->back()->with('error', 'Otp is Invalid!');
        }
    }
    public function apiverifymerchant(Request $request)
    {
        $email = $request->email;

        $messages = array(
            'otp.required' => __('Otp field is required.'),
            'otp.max' => __('Otp must be at-least 6 characters.'),
        );
        $validator = Validator::make($request->all(), [
            'otp' => 'required|max:6',
            'email' => 'required',
        ], $messages);

        if ($validator->fails()) {
            return response()->json(['status' => false, 'errors' => $validator->errors()]);
        }
        $user = Merchant::where('email', $email)->first();
        if ($user) {
            $Merchant = $user->otp == $request->otp;
            if ($Merchant == true) {
                $Merchant = Merchant::where('email', $email)->first();
                $Merchant->otp_status = '1';
                $Merchant->otp = NULL;
                $Merchant->save();
                $response = ['status' => true, 'message' => "Email Verified Successfully!"];
                return response($response, 200);
            } else {
                $response = ['status' => true, 'message' => "Otp is Invalid!"];
                return response($response, 422);
            }
        } else {
            $response = ["message" => 'User does not exist'];
            return response($response, 422);
        }
    }

    public function resend(Request $request)
    {
        $otp = mt_rand(100000, 999999);
        $email = Auth::guard('merchant')->user()->email;
        $user = Merchant::where('email', $email)->first();
        $user->otp = $otp;
        $user->save();

        Mail::send('emails.verifyemail', ['otp' => $otp], function ($message) use ($request) {
            $message->to(Auth::guard('merchant')->user()->email);
            $message->subject('Verify Email');
        });
        return redirect()->back()->with('success', 'Email Send Successfully!');
    }
    public function merchantapilogin(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:5',
        ]);
        if ($validator->fails()) {
            return response(['status' => false, 'errors' => $validator->errors()->all()], 422);
        }
        $user = Merchant::where('email', $request->email)->first();
        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                $token = $user->createToken('Laravel Password Grant Client')->accessToken;
                $response = ['status' => true, 'message' => "LoggedIn success!", 'token' => $token, 'data' => $user];
                return response($response, 200);
            } else {
                $response = ["message" => "Password mismatch"];
                return response($response, 422);
            }
        } else {
            $response = ["message" => 'User does not exist'];
            return response($response, 422);
        }
    }
}
