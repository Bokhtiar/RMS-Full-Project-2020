@extends('admin_dashboard')
@section('admin_content')



    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">

          <!-- /.card -->

          <div class="card">
            <div class="card-header">
              <a class="float-right btn btn-info" href="{{route('admin.FeaturedRecipe.featuredrecipe-add')}}"><i class="fas fa-plus-square"></i>&nbsp;&nbsp;Add  Featured Recipe</a>
              <h3 class="card-title font-weight-bold">Featured Recipe List</h3>
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
                  @foreach($featured_recipe as $v_featuredrecipe)
                    <tr>
                      <td>{{$loop->index +1}}</td>
                      <td>{{$v_featuredrecipe->category->category_name}}</td>
                      <td>{{$v_featuredrecipe->recipe_name}}</td>
                      <td>{{$v_featuredrecipe->price}}</td>

                      <td><img src="{{asset($v_featuredrecipe->recipe_image)}}" height="60px" width="90px;" alt=""> </td>
                      <td>
                        @if($v_featuredrecipe->recipe_status==1)
                        <span class="bg-success h5">Published</span>&nbsp;&nbsp;
                        @else
                        <span class="bg-danger h5">None Published</span>&nbsp;&nbsp;
                        @endif
                      </td>
                      <td>
                        @if($v_featuredrecipe->recipe_status==1)
                        <a class="text-danger h5" href="{{url('admin/FeaturedRecipe/unactive/'.$v_featuredrecipe->id)}}"><i class="fas fa-lightbulb"></i></a>&nbsp;&nbsp;
                        @else
                        <a class="text-success h5" href="{{url('admin/FeaturedRecipe/active/'.$v_featuredrecipe->id)}}"><i class="fas fa-lightbulb"></i></a>&nbsp;&nbsp;
                        @endif
                        <a class="text-info h5" href="{{url('admin/FeaturedRecipe/featuredrecipe-edit/'.$v_featuredrecipe->id)}}"><i class="fas fa-pen-alt"></i></a>&nbsp;&nbsp;
                        <a class="text-warning h5" href="{{url('admin/FeaturedRecipe/featuredrecipe-single/'.$v_featuredrecipe->id)}}"><i class="far fa-eye"></i></a>&nbsp;&nbsp;
                        <a class="text-danger h5" href="{{url('admin/FeaturedRecipe/featuredrecipe-delete/'.$v_featuredrecipe->id)}}"><i class="far fa-trash-alt"></i></a>&nbsp;&nbsp;

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
