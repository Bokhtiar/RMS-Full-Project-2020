<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class withdrow extends Model
{
    protected $fillable=[
      'user_id','email','bank','status'
    ];

    public function user(){
      return $this->belongsTo(User::class);
    }
}
