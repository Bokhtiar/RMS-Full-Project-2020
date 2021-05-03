@extends('admin_dashboard')
@section('admin_content')



    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">

          <!-- /.card -->

          <div class="card">
            <div class="card-header">
              <a class="float-right btn btn-info" href="{{route('admin.Recipe.recipe-add')}}"><i class="fas fa-plus-square"></i>&nbsp;&nbsp;Add Recipe</a>
              <h3 class="card-title font-weight-bold">Recipe List</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Recipe Sl</th>
                  <th>Category Name</th>
                  <th>Recipe Name</th>
                  <th>Recipe Price</th>
                  <th>Recipe Image</th>
                  <th>Website Show</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  @foreach($show_recipe as $v_recipe)
                    <tr>
                      <td>{{$loop->index +1}}</td>
                      <td>{{$v_recipe->category->category_name}}</td>
                      <td>{{$v_recipe->recipe_name}}</td>
                      <td>{{$v_recipe->price}}</td>

                      <td><img src="{{asset($v_recipe->recipe_image)}}" height="60px" width="90px;" alt=""> </td>
                      <td>
                        @if($v_recipe->recipe_status==1)
                        <span class="bg-success h5">Published</span>&nbsp;&nbsp;
                        @else
                        <span class="bg-danger h5">None Published</span>&nbsp;&nbsp;
                        @endif
                      </td>
                      <td>
                        @if($v_recipe->recipe_status==1)
                        <a class="text-danger h5" href="{{url('admin/Recipe/unactive/'.$v_recipe->id)}}"><i class="fas fa-lightbulb"></i></a>&nbsp;&nbsp;
                        @else
                        <a class="text-success h5" href="{{url('admin/Recipe/active/'.$v_recipe->id)}}"><i class="fas fa-lightbulb"></i></a>&nbsp;&nbsp;
                        @endif
                        <a class="text-info h5" href="{{url('admin/Recipe/recipe-edit/'.$v_recipe->id)}}"><i class="fas fa-pen-alt"></i></a>&nbsp;&nbsp;
                        <a class="text-warning h5" href="{{url('admin/Recipe/recipe-single/'.$v_recipe->id)}}"><i class="far fa-eye"></i></a>&nbsp;&nbsp;
                        <a class="text-danger h5" href="{{url('admin/Recipe/recipe-delete/'.$v_recipe->id)}}"><i class="far fa-trash-alt"></i></a>&nbsp;&nbsp;

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
