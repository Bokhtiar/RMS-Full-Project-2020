<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\order;
use Auth;
use App\cart;

class orderController extends Controller
{
    public function paypal_order(Request $request){
      $order=new order;
        $order['reciver_name']=$request->reciver_name;
        $order['reciver_email']=$request->reciver_email;
        $order['reciver_phone']=$request->reciver_phone;
        $order['reciver_location']=$request->reciver_location;
        $order['comment']=$request->comment;
        $order['secret_code']=$request->secret;
        $order['user_id']=Auth::id();
      $order->save();

      foreach (cart::cart_item() as $v_cart) {
        $v_cart['order_id']=$order->id;
        $v_cart->save();
      }
      return redirect()->back();

    }
}
