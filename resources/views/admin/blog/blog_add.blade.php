@extends('admin_dashboard')
@section('admin_content')

          <div class="  card text-dark">
              <div class="card-header">
                <a class="float-right btn btn-success" href="{{route('admin.blog.blog-view')}}"><i class="fas fa-th-list"></i>&nbsp;&nbsp;View Blog</a>
                <h3 class="card-title font-weight-bold">Blog Form</h3>
              </div>
              <!-- /.card-header -->
              <div class="row justify-content-center card-body">
                <div class="col-md-6">

                      <form role="form" method="POST" action="{{route('admin.blog.blog-store')}}" enctype="multipart/form-data">
                        @csrf


                        <div class="form-group">
                          <label>Enter Blog Title</label>
                          <input
                           type="text"
                           name="blog_title"
                           class="form-control"
                           required
                           placeholder="type here blog title...">
                        </div>



                        <div class="form-group">
                          <label>Select blog Image</label>
                          <input
                          type="file" required
                          name="blog_image"
                          class="form-control">
                        </div>




                        <div class="">
                          <label for="">Blog Short Description</label>
                          <textarea
                          name="blog_short_description"
                          rows="4"
                          required
                          cols="40"
                          placeholder="type here blog short Description"
                          class="form-control"></textarea>
                        </div><br>



                        <div class="">
                          <label for="">Blog  Description</label>
                          <textarea
                          name="blog_description"
                          required
                          rows="4"
                          cols="40"
                          placeholder="type here blog short Description"
                          class="form-control"></textarea>
                        </div><br>















                        <div class="form-group float-right">
                          <button
                          class="btn btn-info"
                          type="submit"
                          name="button"><i class="fas fa-plus-square"></i>&nbsp;&nbsp;Submit Blog</button>
                        </div>

                      </form>

                </div>
              </div>
              </div>









@endsection
