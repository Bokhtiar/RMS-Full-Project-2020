<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Str;
use Hash;
use Auth;


class settingController extends Controller
{
    public function update_profile(){
      return view('admin.profile');
    }

    public function Password_change(){
      return view('admin.password_change');
    }

    public function new_admin(){
      return view('admin.new_admin');
    }

    public function register_admin(Request $request){
      $admin=new User;
        $admin['name']=$request->name;
        $admin['last_name']=$request->last_name;
        $admin['phone']=$request->phone;
        $admin['age']=$request->age;
        $admin['gender']=$request->gender;
        $admin['url']=$request->url;
        $admin['country']=$request->country;
        $admin['about']=$request->about;
        $admin['paypel']=$request->paypel;
        $admin['email']=$request->email;
        $admin['role_id']=1;


        $image=$request->file('image');
               if ($image){
               $image_name=Str::random(20);
               $ext=strtolower($image->getClientOriginalExtension());
               $image_full_name=$image_name.'.'.$ext;
               $upload_path='image/';
               $image_url=$upload_path.$image_full_name;
               $success=$image->move($upload_path,$image_full_name);
                   if ($success) {
                   $admin['image']=$image_url;

                    }
                }




      $admin['password']= Hash::make($request['password']);
      $admin->save();
      return redirect()->route('admin.dashboard');

    }
 
    public function Subscriber(){
      return view('admin.subscriber');
    }


      public function change_password(Request $request){
      $this->validate($request,[
        'old_password'=>'required',
        'password'=>'required|confirmed',
      ]);

      $hashedpassword=Auth::user()->password;
        if (Hash::check($request->old_password,$hashedpassword)) {
            if(!Hash::check($request->password,$hashedpassword)){
              $user=User::find(Auth::id());
              $user->password=Hash::make($request->password);
              $user->save();
              Auth::logout();
              return redirect()->route('login');
            }
            else {
              return redirect()->route('/');
            }
        }else {

          return redirect()->route('/');
        }
    }


    public function logout(){
      Auth::logout();
	return redirect('/');
    }


}
