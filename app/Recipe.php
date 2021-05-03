<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\RecipeCategory;
use App\User;

class Recipe extends Model
{
  protected $fillable=[
    'category_id','recipe_name','recipe_image','recipe_about','role_id','user_id','recipe_status','price','like','recipe_role'
  ];


  public function category(){
    return $this->belongsTo(RecipeCategory::class);
  }

  public function user(){
    return $this->belongsTo(User::class);
  }

}
