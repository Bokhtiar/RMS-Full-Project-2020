<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\RecipeCategory;
use Illuminate\Support\Str;

class recipeCategoryController extends Controller
{
      public function index(){
        $show_category=RecipeCategory::latest()->get();
        return view('admin.category.category_view',compact('show_category'));
      }


      public function category_add(){
        return view('admin.category.category_add');
      }


      public function category_store(Request $request){
        $category=new RecipeCategory;
            $category['category_name']=$request->category_name;

            $image=$request->file('category_image');
                   if ($image){
                   $image_name=Str::random(20);
                   $ext=strtolower($image->getClientOriginalExtension());
                   $image_full_name=$image_name.'.'.$ext;
                   $upload_path='image/';
                   $image_url=$upload_path.$image_full_name;
                   $success=$image->move($upload_path,$image_full_name);
                       if ($success) {
                       $category['category_image']=$image_url;

                        }
                    }

        $category->save();
        return redirect()->route('admin.RecipeCategory.category-view');
      }



      public function unactive($id){
        $unactive=RecipeCategory::find($id);
          $unactive['category_status']=0;
        $unactive->save();
        return redirect()->route('admin.RecipeCategory.category-view');
      }


      public function active($id){
        $active=RecipeCategory::find($id);
          $active['category_status']=1;
        $active->save();
        return redirect()->route('admin.RecipeCategory.category-view');
      }



      public function edit($id){
        $category_edit=RecipeCategory::find($id);
        return view('admin.category.category_edit',compact('category_edit'));
      }



      public function category_update(Request $request,$id){
        $category_update=RecipeCategory::find($id);
        $category_update['category_name']=$request->category_name;

        $image=$request->file('category_image');
               if ($image){
               $image_name=Str::random(20);
               $ext=strtolower($image->getClientOriginalExtension());
               $image_full_name=$image_name.'.'.$ext;
               $upload_path='image/';
               $image_url=$upload_path.$image_full_name;
               $success=$image->move($upload_path,$image_full_name);
                   if ($success) {
                   $category_update['category_image']=$image_url;

                    }
                }

        $category_update->save();
        return redirect()->route('admin.RecipeCategory.category-view');
      }



      public function category_delete($id){
        $category_delete=RecipeCategory::find($id);
          $category_delete->delete();
        return redirect()->route('admin.RecipeCategory.category-view');
      }





}
