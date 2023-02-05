<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\TempUser;
use App\Models\User;
use App\Mail\OtpMail;
use App\Models\Utility;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
//        dd($request->all());

        $username = $request->phonenumber;

        $user = User::where('email',$username)->orWhere('phonenumber',$username)->first();
        if($user!=null){
            if($user->email == $username){
                $genrate_otp_email = rand(100000,999999);
                $user->two_factor_code_mail=$genrate_otp_email;
                $user->save();
                try
                {
                    \Mail::to($username)->send(new OtpMail($user));
                }
                catch(\Exception $e)
                {
                    return redirect()->route('login')->with('error','E-Mail has been not sent due to SMTP configuration');
//            $smtp_error = __('E-Mail has been not sent due to SMTP configuration');
                }

                return redirect()->route('login.otp.mail',['id'=>$user->id]);

            }

            if($user->phonenumber == $username){
                $genrate_otp = rand(100000,999999);
                $user->two_factor_code=$genrate_otp;
                $user->save();
                try
                {
                    Utility::send_twilio_msg($user->phonenumber,'OTP FOR Talk To Topper Login '.$genrate_otp);
                }
                catch(\Exception $e)
                {
                    return redirect()->route('login')->with('error','Something went wrong');
//            $smtp_error = __('E-Mail has been not sent due to SMTP configuration');
                }

                return redirect()->route('login.otp.phone',['id'=>$user->id]);

            }
        }else{
            return redirect()->back()->with('error','Email or Mobile Number does not match to our records');
        }



//        $request->authenticate();
//
//        $request->session()->regenerate();
//
//        return redirect()->intended(RouteServiceProvider::HOME);
    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function loginotpmail(Request $request){
        $tempuser = User::find($request->id);
        return view('auth.login_otp_mail',compact('tempuser'));
    }
    public function OTPMailVerify(Request $request){
//        dd($request->all());
        $tempuser = User::find($request->temp_user_id);
        if($tempuser!=null){
            if($request->otpnumber == $tempuser->two_factor_code_mail){

                Auth::login($tempuser);

                return redirect(RouteServiceProvider::HOME);
//                $genrate_otp_phone = rand(100000,999999);
//                $tempuser->two_factor_code = $genrate_otp_phone;
//                $tempuser->save();
//                Utility::send_twilio_msg($tempuser->phonenumber,'OTP FOR Talk To Topper Login '.$genrate_otp_phone);
//                return redirect()->route('otp.phone',['id'=>$tempuser->id]);
            }else{
                return redirect()->back()->with('error','Please enter a valid OTP');
            }
        }else{
            return redirect()->back()->with('error','Please enter a valid OTP');
        }

    }

    public function loginotpphone(Request $request){
        $tempuser = User::find($request->id);
        return view('auth.login_otp_phone',compact('tempuser'));
    }
    public function OTPPhoneVerify(Request $request){
//        dd($request->all());
        $tempuser = User::find($request->temp_user_id);
        if($tempuser!=null){
            if($request->otpnumber == $tempuser->two_factor_code){
                Auth::login($tempuser);

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
