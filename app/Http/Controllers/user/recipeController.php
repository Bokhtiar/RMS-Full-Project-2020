<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Recipe;
use Auth;
use App\notification;
use Illuminate\Support\Str;
use Session;

class recipeController extends Controller
{

  public function all_category(){
    return view('user.recipe_category');
  }
    public function category_ways_show_recipe($id){
      $recipe=Recipe::latest()->where('category_id',$id)->where('recipe_status',1)->where('recipe_role',1)->get();
      return view('user.category_ways_recipe',compact('recipe'));
    }

    public function single_recipe($id){
      $single_recipe=Recipe::find($id);
      return view('user.single_recipe',compact('single_recipe'));
    }

    public function single_view_recipe($id){
      $single_view_recipe=Recipe::find($id);
      return view('user.single_view_recipe',compact('single_view_recipe'));
    }


    public function recipe_like($id){
      $recipe_like=Recipe::find($id);
      $total=$recipe_like['like']+1;
      $recipe_like['like']=$total;
      $recipe_like->save();
      return back();
    }


    //user can recipe add so now this part is user recipe add
    public function recipe_store(Request $request){
      $recipe=new Recipe;
          $recipe['category_id']=$request->category_id;
          $recipe['recipe_name']=$request->recipe_name;
          $recipe['recipe_about']=$request->recipe_about;
          $recipe['price']=$request->price;
          $recipe['role_id']=Auth::user()->role_id;
          $recipe['user_id']=Auth::id();
          $recipe['recipe_role']=$request->recipe_role;

          $image=$request->file('recipe_image');
                 if ($image){
                 $image_name=Str::random(20);
                 $ext=strtolower($image->getClientOriginalExtension());
                 $image_full_name=$image_name.'.'.$ext;
                 $upload_path='image/';
                 $image_url=$upload_path.$image_full_name;
                 $success=$image->move($upload_path,$image_full_name);
                     if ($success) {
                     $recipe['recipe_image']=$image_url;

                      }
                  }
                  Session::flash('insert','Customer Added Sucessfully...');
      $recipe->save();

      $notification=new notification;
        $notification['name']=Auth::user()->name;
        $notification['email']=Auth::user()->email;
        $notification['image']=Auth::user()->image;
      $notification->save();

      return redirect()->back();
    }


    public function recipe_all($id){
      $view_recipe=Recipe::where('user_id',$id)->get();
      return view('user.profile.all_recipe',compact('view_recipe'));
    }


}
