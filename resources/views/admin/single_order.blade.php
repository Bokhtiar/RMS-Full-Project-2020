@extends('admin_dashboard')
@section('admin_content')

<div class="row contianer justify-content-center">
  <div class="col-md-6 text-center py-5">
    <h5 class="text-dark h4 bg-light">Reciver Info</h5>
    <hr>
    <h6 class="font-weight-bold"><strong>Recever Name: </strong> {{$order_id->reciver_name}}</h6>
    <h6 class="font-weight-bold"><strong>Recever Email:  </strong> {{$order_id->reciver_email}}</h6>
        <h6 class="font-weight-bold"><strong>Recever Phone:  </strong> {{$order_id->reciver_phone}}</h6>
  </div>

</div>









<table class="table text-center">
  <thead class="" style="background-color: #56d; color: white;">
    <tr>
      <th scope="col">SL</th>
      <th scope="col">Poruduct Name</th>
      <th scope="col">Product Image</th>
      <th scope="col">Product Price</th>
      <th scope="col">Product Quantity</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody class="text-center">
    <?php  $total_amount=0; ?>
@foreach(App\cart::where('order_id',$order_id->id)->get() as $v_cart)
    <tr>
      <th scope="row">#fshop{{$loop->index +1}}</th>
      <td>{{$v_cart->recipe->recipe_name}}</td>
      <td><img height="100px" width="100px" src="{{asset($v_cart->recipe->recipe_image)}}" alt=""> </td>
      <td>{{$v_cart->recipe->price * $v_cart->quantity}}</td>
            <?php
              $total_amount +=$v_cart->recipe->price*$v_cart->quantity;
             ?>
             <td>
               <form class="form-group form-inline" action="{{url('admin/order/cart-quantity/'.$v_cart->id)}}" method="post">
                 @csrf
                 <input class="form-control" type="text" name="quantity" value="{{$v_cart->quantity}}">
                 <input class="btn btn-info" type="submit" name="btn" value="Update">
               </form>
             </td>


             <td>
               <a class="text-light h5 btn btn-danger" href="{{url('admin/order/delete-cart/'.$v_cart->id)}}"><i class="far fa-trash-alt"></i>delete</a>&nbsp;&nbsp;

             </td>
    </tr>
@endforeach
  </tbody>



</table>
<div class="flaot-right">
  <a class=" float-right btn btn-success text-light font-weight-bold">Total Amount: <strong class="text-light">{{$total_amount}}Taka</strong></a><br><br>
  <a class="btn btn-info float-right" href="{{route('admin.order.order-list')}}">Back to page</a>
</div>
<br><br>
<br><br><br><br><br><br>



 








@endsection
