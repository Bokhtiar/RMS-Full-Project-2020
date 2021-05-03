@extends('user_dashboard')
@section('user_content')
<br><br>


<div class="section-padding py-5">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-12 col-lg-6">
        <img class="rounded" width="100%" height="400px;" src="{{asset($single_recipe->recipe_image) }}" alt="">
      </div>
      <div class="col-md-6 col-12 col-lg-6 pt-5 text-center">
        <div class="product-des">
          <h2>{{$single_recipe->recipe_name}}</h2>
          <h3>{{$single_recipe->category->category_name}}</h3>
          <strong> Price: <span>{{$single_recipe->price}}&nbsp; Balance</span> </strong><br><br>
          <span>
            <form class="" action="{{url('user/cart-store/'.$single_recipe->id)}}" method="post">
              @csrf
              <input type="hidden" name="creator_id" value="{{$single_recipe->user_id}}">
            <button type="submit" class="btn btn-info" name="button">Add to Cart</button>
            </form>

            <br>
             <a class="btn btn-info" href="{{url('single-view-recipe/'.$single_recipe->id)}}">View</a>

         </span>

          </div>
      </div>
    </div>
 </div>
<br><br>
<section class="container pt-5">
  <div class="pro-des">
     <div class="row">
       <div class="col-md-12">
         <div class="text">
           <h1 class="text-center">More Recipes</h1>
           <hr>
         </div>
       </div>
     </div>

    <div class="row  py-5 ">
      @foreach(App\Recipe::latest()->where('category_id',$single_recipe->category_id)->get() as $v_recipe)

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
  </section>
  </div>
</div>



@endsection
