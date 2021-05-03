<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\subscriber;

class subscriberController extends Controller
{
    public function subscriber_store(Request $request){
      $subscriber=new subscriber;
        $subscriber['gmail']=$request->gmail;
      $subscriber->save();
      return redirect()->bacK();
    }
}
