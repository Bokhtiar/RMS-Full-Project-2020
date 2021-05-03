@extends('user_dashboard')
@section('user_content')


<br><br><br>
<section class="container py-5">

<div class=" text-center">
  <p class="font-weight-bold h4">Search Suggest Recipe</p>
</div>
<hr>
<br><br>
<div class=" row  ">
  @foreach($serach_post as $v_recipe)

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
</section>
@endsection
