@extends('user_dashboard')
@section('user_content')
<br><br>
<!-- section start  -->
<div class="container py-5">
<div class="main_title">
<h2 class="nomargin_top"> Recipes</h2>
<hr class="divider">
</div>
<div class="row">


@foreach($recipe as $v_recipe)
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
</div>
</div>
</div>
</div>
@endsection
