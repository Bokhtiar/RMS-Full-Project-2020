<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Mail;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

use App\Notifications\NewUser;
use Illuminate\Support\Facades\Notification;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo ;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      if (Auth::check() && Auth::user()->role->id==1) {
                $this->redirectTo=route('admin.dashboard');
            }else {
                $this->redirectTo=route('user.dashboard');
            }
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {


      $request = request();

      $image=$request->file('image');
               if ($image){

                 $image_name=Str::random(20);
                 $ext=strtolower($image->getClientOriginalExtension());
                 $image_full_name=$image_name.'.'.$ext;
                 $upload_path='public/image/';
                 $image_url=$upload_path.$image_full_name;
                 $success=$image->move($upload_path,$image_full_name);
                     if ($success) {




                       return User::create([
                           'name' => $data['name'],

                           'last_name'=>$data['last_name'],
                           'phone'=>$data['phone'],
                           'image'=>$image_url,

                           'age'=>$data['age'],

                           'gender'=>$data['gender'],
                           'url'=>$data['url'],
                           'country'=>$data['country'],
                           'about'=>$data['about'],
                           'paypel'=>$data['paypel'],
                           'card' => $data['card'],

                           'email' => $data['email'],
                           'password' => Hash::make($data['password']),


                       ]);
                       \Mail::send('mail', array(), function ($message) use ($data) {
                            $message->from($data['email']);
                            $message->to('naiemsolimandishmize@gmail.com', 'Admin')->subject("Registration");
                        });


                     }
                        }








    }

}
