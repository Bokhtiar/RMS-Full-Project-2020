@extends('admin_dashboard')
@section('admin_content')



<!-- order table stat-->
    <div class="mt-2">
      <div class="row ">
        <div class="col-md-1">

        </div>
        <div class="col-md-10">
          <!-- navbar for searc admin order table start -->
          <nav class="navbar navbar-expand-lg navbar-light bg-light">
          <a class="navbar-brand" href="#">Order Table</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">

          </div>
          </nav>
          <!-- navbar for searc admin order table end -->
          <table class="table text-center table-dark  text-light" border="1">
            <thead  >
              <tr>
                <th>Order ID</th>
                <th>Reciver Name</th>
                <th>Reciver Phone</th>
                <th>Reciver E-mail</th>
                <th>secret code</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach($order as $v_order)
              <tr>
                <td>#Fshop{{$loop->index +1}}</td>
                <td>{{$v_order->reciver_name}}</td>
                <td>{{$v_order->reciver_phone}}</td>
                <td>{{$v_order->reciver_email}}</td>
                <td>{{$v_order->secret_code}}</td>
                <td>

                  <a class="btn btn-info" href="{{url('admin/order/single-view-product/'.$v_order->id) }}">View</a>


                  @if($v_order->status==1)
                  <strong class="btn btn-info">Successfull</strong>
                  @else
                  <a href="{{url('admin/order/success/'.$v_order->id)}}"><strong class="btn btn-danger">Unsuccessfull</strong></a>
                  @endif

                  <a class="btn btn-danger" href="{{url('admin/order/single-delete-product/'.$v_order->id) }}">Delete</a>
                </td>
              </tr>

              @endforeach

            </tbody>
          </table>
        </div>
        <div class="col-md-1">

        </div>
</div>


@endsection
