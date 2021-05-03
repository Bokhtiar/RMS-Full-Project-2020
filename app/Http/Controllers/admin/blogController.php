<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\blog;
use Auth;
use Illuminate\Support\Str;

class blogController extends Controller
{

    public function index(){
      $blog=blog::latest()->get();
      return view('admin.blog.blog_view',compact('blog'));
    }


    public function blog_add(){
      return view('admin.blog.blog_add');
    }


    public function blog_store(Request $request){
      $blog=new blog;
          $blog['blog_title']=$request->blog_title;
          $blog['blog_short_description']=$request->blog_short_description;
          $blog['blog_description']=$request->blog_description;
          $blog['auth_id']=Auth::id();

          $image=$request->file('blog_image');
                 if ($image){
                 $image_name=Str::random(20);
                 $ext=strtolower($image->getClientOriginalExtension());
                 $image_full_name=$image_name.'.'.$ext;
                 $upload_path='image/';
                 $image_url=$upload_path.$image_full_name;
                 $success=$image->move($upload_path,$image_full_name);
                     if ($success) {
                     $blog['blog_image']=$image_url;

                      }
                  }

      $blog->save();
      return redirect()->route('admin.blog.blog-view');
    }



    public function unactive($id){
      $unactive=blog::find($id);
        $unactive['blog_status']=0;
      $unactive->save();
      return redirect()->route('admin.blog.blog-view');
    }


    public function active($id){
      $active=blog::find($id);
        $active['blog_status']=1;
      $active->save();
      return redirect()->route('admin.blog.blog-view');
    }



    public function blog_edit($id){
      $blog_edit=blog::find($id);
      return view('admin.blog.blog_edit',compact('blog_edit'));
    }



    public function blog_update(Request $request,$id){
      $recipe_update=blog::find($id);
          $recipe_update['blog_title']=$request->blog_title;
          $recipe_update['blog_short_description']=$request->blog_short_description;
          $recipe_update['blog_description']=$request->blog_description;
          $recipe_update['auth_id']=Auth::id();

          $image=$request->file('blog_image');
                 if ($image){
                 $image_name=Str::random(20);
                 $ext=strtolower($image->getClientOriginalExtension());
                 $image_full_name=$image_name.'.'.$ext;
                 $upload_path='image/';
                 $image_url=$upload_path.$image_full_name;
                 $success=$image->move($upload_path,$image_full_name);
                     if ($success) {
                     $recipe_update['blog_image']=$image_url;

                      }
                  }

      $recipe_update->save();
      return redirect()->route('admin.blog.blog-view');
    }


    public function blog_delete($id){
      $recipe_delete=blog::find($id);
        $recipe_delete->delete();
      return redirect()->route('admin.Recipe.recipe-view');
    }


    public function blog_single($id){
      $blog_single=blog::find($id);
      return view('admin.blog.single',compact('blog_single'));
    }



}
