@extends('user_profile')
@section('user_profile_content')




    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">

          <!-- /.card -->

          <div class="card">
            <div class="card-header">

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

                </tr>
                </thead>
                <tbody>
                  @foreach($view_recipe as $v_recipe)
                    <tr>
                      <td>{{$loop->index +1}}</td>
                      <td>{{$v_recipe->category->category_name}}</td>
                      <td>{{$v_recipe->recipe_name}}</td>
                      <td>{{$v_recipe->price}}</td>

                      <td><img src="{{asset($v_recipe->recipe_image)}}" height="60px" width="90px;" alt=""> </td>
                      <td>
                        @if($v_recipe->recipe_status==1)
                        <span class="bg-success text-light h5">Approved</span>&nbsp;&nbsp;
                        @else
                        <span class="bg-danger text-light h5">Pending</span>&nbsp;&nbsp;
                        @endif
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
