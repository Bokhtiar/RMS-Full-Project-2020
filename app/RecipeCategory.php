<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RecipeCategory extends Model
{
    protected $fillable=[
      'category_name','category_image','category_status',
    ];
}
