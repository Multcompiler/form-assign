<?php

namespace App\Http\Controllers;

use App\LoginDetails;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Auth;

class TimeController extends Controller
{
   public function update_online_status(){
       if(LoginDetails::find(Auth::user()->id)->count() > 0){
           $login_details = LoginDetails::find(Auth::user()->id);
           $login_details->last_activity = Carbon::now();
           $login_details->save();
       }else{
           $login_details = new LoginDetails();
           $login_details->user_id = Auth::user()->id;
           $login_details->last_activity = Carbon::now();
           $login_details->save();
       }
   }
}
