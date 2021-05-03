<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Recipe;
use App\cart;
use Auth;

class cart extends Model
{
    protected $fillable=[
      'user_id','ip_address','recipe_id','quantity','order_id','creator_id','payment_status'
    ];

    public function user(){
      return $this->belongsTo(User::class);
    }

    public function recipe(){
      return $this->belongsTo(Recipe::class);
    }


    public function category(){
      return $this->belongsTo(RecipeCategory::class);
    }




    public static function cart_total_number(){
        $total=0;
        $cart=cart::where('ip_address',request()->ip())->where('user_id',Auth::id())->where('order_id',NULL)->get();
        foreach ($cart as $v_cart) {
          $total  +=$v_cart->quantity;
        }
        return $total;
    }


    public static function cart_item(){

        $cart=cart::where('ip_address',request()->ip())->where('user_id',Auth::id())->where('order_id',NULL)->get();

        return $cart;
    }
}
