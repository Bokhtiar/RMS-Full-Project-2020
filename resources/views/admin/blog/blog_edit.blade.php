@extends('admin_dashboard')
@section('admin_content')

          <div class="  card text-dark">
              <div class="card-header">
                <a class="float-right btn btn-success" href="{{route('admin.blog.blog-view')}}"><i class="fas fa-th-list"></i>&nbsp;&nbsp;View Blog</a>
                <h3 class="card-title font-weight-bold">Blog Update Form</h3>
              </div>
              <!-- /.card-header -->
              <div class="row justify-content-center card-body">
                <div class="col-md-6">

                      <form role="form" method="POST" action="{{url('admin/blog/blog-update/'.$blog_edit->id)}}" enctype="multipart/form-data">
                        @csrf


                        <div class="form-group">
                          <label>Update Blog Title</label>
                          <input
                           type="text"
                           name="blog_title"
                           value="{{$blog_edit->blog_title}}"
                           class="form-control"
                           placeholder="type here blog title...">
                        </div>



                        <div class="form-group">
                          <label>Select blog Image</label>
                          <input
                          type="file"
                          name="blog_image"
                          class="form-control">
                        </div>
                        <div class="">
                          <strong>Old Image: <img src="{{asset($blog_edit->blog_image)}}" height="60px" width="90px;" alt=""> </strong>
                        </div>




                        <div class="">
                          <label for="">Blog Short Description</label>
                          <textarea
                          name="blog_short_description"
                          rows="4"
                          cols="40"
                          placeholder="type here blog short Description"
                          class="form-control">{{$blog_edit->blog_short_description}}</textarea>
                        </div><br>





                        <div class="form-group">
                          <label>Update Blog Description</label>
                          <textarea
                          name="blog_description"
                          rows="8"
                          cols="80">{{$blog_edit->blog_description}}</textarea>
                        </div>











                        <div class="form-group float-right">
                          <button
                          class="btn btn-info"
                          type="submit"
                          name="button"><i class="fas fa-plus-square"></i>&nbsp;&nbsp;Update Blog</button>
                        </div>

                      </form>

                </div>
              </div>
              </div>









@endsection
