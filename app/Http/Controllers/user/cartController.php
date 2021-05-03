<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\cart;


class cartController extends Controller
{
      public function cart_store(Request $request, $id){
        $cart=new cart;
          $cart['recipe_id']=$id;
          $cart['user_id']=Auth::id();
          $cart['creator_id']=$request->creator_id;
          $cart['ip_address']=request()->ip();
        $cart->save();
        return back();
      }


      public function cart_product_all(){
        return view('user.cart_all');
      }

      public function order(){
        return view('user.order');
      }

      public function update(Request $request,$id){
        $update=cart::find($id);
        $update['quantity']=$request->quantity;
        $update->save();
        return back();
      }


      public function delete($id){
        $delete=cart::find($id);
        $delete->delete();
        return back();
      }


      public function paypal(){
        return view('user.paypal_payment');
      }
}
