@extends('admin_dashboard')
@section('admin_content')

          <div class="  card text-dark">
              <div class="card-header">
                <a class="float-right btn btn-success" href="{{route('admin.RecipeCategory.category-view')}}"><i class="fas fa-th-list"></i>&nbsp;&nbsp;View Recipe Category</a>
                <h3 class="card-title font-weight-bold">Recipe Category Form</h3>
              </div>
              <!-- /.card-header -->
              <div class="row justify-content-center card-body">
                <div class="col-md-6">

                      <form role="form" method="POST" action="{{route('admin.RecipeCategory.category-store')}}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                          <label>Select Recipe Image</label>
                          <input
                          type="file"
                          required
                          name="category_image"

                          class="form-control">
                        </div>


                        <div class="form-group">
                          <label>Enter Recipe Category Name</label>
                          <input
                           type="text"
                           name="category_name"
                           required
                           class="form-control"
                           placeholder="type here recipe name...">
                        </div>


                        <div class="form-group float-right">
                          <button
                          class="btn btn-info"
                          type="submit"
                          name="button"><i class="fas fa-plus-square"></i>&nbsp;&nbsp;Submit Recipe Category</button>
                        </div>

                      </form>

                </div>
              </div>
              </div>


@endsection
