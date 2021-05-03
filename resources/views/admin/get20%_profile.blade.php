@extends('admin_dashboard')
@section('admin_content')

<div class="row contianer justify-content-center">










<table class="table text-center">
  <thead class="" style="background-color: #56d; color: white;">
    <tr>

      <th scope="col">Poruduct Name</th>
      <th scope="col">Product Image</th>
      <th scope="col">Product Price</th>
      <th scope="col">Product 80% get</th>
      <th scope="col">Action</th>


    </tr>
  </thead>
  <tbody class="text-center">
    <?php  $total=0;
    $userget=0;
    $all_money=0; ?>
    @foreach($view_profile as $v_profile)
    <tr>

      <td>{{$v_profile->recipe->recipe_name}}</td>
      <td><img height="100px" width="100px" src="{{asset($v_profile->recipe->recipe_image)}}" alt=""> </td>
      <td>{{$v_profile->recipe->price*$v_profile->quantity }}</td>
      <?php

        $userget=$v_profile->recipe->price*$v_profile->quantity * 80;
        $total =$userget/100;
          $all_money +=$total;
       ?>

       <td>{{$total}}</td>
       <td>
         <a class="btn btn-danger" href="{{url('admin/order/cart-status/'.$v_profile->id)}}"> money confirm</a>
       </td>
    </tr>
    @endforeach
  </tbody>



</table>
<div class="flaot-right">
  <span></span>

  <span><strong>Total balance her :</strong>{{$all_money}} </span><br><br>
  <a class="btn btn-info float-right" href="{{route('admin.order.user20%-list')}}">Back to page</a>
</div>
<br><br>
<br><br><br><br><br><br>












@endsection
