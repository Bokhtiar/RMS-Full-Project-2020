<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class blog extends Model
{
    protected $fillable=[
      'blog_title','blog_short_description','blog_image','blog_description','blog_status','auth_id',
    ];

}
