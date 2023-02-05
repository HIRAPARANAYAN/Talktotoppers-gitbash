<?php

namespace App\Http\Controllers;

use App\Models\Avaibility;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function landing(){

        if (\Auth::check()) {
            return redirect()->route('dashboard');
        }else{
            return view('welcome');
        }
    }
    public function index(){
        if(\Auth::user()->type == 'admin'){
            return view('dashboard.admin_dashboard');
        }elseif (\Auth::user()->type == 'toper'){

            if(\Auth::user()->is_active == 0){
                return view('dashboard.blur_dashboard');
            }
            if(\Auth::user()->is_active == 1){
                $arrayJson = [];
                $avaibilities = Avaibility::where('toper_id',\Auth::user()->id)->get();
                foreach($avaibilities as $appointent)
                {

                    $start_date = date("Y-m-d",strtotime($appointent->date)).' '.$appointent->start_time;
                    $end_date = date("Y-m-d",strtotime($appointent->date)).' '.$appointent->end_time;

                    $arrayJson[] = [
                        "title" =>$appointent->start_time .' to '. $appointent->end_time,
                        "start" => $start_date,
                        "end" => $end_date ,
                        "url" => route('avaiblity.add',$appointent->date),
                        "className" =>  'event-primary',
                        "allDay" => true,
                    ];
                }
                return view('dashboard.dashboard',compact('arrayJson'));
            }
        }
        elseif (\Auth::user()->type == 'student'){

            return view('dashboard.student_dashboard');
//            dd(\Auth::user());
        }
    }
}
