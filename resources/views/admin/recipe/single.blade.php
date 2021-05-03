@extends('admin_dashboard')
@section('admin_content')
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">
            <a href="{{route('admin.Recipe.recipe-view')}}" class="btn btn-primary btn-block mb-3">Back</a>

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">{{$recipe_single->recipe_name}} Details</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                  </button>
                </div>
              </div>
              <div class="card-body p-0">
                <ul class="nav nav-pills flex-column">
                  <li class="nav-item">
                    <a  class="nav-link">
                       <img src="{{asset($recipe_single->recipe_image)}}" alt="">
                    </a>
                  </li>
                  <li class="nav-item">
                    <a  class="nav-link">
                       <strong>Recipe Name : <span>{{$recipe_single->recipe_name}}</span> </strong>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a  class="nav-link">
                      <strong>Recipe Category Name : <span>{{$recipe_single->category->category_name}}</span> </strong>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link">
                       <strong>Recipe Price : <span>{{$recipe_single->price}}</span> </strong>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a  class="nav-link">
                       <strong>Recipe Creator : <span>{{$recipe_single->user->name}}</span> </strong>
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
              <h3 class="card-title">Read {{$recipe_single->recipe_name}}</h3>


            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
              <div class="mailbox-read-info">
                  <span class="mailbox-read-time float-right h5">{{$recipe_single->created_at}} </span>
              </div>
              <!-- /.mailbox-read-info -->

              <!-- /.mailbox-controls -->
              <div class="mailbox-read-message">
                <p>{{$recipe_single->recipe_name}} Description</p>

                <p>
                  {{$recipe_single->recipe_about}}
                </p>

                <p>Thanks,<br>{{auth::user()->name}}</p>
              </div>
              <!-- /.mailbox-read-message -->
            </div>
            <!-- /.card-body -->
            <div class="card-footer bg-white">
            <img src="{{asset($recipe_single->recipe_image)}}" height="300px" width="100px" alt="">
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
