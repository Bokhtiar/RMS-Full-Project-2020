@extends('admin_dashboard')
@section('admin_content')

          <div class="  card text-dark">
              <div class="card-header">
                <a class="float-right btn btn-success" href="{{route('admin.Recipe.recipe-view')}}"><i class="fas fa-th-list"></i>&nbsp;&nbsp;View Recipe</a>
                <h3 class="card-title font-weight-bold">Recipe Update Form</h3>
              </div>
              <!-- /.card-header -->
              <div class="row justify-content-center card-body">
                <div class="col-md-6">

                      <form role="form" method="POST" action="{{url('admin/Recipe/recipe-update/'.$recipe_edit->id)}}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                          <label>Update Recipe Category</label>
                          <select class="form-control" name="category_id">
                            <option value="">Seleect Category here</option>
                            @foreach(App\RecipeCategory::all() as $v_recipe)

 <option value="{{$v_recipe->id}}" {{$v_recipe->id==$recipe_edit->id?'selected':''}}>{{$v_recipe->category_name}}</option>
                            @endforeach
                          </select>
                        </div>


                        <div class="form-group">
                          <label>Update Recipe Name</label>
                          <input
                           type="text"
                           name="recipe_name"
                           value="{{$recipe_edit->recipe_name}}"
                           class="form-control"
                           placeholder="type here recipe name...">
                        </div>


                        <div class="form-group">
                          <label>Update Recipe price</label>
                          <input
                           type="text"
                           name="price"
                           value="{{$recipe_edit->price}}"
                           class="form-control"
                           placeholder="type here recipe price...">
                        </div>

                        <input type="hidden" name="recipe_role" value="{{$recipe_edit->recipe_role}}">


                        <div class="form-group">
                          <label>Update Recipe Image</label>
                          <input
                          type="file"
                          name="recipe_image"
                          class="form-control">
                        </div>

                        <div class="">
                          <strong>Old Image: <img src="{{asset($recipe_edit->recipe_image)}}" height="60px" width="90px;" alt=""> </strong>
                        </div>




                        <br>



                        <div class="form-group">
                          <label>Recipe Description</label>
                          <textarea
                          name="recipe_about"
                          placeholder="Enter Your Recipe Description"
                          rows="8"
                          class="form-control"
                          cols="80">{{$recipe_edit->recipe_about}}</textarea>
                        </div>








                        <div class="form-group float-right">
                          <button
                          class="btn btn-info"
                          type="submit"
                          name="button"><i class="fas fa-plus-square"></i>&nbsp;&nbsp;Submit Recipe</button>
                        </div>

                      </form>

                </div>
              </div>
              </div>









@endsection
