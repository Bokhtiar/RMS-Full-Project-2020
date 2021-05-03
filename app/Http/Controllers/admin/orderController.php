<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\order;
use App\cart;
use App\withdrow;

class orderController extends Controller
{
        public function index(){
          $order=order::latest()->get();
              return view('admin.order',compact('order'));
        }

        public function single_view($id){
          $order_id=order::find($id);
          return view('admin.single_order',compact('order_id'));
        }



                public function update(Request $request,$id){
                  $update =cart::find($id);
                  $update['quantity']=$request->quantity;
                  $update->save();
                  return back();
                }
                public function delete($id){
                  $delete=cart::find($id);
                  $delete->delete();
                  return back();
                }


                public function successfull($id){
                  $update =order::find($id);
                  $update['status']=1;
                  $update->save();
                  return back();
                }


                public function order_delete($id){
                  $delete=order::find($id);
                  $delete->delete();
                  return back();
                }



                public function user_payment(){
                  return view('admin.user_payment');
                }


                public function view_profile($id){
                  $view_profile=cart::where('creator_id',$id)->whereNotNull('order_id')->where('payment_status',0)->get();
                  return view('admin.get20%_profile',compact('view_profile'));
                }


                public function confirm_order($id){
                  $withdrow=withdrow::find($id);
                    $withdrow['status']=1;
                  $withdrow->save();
                  return back();
                }


                public function cart_status($id){
                    $cart=cart::find($id);
                      $cart['payment_status']=1;
                    $cart->save();
                    return back();
                }
}
