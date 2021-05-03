@extends('admin_dashboard')
@section('admin_content')

          <div class="  card text-dark">
              <div class="card-header">
                <a class="float-right btn btn-success" href="{{route('admin.FeaturedRecipe.featuredrecipe-view')}}"><i class="fas fa-th-list"></i>&nbsp;&nbsp;View Featured Recipe</a>
                <h3 class="card-title font-weight-bold">Featured Recipe Form</h3>
              </div>
              <!-- /.card-header -->
              <div class="row justify-content-center card-body">
                <div class="col-md-6">

                      <form role="form" method="POST" action="{{route('admin.FeaturedRecipe.featuredrecipe-store')}}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                          <label>Select Featured Recipe Category</label>
                          <select class="form-control" name="category_id" required>
                            <option value="">Seleect Category here</option>
                            @foreach(App\RecipeCategory::all() as $v_recipe)
                              <option value="{{$v_recipe->id}}">{{$v_recipe->category_name}}</option>
                            @endforeach
                          </select>
                        </div>



                        <div class="form-group">
                          <label>Enter Featured Recipe Name</label>
                          <input
                           type="text"required
                           name="recipe_name"
                           class="form-control"
                           placeholder="type here recipe name...">
                        </div>


                        <div class="form-group">
                          <label>Enter Featured Recipe Price</label>
                          <input
                           type="text"required
                           name="price"
                           class="form-control"
                           placeholder="type here recipe price...">
                        </div>

                        <input type="hidden" name="recipe_role" value="2">


                        <div class="form-group">
                          <label>Select Featured Recipe Image</label>
                          <input
                          type="file"required
                          name="recipe_image"
                          class="form-control">
                        </div>



                        <div class="form-group">
                          <label>Recipe Featured Description</label>
                          <textarea
                          name="recipe_about"required
                          placeholder="Enter Your Recipe Description"
                          rows="8"
                          class="form-control"
                          cols="80"></textarea>
                        </div>












                        <div class="form-group float-right">
                          <button
                          class="btn btn-info"
                          type="submit"
                          name="button"><i class="fas fa-plus-square"></i>&nbsp;&nbsp;Submit Featured Recipe</button>
                        </div>

                      </form>

                </div>
              </div>
              </div>









@endsection
