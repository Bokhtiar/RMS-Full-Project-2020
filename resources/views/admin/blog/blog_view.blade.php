@extends('admin_dashboard')
@section('admin_content')



    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">

          <!-- /.card -->

          <div class="card">
            <div class="card-header">
              <a class="float-right btn btn-info" href="{{route('admin.blog.blog-add')}}"><i class="fas fa-plus-square"></i>&nbsp;&nbsp;Add Blog</a>
              <h3 class="card-title font-weight-bold">blog List</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Recipe Sl</th>
                  <th>Blog Title</th>
                  <th>Blog Image</th>
                  <th>Website Status</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  @foreach($blog as $v_blog)
                    <tr>
                      <td>{{$loop->index +1}}</td>
                      <td>{{$v_blog->blog_title}}</td>
                      <td><img src="{{asset($v_blog->blog_image)}}" height="60px" width="90px;" alt=""> </td>
                      <td>
                      @if($v_blog->blog_status==1)
                      <a class="bg-success h5" >Published</a>&nbsp;&nbsp;
                      @else
                      <a class="bg-danger">None Published</a>&nbsp;&nbsp;
                      @endif
                      </td>
                      <td>
                        @if($v_blog->blog_status==1)
                        <a class="text-danger h5" href="{{url('admin/blog/unactive/'.$v_blog->id)}}"><i class="fas fa-lightbulb"></i></a>&nbsp;&nbsp;
                        @else
                        <a class="text-success h5" href="{{url('admin/blog/active/'.$v_blog->id)}}"><i class="fas fa-lightbulb"></i></a>&nbsp;&nbsp;
                        @endif
                        <a class="text-info h5" href="{{url('admin/blog/blog-edit/'.$v_blog->id)}}"><i class="fas fa-pen-alt"></i></a>&nbsp;&nbsp;
                        <a class="text-danger h5" href="{{url('admin/blog/blog-delete/'.$v_blog->id)}}"><i class="far fa-trash-alt"></i></a>
                        <a class="text-warning h5" href="{{url('admin/blog/blog-single/'.$v_blog->id)}}"><i class="far fa-eye"></i></a>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>




@endsection
