<?php

namespace App\Http\Controllers;

use App\Mail\OtpMail;
use App\Models\TempUser;
use App\Models\User;
use App\Models\UserRequests;
use App\Models\Utility;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function profile(){
        $user = \Auth::user();
        return view('user.profile',compact('user'));
    }

    public function update(Request $request){
//        dd($request->all());

        $request->validate([
            'name' => ['required'],
            'pan' => ['required','regex:/[A-Z]{5}[0-9]{4}[A-Z]{1}/'],
            'aadhar' => ['required','regex:/^[2-9]{1}[0-9]{3}\s{1}[0-9]{4}\s{1}[0-9]{4}$/'],
            'category' => ['required'],
            'exam_ebility' => ['required'],
            'adhar_file' => ['mimes:pdf','max:2240'],
            'pan_card_file' => ['mimes:pdf','max:2240'],
            'rank_file' => ['mimes:pdf','max:2240'],
            'college_name_file' => ['mimes:pdf','max:2240'],
        ]);

        $fileNameToStore = '';
        $fileNameToStore1 = '';
        $fileNameToStore2 = '';
        $fileNameToStore3 = '';
        $fileNameToStore4 = '';

        if(!empty($request->adhar_file))
        {
            $adhar_file = $request->adhar_file;
            $filenameWithExt = $adhar_file->getClientOriginalName();
            $extension       = $adhar_file->getClientOriginalExtension();
            $fileNameToStore = 'adhar_file' . '_' . time() . '.' . $extension;
            $file_name[]     = $fileNameToStore;
            $dir             = storage_path('uploads/users/'.\Auth::user()->id.'/');
            if(!file_exists($dir))
            {
                mkdir($dir, 0777, true);
            }
            $adhar_path = $adhar_file->storeAs('uploads/users/'.\Auth::user()->id, $fileNameToStore);
        }

        if(!empty($request->pan_card_file))
        {
            $pan_card_file = $request->pan_card_file;
            $filenameWithExt = $pan_card_file->getClientOriginalName();
            $extension1       = $pan_card_file->getClientOriginalExtension();
            $fileNameToStore1 = 'pan_card_file' . '_' . time() . '.' . $extension1;
            $dir1             = storage_path('uploads/users/'.\Auth::user()->id.'/');
            if(!file_exists($dir1))
            {
                mkdir($dir1, 0777, true);
            }
            $pan_card_file_path = $pan_card_file->storeAs('uploads/users/'.\Auth::user()->id, $fileNameToStore1);
        }

        if(!empty($request->rank_file))
        {
            $rank_file = $request->rank_file;
            $filenameWithExt2 = $rank_file->getClientOriginalName();
            $extension2       = $rank_file->getClientOriginalExtension();
            $fileNameToStore2 = 'rank_file' . '_' . time() . '.' . $extension2;
            $dir2             = storage_path('uploads/users/'.\Auth::user()->id.'/');
            if(!file_exists($dir2))
            {
                mkdir($dir2, 0777, true);
            }
            $rank_file_path = $rank_file->storeAs('uploads/users/'.\Auth::user()->id, $fileNameToStore2);
        }

        if(!empty($request->college_name_file))
        {
            $college_name_file = $request->college_name_file;
            $filenameWithExt = $college_name_file->getClientOriginalName();
            $extension3       = $college_name_file->getClientOriginalExtension();
            $fileNameToStore3 = 'college_name_file' . '_' . time() . '.' . $extension3;
            $file_name[]     = $fileNameToStore3;
            $dir3             = storage_path('uploads/users/'.\Auth::user()->id.'/');
            if(!file_exists($dir3))
            {
                mkdir($dir3, 0777, true);
            }
            $college_name_file_path = $college_name_file->storeAs('uploads/users/'.\Auth::user()->id, $fileNameToStore3);
        }

        if(!empty($request->avatar))
        {

            $avatar_file = $request->avatar;
            $filenameWithExt = $avatar_file->getClientOriginalName();
            $extension4       = $avatar_file->getClientOriginalExtension();
            $fileNameToStore4 = 'avatar_file' . '_' . time() . '.' . $extension4;
            $file_name[]     = $fileNameToStore4;
            $dir4             = storage_path('uploads/users/'.\Auth::user()->id.'/');
            if(!file_exists($dir4))
            {
                mkdir($dir4, 0777, true);
            }
            $fileNameToStore4 = $avatar_file->storeAs('uploads/users/'.\Auth::user()->id, $fileNameToStore4);
        }
//        dd();
        $user = \Auth::user()->id;
        $user = User::find($user);
        if($fileNameToStore != ''){
            $user->adhar_file = $fileNameToStore;
        }
        if($fileNameToStore1 != ''){
            $user->pan_card_file = $fileNameToStore1;
        }
        if($fileNameToStore2 != ''){
            $user->rank_file = $fileNameToStore2;
        }
        if($fileNameToStore3 != ''){
            $user->college_name_file = $fileNameToStore3;
        }
        if($fileNameToStore4 != ''){
            $user->avatar = $fileNameToStore4;
        }





        $user->name = $request->name;
        $user->pan_card = $request->pan;
        $user->aadhar = $request->aadhar;
        $user->category = $request->category;
        $user->exam_ebility = implode(',',$request->exam_ebility);
        $user->save();

        $user_request = UserRequests::where('user_id',$user->id)->first();
        if($user_request == null){
            $user_request = new UserRequests();
            $user_request->user_id = $user->id;
            $user_request->save();
        }

        return redirect()->route('waiting_page',$user->id);
    }

    public function waiting_page($id){
        $user = User::find($id);
        if(!is_null($user) && $user->is_active == 0){
            return view('waiting_page');
        }else{
            return redirect()->route('dashboard');
        }


    }

    public function requests(){
        $requests = UserRequests::all();
        return view('requests.index',compact('requests'));
    }

    public function requestsUpdate($status,$id){
        $user = User::find($id);
        if($user != null){
            if($status == 'approve'){
                $user->is_active = 1;
                $user->save();
            }
            if($status == 'reject'){
                $user->is_active = 0;
                $user->save();
            }

            $request_user = UserRequests::where('user_id',$id)->first()->delete();

            return redirect()->route('admin.requests');
        }else{
            return redirect()->route('admin.requests');
        }
        $requests = UserRequests::all();
        return view('requests.index',compact('requests'));
    }

    public function resend(Request $request){
        if($request->type){
            if($request->user_type && $request->user_type == 'user'){
                $user = User::where('id',$request->user_id)->first();
            }elseif ($request->user_type && $request->user_type == 'temp_user'){
                $user = TempUser::where('id',$request->user_id)->first();
            }else{
                return redirect()->back();
            }
            if($request->type == 'email'){
                try
                {
                    \Mail::to($user->email)->send(new OtpMail($user));
                }
                catch(\Exception $e)
                {
                    return redirect()->back()->with('error','Something went wrong');
                }
            }elseif ($request->type == 'phone'){
                try
                {
                    Utility::send_twilio_msg($user->phonenumber,'OTP FOR Talk To Topper Login '.$user->two_factor_code);
                }
                catch(\Exception $e)
                {
                    return redirect()->back()->with('error','Something went wrong');
                }
            }else{
                return redirect()->back()->with('error','Something went wrong');
            }
        }else{
            return redirect()->back()->with('error','Something went wrong');
        }
        return redirect()->back();
    }



}
