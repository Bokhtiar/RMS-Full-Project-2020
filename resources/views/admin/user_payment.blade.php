@extends('admin_dashboard')
@section('admin_content')
<table class="table">
<thead>
  <tr>
    <th scope="col">#sl</th>
    <th scope="col">User Name</th>
    <th scope="col">email</th>
    <th scope="col">phone</th>
    <th scope="col">account</th>
    <th scope="col">Action</th>
  </tr>
</thead>
<tbody>
@foreach(App\withdrow::all() as $v_cart)




    <tr>
      <th scope="row">{{$loop->index +1}}</th>
      <td>{{$v_cart->user->name}}</td>
      <td>{{$v_cart->email}}</td>
      <td>{{$v_cart->user->phone}}</td>
      <td>{{$v_cart->bank}}</td>
      <td>
        @if($v_cart->status==1)
        <span class="bg-success">Payment Success</span>
        @else
        <a class="btn btn-danger" href="{{url('admin/order/confirm-order/'.$v_cart->id)}}">Confirm payment</a>
        @endif
        <a class="btn btn-info" href="{{url('admin/order/get-payment20%/'.$v_cart->user->id)}}">View</a>
        <a class="btn btn-danger" href="">Delete</a>



      </td>
    </tr>




@endforeach
</tbody>
</table>


@endsection
