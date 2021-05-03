@extends('admin_dashboard')
@section('admin_content')

          <div class="  card text-dark">
              <div class="card-header">
                <a class="float-right btn btn-success" href="{{route('admin.RecipeCategory.category-view')}}"><i class="fas fa-th-list"></i>&nbsp;&nbsp;View Recipe Category</a>
                <h3 class="card-title font-weight-bold">Recipe Category Update Form</h3>
              </div>
              <!-- /.card-header -->
              <div class="row justify-content-center card-body">
                <div class="col-md-6">

                      <form role="form" method="POST" action="{{url('admin/RecipeCategory/category-update/'.$category_edit->id)}}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                          <label>Update Recipe Image</label>
                          <input
                          type="file"
                          name="category_image"
                          class="form-control">
                        </div>
                        <div class="">
                          <strong>Old Image: <img src="{{asset($category_edit->category_image)}}" height="60px" width="90px;" alt=""> </strong>
                        </div>


                        <div class="form-group">
                          <label>Upate Recipe Category Name</label>
                          <input
                           type="text"
                           name="category_name"
                           class="form-control"
                           value="{{$category_edit->category_name}}"
                           placeholder="type here recipe name...">
                        </div>


                        <div class="form-group float-right">
                          <button
                          class="btn btn-info"
                          type="submit"
                          name="button"><i class="fas fa-pen-alt"></i>&nbsp;&nbsp;Update Recipe Category</button>
                        </div>

                      </form>

                </div>
              </div>
              </div>


@endsection
