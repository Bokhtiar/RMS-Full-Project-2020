<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Recipe;
use Auth;
use Illuminate\Support\Str;

class featuredRecipeController extends Controller
{
    public function view(){
      $featured_recipe=Recipe::latest()->where('recipe_role',2)->get();
      return view('admin.Featuredrecipe.Featuredrecipe_view',compact('featured_recipe'));
    }


    public function add(){
      return view('admin.Featuredrecipe.Featuredrecipe_add');
    }


    public function store(Request $request){
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

      $recipe->save();
      return redirect()->route('admin.FeaturedRecipe.featuredrecipe-view');
    }



    public function unactive($id){
      $unactive=Recipe::find($id);
        $unactive['recipe_status']=0;
      $unactive->save();
      return redirect()->route('admin.FeaturedRecipe.featuredrecipe-view');
    }


    public function active($id){
      $active=Recipe::find($id);
        $active['recipe_status']=1;
      $active->save();
      return redirect()->route('admin.FeaturedRecipe.featuredrecipe-view');
    }

    public function featuredrecipe_edit($id){
      $recipe_edit=Recipe::find($id);
      return view('admin.FeaturedRecipe.featuredrecipe_edite',compact('recipe_edit'));
    }

    public function featuredrecipe_update(Request $request,$id){
      $recipe_update=Recipe::find($id);
          $recipe_update['category_id']=$request->category_id;
          $recipe_update['recipe_name']=$request->recipe_name;
          $recipe_update['recipe_about']=$request->recipe_about;
          $recipe_update['price']=$request->price;
          $recipe_update['recipe_role']=$request->recipe_role;
          $recipe_update['user_id']=Auth::id();
          $recipe_update['role_id']=Auth::user()->role_id;

          $image=$request->file('recipe_image');
                 if ($image){
                 $image_name=Str::random(20);
                 $ext=strtolower($image->getClientOriginalExtension());
                 $image_full_name=$image_name.'.'.$ext;
                 $upload_path='image/';
                 $image_url=$upload_path.$image_full_name;
                 $success=$image->move($upload_path,$image_full_name);
                     if ($success) {
                     $recipe_update['recipe_image']=$image_url;

                      }
                  }

      $recipe_update->save();
      return redirect()->route('admin.FeaturedRecipe.featuredrecipe-view');
    }



    public function featuredrecipe_single($id){
      $featured_recipe_single=Recipe::find($id);
        return view('admin.Featuredrecipe.featuredsingle',compact('featured_recipe_single'));

    }


    public function featuredrecipe_delete($id){
      $featured_recipe_delete=Recipe::find($id);
      $featured_recipe_delete->delete();
        return redirect()->route('admin.FeaturedRecipe.featuredrecipe-view');
    }


}
