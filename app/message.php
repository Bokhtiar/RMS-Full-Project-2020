<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\message;
use App\User;

class message extends Model
{
  protected $fillable=[
    'name','email','message','quantity','done','auth_id'
  ];


  public static function message(){
    $message_number=message::latest()->where('done',0)->get();
    $total_item=0;
    foreach($message_number as $number){
      $total_item +=$number->quantity;
    }
    return $total_item;
  }




  public static function message_list(){
    $message_number=message::latest()->where('done',0)->get();
    return $message_number;
  }



  public function User(){
    return $this->belongsTo(User::class);
  }

}
