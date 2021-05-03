@extends('user_profile')
@section('user_profile_content')




    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">

          <!-- /.card -->

          <div class="card">
            <div class="card-header">

              <h3 class="card-title font-weight-bold">Earning List</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Recipe Sl</th>
                  <th>Recipe Name</th>
                  <th>Recipe Image</th>
                  <th>Recipe Price</th>
                  <th>Earning Price</th>
                  <th>Payment Status</th>



                </tr>
                </thead>
                <tbody>
                  <?php
                  $total=0;
                  $orginal_price=0;
                  $percentage=0;
                  ?>
                  @foreach(App\cart::whereNotNull('order_id')->where('creator_id',Auth::id())->where('payment_status',0)->get() as $v_recipe)
                    <tr>
                      <td>{{$loop->index +1}}</td>

                      <td>{{$v_recipe->recipe->recipe_name}}</td>
                        <td><img src="{{asset($v_recipe->recipe->recipe_image)}}" height="60px" width="90px;" alt=""> </td>
                      <td>{{$v_recipe->recipe->price*$v_recipe->quantity}}</td>
                      <?php
                        $orginal_price=$v_recipe->recipe->price*$v_recipe->quantity;

                        $percentage=$orginal_price*80;

                        $orginal_percentage=$percentage/100;

                        $total +=$orginal_percentage;
                       ?>
                       <td>{{$orginal_percentage}}</td>
                       <td>
                         @if($v_recipe->payment_status==1)
                         <strong class="bg-success text-light">Paid</strong>
                         @else
                         <strong class="bg-danger text-light">You get</strong>
                         @endif
                       </td>

                    </tr>
                  @endforeach
                </tbody>
              </table>



              <?php $getmoney=0 ?>
              @foreach(App\cart::whereNotNull('order_id')->where('creator_id',Auth::id())->where('payment_status',0)->get() as $v_recipe)


                  <?php
                    $orginal_price=$v_recipe->recipe->price;

                    $percentage=$v_recipe->recipe->price*20;

                    $orginal_percentage=$percentage/100;

                    $getmoney +=$orginal_percentage;
                   ?>



              @endforeach






              <span class="float-right btn btn-info">Total Earn : {{$total}}</span>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>

    <br><br><br><br><br><br>

    <section class="container">

      <h3 class="text-center">MONEY WITHDROW</h3><hr>

      <div class="row justify-content-center">
        <div class="col-md-5">
          <form class="" action="{{url('user/withdrow')}}" method="post">
            @csrf
            <div class="form-group">
              <label for="">Enter Your Email</label>
              <input class="form-control" type="email" name="email" value="" placeholder="enter your email" required>
            </div>


            <div class="form-group">
              <label for="">Enter Your paypel or Credit or debit card </label>
              <input class="form-control" type="text" name="bank" value="" placeholder="enter your paypel or Credit or debit card " required>
            </div>


            <input class="btn btn-info" type="submit" name="btn" value="Payment Withdrow">

          </form>
        </div>
      </div>
    </section>


@endsection
