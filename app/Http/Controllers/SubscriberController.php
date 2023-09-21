<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


use Illuminate\Http\Request;

class SubscriberController extends Controller
{
    public function getData(Request $request){
       $id = Auth::id();
       $data=User::find($id);
       

       $subscribe = new Subscriber;
       $subscribe ->name=$data['name'];
       $subscribe ->email=$data['email'];
       $subscribe ->fcm_token=$data['fcm_token'];
      
       $subscribe->save();
       return redirect('/home')->with('success','subscribe Successfully!!');
    }

   
}
