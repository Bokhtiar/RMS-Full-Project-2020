@extends('user_dashboard')
@section('user_content')
<br><br><br>
<section class="content py-5">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-3">
        <a href="{{url('single-recipe/'.$single_view_recipe->id)}}" class="btn btn-primary btn-block mb-3">Back</a>

        <div class="card">
          <div class="card-header">
            <h5 class="card-title">{{$single_view_recipe->recipe_name}} Details</h5>


          </div>
          <div class="card-body p-0">
            <ul class="nav nav-pills flex-column">
              <li class="nav-item"><br>
                <form class="" action="{{url('user/cart-store/'.$single_view_recipe->id)}}" method="post">
                  @csrf
                  <input type="hidden" name="creator_id" value="{{$single_view_recipe->user_id}}">
                  <button type="submit" class="btn btn-info" name="button">Add to Cart</button>

                </form>

              </li>
<br>
              <li class="nav-item">
                <a  class="nav-link">
                   <img src="{{asset($single_view_recipe->recipe_image)}}" alt="">
                </a>
              </li>
              <li class="nav-item">
                <a  class="nav-link">
                   <strong>Recipe Name : <span>{{$single_view_recipe->recipe_name}}</span> </strong>
                </a>
              </li>
              <li class="nav-item">
                <a  class="nav-link">
                  <strong>Recipe Category Name : <span>{{$single_view_recipe->category->category_name}}</span> </strong>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link">
                   <strong>Recipe Price : <span>{{$single_view_recipe->price}} Balance</span> </strong>
                </a>
              </li>
              <li class="nav-item">
                <a  class="nav-link">
                   <strong>Recipe Creator : <span>{{$single_view_recipe->user->name}}</span> </strong>
                </a>
              </li>

            </ul>
          </div>
          <!-- /.card-body -->
        </div>

        <!-- /.card -->
      </div>
      <!-- /.col -->
    <div class="col-md-9">
      <div class="card card-primary card-outline">
        <div class="card-header">
          <h3 class="card-title">About {{$single_view_recipe->recipe_name}}</h3>


        </div>
        <!-- /.card-header -->
        <div class="card-body p-0">
          <div class="mailbox-read-info">
              <span class="mailbox-read-time float-right h5">{{$single_view_recipe->created_at->diffForHumans()}} </span>
          </div>
          <!-- /.mailbox-read-info -->

          <!-- /.mailbox-controls -->
          <br><br>
          <div class="mailbox-read-message">
            <p class="h4">{{$single_view_recipe->recipe_name}} Description</p>

            <p class="lead container">
              {{$single_view_recipe->recipe_about}}
            </p>

            <p class="form-inline">Thank you,<br></p>
          </div>
          <!-- /.mailbox-read-message -->
        </div>
        <!-- /.card-body -->
        <div class="card-footer bg-white" style=" margin-left: 30% " >
        <img src="{{asset($single_view_recipe->recipe_image)}}" height="300px" width="70%;" alt="">
        </div>
        <!-- /.card-footer -->

        <!-- /.card-footer -->
      </div>
      <!-- /. box -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->

@endsection
