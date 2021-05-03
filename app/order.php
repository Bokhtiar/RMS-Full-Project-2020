<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{
  protected $fillable=[
    'user_id','reciver_name','reciver_email','reciver_phone','reciver_location','order_status','comment','secret_code'
  ];



  public function user(){
    return $this->belongsTo(User::class);
  }
}
