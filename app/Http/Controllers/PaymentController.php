<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cartalyst\Stripe\Laravel\Facades\Stripe;
use App\cart;
use App\order;
use Auth;

class PaymentController extends Controller
{


    public function store(Request $request)
    {
      $v_order=new order;
        $v_order['reciver_name']=$request->reciver_name;
        $v_order['reciver_email']=$request->reciver_email;
        $v_order['reciver_phone']=$request->reciver_phone;
        $v_order['reciver_location']=$request->reciver_location;
        $v_order['comment']=$request->comment;
        $v_order['user_id']=0;
        $v_order['status']=0;
$v_order->save();
        foreach (cart::cart_item() as $v_cart) {
          $v_cart['order_id']=$v_order->id;
          $v_cart->save();
        }







    	try {
            $charge = Stripe::charges()->create([
                'amount' => $request->Balance,
                'currency' => "usd",
                'source' => $request->stripeToken,
                'description' => 'Order',
                'receipt_email' => "admin@email.com",
                'metadata' => [
                	'Reciver Name' => $request->reciver_name,
                  'Total balance' => $request->Balance,
                  'Reciver phone' => $request->reciver_phone,
                  'Reciver Email' => $request->reciver_email,
                  'Reciver location' => $request->reciver_location,
                  'comment' => $request->comment,
                ],
            ]);

        } catch (Exception $e) {


        }

        return redirect()->route('user.dashboard');
    }
}
