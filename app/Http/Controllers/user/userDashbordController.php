<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\RecipeCategory;
use App\blog;
use App\User;
use Auth;
use App\Recipe;

class userDashbordController extends Controller
{
  public function index(){
      $cat=RecipeCategory::latest()->where('category_status',1)->get();
      $blog=blog::latest()->where('blog_status',1)->paginate(6);
      $all_recipe=Recipe::latest()->where('recipe_role',2)->where('recipe_status',1)->paginate(12);
      return view('user.index',compact('cat','blog','all_recipe'));
  }


  public function all_user(){
    $all_user=User::latest()->where('role_id',2)->where('provider',NULL)->get();
    return view('user.profile.all_user',compact('all_user'));
  }


  public function single_user($id){
    $single_user=User::find($id);
    return view('user.profile.single_profile',compact('single_user'));
  }


  public function post_add(){
    return view('user.profile.add_post');
  }

  public function about(){
    return view('user.about');
  }


  public function contact(){
    return view('user.contact');
  }

  public function search(Request $request){
     $search=$request->search;
     $serach_post=Recipe::where('recipe_name', 'like','%'.$search.'%')->get();
     return view('user.search',compact('serach_post'));

  }


  public function logout(Request $request) {
  Auth::logout();
  return redirect('/');
  }


  public function community(){
    return view('user.community');
  }


  public function earn(){
    return view('user.profile.earn_money');
  }


  public function privaciy(){
    return view('user.privacy');
  }







}
