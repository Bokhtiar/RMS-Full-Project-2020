@extends('user_dashboard')
@section('user_content')
<br><br>




<!--   section star -->
<div class="container py-5 " id="rcipecategory">


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
  </form><br><br>


        <div class="main_title">
            <h2 class="nomargin_top">Recipe Categories</h2>
            <hr class="divider">
        </div>
        <div class="row">
            <div class="above-sidebar full-width">
                <ul class="boxed">
                    @foreach(App\RecipeCategory::latest()->where('category_status',1)->get() as $v_cat)
                    <li class="light"><a href="{{url('category-ways-recipe/'.$v_cat->id)}}"><i class="icon icon-themeenergy_kebab"><img src="{{asset($v_cat->category_image)}}" alt=""> </i>
                                                        <span>{{$v_cat->category_name}}</span></a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
<!--   section end -->



<div class="container py-5 " id="rcipecategory">
  <div class="text-center">
    <h5 class="form-weight-bold h4">OUR HAPPY CLIENT RECIPE ADDED</h5><hr>  <br>
  </div>
<div class="row  py-5 ">
  @foreach(App\Recipe::latest()->where('role_id',2)->get() as $v_recipe)
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
</div>
</div>
@endsection
