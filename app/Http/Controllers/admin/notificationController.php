<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\notification;

class notificationController extends Controller
{
    public function all_notification(){
      $all_notification=notification::all();
      return view('admin.notification.all_notification',compact('all_notification'));
    }
}
