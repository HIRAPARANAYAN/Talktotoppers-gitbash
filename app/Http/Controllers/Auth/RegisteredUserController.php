<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\OtpMail;
use App\Models\User;
use App\Models\TempUser;
use App\Models\Utility;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create(Request $request)
    {

        $type = $request->type ?? '';
        return view('auth.register',compact('type'));
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        //dd($request->all());
        $request->validate([
            'name' => ['required', 'regex:/^[a-zA-Z]+$/u', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'unique:users'],
            'phonenumber' => ['required', 'unique:users'],
        ]);

        $genrate_otp_email = rand(100000,999999);

        $tempuser = TempUser::create([
            'name' => $request->name,
            'email' => $request->email,
            'type' => $request->type,
            'phonenumber' => $request->phonenumber,
            'two_factor_code_mail' => $genrate_otp_email,
        ]);

        try
        {
            \Mail::to($request->email)->send(new OtpMail($tempuser));
        }
        catch(\Exception $e)
        {
            return redirect()->route('register')->with('error','E-Mail has been not sent due to SMTP configuration');
//            $smtp_error = __('E-Mail has been not sent due to SMTP configuration');
        }

        return redirect()->route('otp.mail',['id'=>$tempuser->id]);

        //dd('success');


//        $user = User::create([
//            'name' => $request->name,
//            'email' => $request->email,
//            'password' => Hash::make($request->password),
//        ]);
//
//        event(new Registered($user));
//
//        Auth::login($user);
//
//        return redirect(RouteServiceProvider::HOME);
    }
    public function otpmail(Request $request){
        $tempuser = TempUser::find($request->id);
        return view('auth.otp_mail',compact('tempuser'));
    }
    public function OTPMailVerify(Request $request){
//        dd($request->all());
        $tempuser = TempUser::find($request->temp_user_id);
        if($tempuser!=null){
            if($request->otpnumber == $tempuser->two_factor_code_mail){
                $genrate_otp_phone = rand(100000,999999);
                $tempuser->two_factor_code = $genrate_otp_phone;
                $tempuser->save();
                Utility::send_twilio_msg($tempuser->phonenumber,'OTP FOR Talk To Topper Login '.$genrate_otp_phone);
                return redirect()->route('otp.phone',['id'=>$tempuser->id]);
            }else{
                return redirect()->back()->with('error','Please enter a valid OTP');
            }
        }else{
            return redirect()->back()->with('error','Please enter a valid OTP');
        }

    }

    public function otpphone(Request $request){
        $tempuser = TempUser::find($request->id);
        return view('auth.otp_phone',compact('tempuser'));
    }
    public function OTPPhoneVerify(Request $request){
//        dd($request->all());
        $tempuser = TempUser::find($request->temp_user_id);
        if($tempuser!=null){
            if($request->otpnumber == $tempuser->two_factor_code){
                $user = User::create([
                            'name' => $tempuser->name,
                            'email' => $tempuser->email,
                            'type' => $tempuser->type,
                            'two_factor_code' => $tempuser->two_factor_code,
                            'phonenumber' => $tempuser->phonenumber,
                            'two_factor_code_mail' => $tempuser->two_factor_code_mail,
                        ]);

                event(new Registered($user));

                Auth::login($user);

                return redirect(RouteServiceProvider::HOME);

                //return redirect()->route('otp.phone',['id'=>$tempuser->id]);
            }else{
                return redirect()->back()->with('error','Please enter a valid OTP');
            }
        }else{
            return redirect()->back()->with('error','Please enter a valid OTP');
        }

    }



}
