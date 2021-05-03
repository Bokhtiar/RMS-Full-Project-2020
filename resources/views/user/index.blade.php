@extends('user_dashboard')
@section('user_content')
<section class="parallax-window" id="">
<div id="sub_header">
    <div class="container" id="sub_content" style="position:relative;">
        <div class="row">
            <div id="mySidenav" class="col-md-6 col-sm-6 col-xs-12  sidenav">
        <div class="row mt-220" > </div>
                <div class="row one">
                    <div class="col-lg-5">
                        <a href="#recipecategory" id="blog" style="">Recipe Categories <i class="fas fa-book-open"></i></a>
                    </div>
                </div>
                <div class="row two">
                    <div class="col-lg-5" style="">
                        <a href="#featuredRecipe" id="projects">Featured Recipes <span class="fas fa-utensils"></span></a>
                    </div>
                </div>
                <div class="row three">
                    <div class="col-lg-5">
                        <a href="#articale" id="contact">Featured Articles <span class="far fa-file-word"></span></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12 text-center reg-area">
                <h1 style="margin-top:10px;font-size: 20px;">You Can Register</h1>
                <h3 style="font-size: 22px;font-weight: bold;">Your Innovative Recipes</h3>
                <div style="font-size: 23px;font-weight: bold;color: white;margin-bottom:-50px;">
                    <span style="color: white;font-weight: bold;font-size: 28px;">For
                        FREE &amp; Make Money
                    </span>
                </div>
                <form method="post" action="{{url('search')}}" id="search_recipes" action="#">
                  @csrf
                    <div id="custom-search-input">
                        <div class="input-group ml-95">
                            <input type="text" name="search" id="recipes_search" class="search-query" placeholder="Search store" required="">
                            <span class="input-group-btn" style="font-size:12px;">
                            <input type="submit" class="btn_search" value="SEARCH">
                            </span>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</section>


<!--   section star -->
<div class="container " id="recipecategory">
        <div class="main_title">
            <h2 class="nomargin_top"    >Recipe Categories</h2>
            <hr class="divider">
        </div>
        <div class="row">
            <div class="above-sidebar full-width">
              <style media="screen">
                   .boxed img:hover {
                      width: 50px;
                    height: 50px;

                    -ms-transform: rotate(240deg);
                    transform: rotate(240deg);
                    }


                    </style>




                <ul class="boxed">
                    @foreach($cat as $v_cat)
                    <li class="light"><a href="{{url('category-ways-recipe/'.$v_cat->id)}}"><i class="icon icon-themeenergy_kebab"><img src="{{asset($v_cat->category_image)}}" alt=""> </i>
                                                        <span>{{$v_cat->category_name}}</span></a></li>

                    @endforeach
                </ul>
        </div>
    </div>
<!--   section end -->





<!-- section start  -->
<div class="container " id="featuredRecipe">
<div class="main_title">
<h2 class="nomargin_top">Featured Recipes</h2>
<hr class="divider">
</div>















<div class="row ">

@foreach($all_recipe as $v_recipe)
<div class="col-md-4 col-6">
            <div class="product-grid3">
              <div
                class="product-image3 embed-responsive embed-responsive-16by9"
              >
                <a href="{{url('single-recipe/'.$v_recipe->id)}}">
                  <img
                    class="pic-1 card-img-top embed-responsive-item"
                    src="{{asset($v_recipe->recipe_image)}}"
                  />
                  <img
                    class="pic-2"
                    src="{{asset($v_recipe->recipe_image)}}"
                  />
                </a>

              </div>
              <div class="product-content">
                <h3 class="title"><a href="{{url('single-recipe/'.$v_recipe->id)}}">{{$v_recipe->recipe_name}}</a></h3>
                <div class="price mr-2">
                  <a href="{{url('recipe-like/'.$v_recipe->id)}}">
                    <i class="fa fa-heart text-dark" aria-hidden="true">{{$v_recipe->like}}</i>
                  </a>
                  </div>
                <ul class="rating ml-3">
                  <li class="fa fa-star"></li>
                  <li class="fa fa-star"></li>
                  <li class="fa fa-star"></li>
                  <li class="fa fa-star "></li>
                  <li class="fa fa-star "></li>
                </ul>
              </div>
            </div>
          </div>
@endforeach

<div class="col-md-12 clearfix">
<div class="text-center">
{{$all_recipe->links()}}
</div>
</div>
</div>
</div>
<!-- section end  -->

























<!-- section start blog -->
<div class=" container py-5 bg-light ">


<div class="text-center">
  <span class=" font-weight-bold h2 ">DishMize In Numbers</span><br>
  <hr>
</div>
<br><br><br>



<div class="row">





  <div class="col-md-2 col-lg-2 col-6 mt-2">
    <?php
      $user=App\User::all()->count();
     ?>
    <div class="card text-center" style="width: 11rem;"><br>
      <div class=" text-center" style="width: 90px; margin-left: 26%;" >
        <img class="card-img-top" height="100px"  src="{{asset('font')}}/img/icon-1.png" alt="Card image cap">
      </div>

      <div class="card-body mt-2">
        <p class="card-text text-center"><span class="h3">{{$user}} </span>
        <br>
        <span class="h4">MEMBERS</span></p>
      </div>
    </div>

  </div>


  <div class="col-md-2 col-lg-2 col-6 mt-2">
    <?php
      $recipe=App\Recipe::all()->count();
     ?>
    <div class="card" style="width: 11rem;"><br>
        <div class=" text-center" style="width: 90px; margin-left: 26%;" >
      <img class="card-img-top mt-2" height="90px" src="{{asset('font')}}/img/icon-2.png" alt="Card image cap">
    </div>
      <div class="card-body mt-3">
        <p class="card-text text-center"><span class="h3">{{$recipe}}</span>
        <br>
        <span class="h4">RECIPES</span></p>
      </div>
    </div>

  </div>




  <div class="col-md-2 col-lg-2 col-6 mt-2">
    <?php
      $user=App\Recipe::all()->count();
      $blogs=App\blog::all()->count();
      $photo=$user+$blogs;
     ?>
    <div class="card" style="width: 11rem;"><br>
        <div class=" text-center" style="width: 90px; margin-left: 26%;" >
      <img class="card-img-top " height="115px" src="{{asset('font')}}/img/icon-3.png" alt="Card image cap">
    </div>
      <div class="card-body">
        <p class="card-text text-center">  <span class="h3">{{$photo}} </span>
          <br>
          <span class="h4">PHOTO</span></p>
      </div>
    </div>

  </div>




  <div class="col-md-2 col-lg-2 col-6 mt-2">
    <?php
      $user=App\Recipe::all()->count();
      $blogs=App\blog::all()->count();
      $photo=$user+$blogs;
     ?>
    <div class="card" style="width: 11rem;"><br>
        <div class=" text-center" style="width: 90px; margin-left: 26%;" >
      <img class="card-img-top mt-2" height="100px"  src="{{asset('font')}}/img/icon-4.png" alt="Card image cap">
    </div>
      <div class="card-body mt-2">
        <p class="card-text text-center"><span class="h3">{{$photo+13}} </span>
        <br>
        <span class="h4"> POSTS</span></p>
      </div>
    </div>

  </div>







  <div class="col-md-2 col-lg-2 col-6 mt-2">
    <?php
    $message=App\message::all()->count();
    ?>
    <div class="card" style="width: 11rem;"><br>
        <div class=" text-center" style="width: 90px; margin-left: 26%;" >
      <img class="card-img-top" height="115px" src="{{asset('font')}}/img/icon-5.png" alt="Card image cap">
    </div>
      <div class="card-body">
        <p class="card-text text-center"><span class="h3">{{$message}} </span>
        <br>
        <span class="h4">MESSAGES</span></p>
      </div>
    </div>

  </div>



    <div class="col-md-2 col-lg-2 col-6 mt-2">
      <?php
      $blogss=App\blog::all()->count();
       ?>
      <div class="card" style="width: 11rem;"><br>
          <div class=" text-center" style="width: 90px; margin-left: 26%;" >
        <img class="card-img-top mt-2" height="90px" src="{{asset('font')}}/img/icon-6.png" alt="Card image cap">
      </div>
        <div class="card-body mt-3">
          <p class="card-text text-center"><span class="h3">{{$blogss}} </span>
          <br>
          <span class="h4">ARTICLES</span></p>
        </div>
      </div>

    </div>






</div><br><br><br><br>
<div class="text-center">
  <span class="btn btn-info text-light p-3 font-weight-bold" ><a class="text-light " href="{{route('register')}}"><i class="fas fa-users h3"></i>&nbsp;&nbsp;&nbsp; DISHMIZE JOIN</a> </span>
</div>
<br><br>
</div>
<!-- end here -->

<br><br><br>

<section class="bg-light container">

  <div class="text-center"><br><br>
    <span class="font-weight-bold h3">Join for a Chat?</span><br><br><br>
    <a class="btn btn-info btn-lg" style="text-decoration: none; " href="https://us04web.zoom.us/j/78684438404" target="_blank"> <i class="fas fa-video h3"></i>&nbsp;&nbsp;&nbsp;Dishmizer's Zoom</a><br><br><br>
    <br>
  </div>

</section>





<!--articale start here -->
<!-- section start  -->
<div class="container py-5" id="articale">
<div class="main_title">
<h2 class="nomargin_top"> Article</h2>
<hr class="divider">
</div>
<div class="row">


@foreach($blog as $v_blog)


 
<div class="col-md-4 col-sm-4 col-6 mt-5 mt-5">
<div class="card" style=" ">
  <a href="{{url('single-blog/'.$v_blog->id)}}">
    <img style="background-image: cover; width: 100%; height: 170px;" src="{{asset($v_blog->blog_image)}}" alt="">
  </a>

    <span>  {{$v_blog->created_at->diffForHumans()}}</span>
    <h5><a style="text-decoration: none; color: black;" href="{{url('single-blog/'.$v_blog->id)}}">
    {{$v_blog->blog_title}}</a></h5>


</div>
</div>

@endforeach
<div class="col-md-12 clearfix">
<div class="text-center">
{{$blog->links()}}
</div>
</div>
</div>
</div>
<!-- section end  -->

<!-- article end here -->




<br><br>




@endsection
