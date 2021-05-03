<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\message;

class messageController extends Controller
{
    public function message_store(Request $request){
      $message=new message;
        $message['name']=$request->name;
        $message['email']=$request->email;
        $message['message']=$request->message;
      $message->save();
      return redirect()->back();
    }
}
