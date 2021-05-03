<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Recipe;
use Illuminate\Support\Str;
use Auth;


class recipeController extends Controller
{
      public function index(){
        $show_recipe=Recipe::latest()->where('recipe_role',1)->get();
        return view('admin.recipe.recipe_view',compact('show_recipe'));
      }


      public function recipe_add(){
        return view('admin.recipe.recipe_add');
      }


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

        $recipe->save();
        return redirect()->back();
      }



      public function unactive($id){
        $unactive=Recipe::find($id);
          $unactive['recipe_status']=0;
        $unactive->save();
        return back();
      }


      public function active($id){
        $active=Recipe::find($id);
          $active['recipe_status']=1;
        $active->save();
        return back();
      }



      public function recipe_edit($id){
        $recipe_edit=Recipe::find($id);
        return view('admin.recipe.recipe_edit',compact('recipe_edit'));
      }



      public function recipe_update(Request $request,$id){
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
        return redirect()->route('admin.Recipe.recipe-view');
      }


      public function recipe_delete($id){
        $recipe_delete=Recipe::find($id);
          $recipe_delete->delete();
        return redirect()->route('admin.Recipe.recipe-view');
      }



      public function recipe_single($id){
        $recipe_single=Recipe::find($id);
        return view('admin.Recipe.single',compact('recipe_single'));
      }



      //user post pending list here
      public function pending_recipe(){
        $pending_recipe=Recipe::where('role_id',2)->where('recipe_status',0)->latest()->get();
        return view('admin.recipe.pending_recipe',compact('pending_recipe'));
      }




}
