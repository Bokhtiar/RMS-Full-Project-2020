@extends('admin_dashboard')
@section('admin_content')
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">
            <a href="{{route('admin.blog.blog-view')}}" class="btn btn-primary btn-block mb-3">Back</a>

            <div class="card">
              <div class="card-header">
                <h3 class="card-title">{{$blog_single->blog_title}} Details</h3>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                  </button>
                </div>
              </div>
              <div class="card-body p-0">
                <ul class="nav nav-pills flex-column">
                  <li class="nav-item">
                    <a href="mailbox.html" class="nav-link">
                       {{$blog_single->blog_title}}

                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      {{$blog_single->blog_short_description}}
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
              <h3 class="card-title">Read {{$blog_single->blog_title}}</h3>


            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
              <div class="mailbox-read-info">
                  <span class="mailbox-read-time float-right h5">{{$blog_single->created_at}} </span>
              </div>
              <!-- /.mailbox-read-info -->

              <!-- /.mailbox-controls -->
              <div class="mailbox-read-message">
                <p>{{$blog_single->blog_title}}</p>

        
                <br>


                <p>
                  <strong>Blog  Description</strong>
                  {{$blog_single->blog_description}}
                </p>


              </div>
              <!-- /.mailbox-read-message -->
            </div>
            <!-- /.card-body -->
            <div class="card-footer bg-white">
            <img src="{{asset($blog_single->blog_image)}}" height="300px" width="100%" alt="">
            </div>
            <p>Thanks,<br>{{auth::user()->name}}</p>
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
