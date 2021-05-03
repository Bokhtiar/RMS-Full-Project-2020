<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\blog;

class blogController extends Controller
{
    public function single_blog($id){
      $single_blog=blog::find($id);
      return view('user.single_blog',compact('single_blog'));
    }


    public function all_blog(){
      $blog=blog::latest()->where('blog_status',1)->paginate(9);
      return view('user.blog_all',compact('blog'));
    }
}
