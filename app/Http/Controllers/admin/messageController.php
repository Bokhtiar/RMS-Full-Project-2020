<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\message;

class messageController extends Controller
{
    public function index($id){
      $meessage=message::find($id);
          $meessage['done']=1;
      $meessage->save();
      return back();
    }
 
    public function all_message(){
      $all_message=message::where('done',1)->latest()->get();
      return view('admin.message.all_message',compact('all_message'));
    }

    public function delete_message($id){
      $delete=message::find($id);
        $delete->delete();
      return redirect()->back();
    }
}
