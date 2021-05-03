<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;

class alluserController extends Controller
{
    public function all_user(){
      $all_user=User::where('role_id',2)->get();
      return view('admin.all_user',compact('all_user'));
    }


    public function delete($id){
      $delete=User::find($id);
      $delete->delete();
      return back();
    }



    public function user_singel_view($id){
      $single_user=User::find($id);
      return view('admin.single_profile',compact('single_user'));
    }


    public function all_admin(){
      $all_user=User::where('role_id',1)->get();
      return view('admin.all_user',compact('all_user'));
    }

}
