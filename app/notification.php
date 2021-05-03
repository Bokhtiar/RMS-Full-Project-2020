<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\notification;

class notification extends Model
{

    protected $fillable=[
      'name','email','notification','image','quantity','done',
    ];


    public static function notification_number(){
      $notification_number=notification::latest()->where('done',0)->get();
      $total_item=0;
      foreach($notification_number as $number){
        $total_item +=$number->quantity;
      }
      return $total_item;
    }




    public static function notification_list(){
      $notification_number=notification::latest()->where('done',0)->get();
      return $notification_number;
    }




}
