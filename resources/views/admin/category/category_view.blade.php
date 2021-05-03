@extends('admin_dashboard')
@section('admin_content')



    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">

          <!-- /.card -->

          <div class="card">
            <div class="card-header">
              <a class="float-right btn btn-info" href="{{route('admin.RecipeCategory.category-add')}}"><i class="fas fa-plus-square"></i>&nbsp;&nbsp;Add Recipe Category</a>
              <h3 class="card-title font-weight-bold">Recipe Category List</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Category Sl</th>
                  <th>Category Name</th>
                  <th>Category Image</th>
                  <th>Website Show</th>
                  <th>Action</th>

                </tr>
                </thead>
                <tbody>
                  @foreach($show_category as $v_category)
                    <tr>
                      <td>{{$loop->index +1}}</td>
                      <td>{{$v_category->category_name}}</td>
                      <td><img src="{{asset($v_category->category_image)}}" height="60px" width="90px;" alt=""> </td>
                      <td>
                        @if($v_category->category_status==1)
                        <span class="bg-success h5" href="">published</span>&nbsp;&nbsp;
                        @else
                        <span class="bg-danger h5" href="">None published</span>&nbsp;&nbsp;
                        @endif

                      </td>
                      <td>
                        @if($v_category->category_status==1)
                        <a class="text-danger h5" href="{{url('admin/RecipeCategory/unactive/'.$v_category->id)}}"><i class="fas fa-lightbulb"></i></a>&nbsp;&nbsp;
                        @else
                        <a class="text-success h5" href="{{url('admin/RecipeCategory/active/'.$v_category->id)}}"><i class="fas fa-lightbulb"></i></a>&nbsp;&nbsp;
                        @endif
                        <a class="text-info h5" href="{{url('admin/RecipeCategory/edit/'.$v_category->id)}}"><i class="fas fa-pen-alt"></i></a>&nbsp;&nbsp;
                        <a class="text-danger h5" href="{{url('admin/RecipeCategory/category-delete/'.$v_category->id)}}"><i class="far fa-trash-alt"></i></a>
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
