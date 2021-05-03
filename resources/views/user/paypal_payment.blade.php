@extends('user_dashboard')
@section('user_content')
<br><br><br><br>
<h3 class="text-center">Paypal Order Form</h3>
<hr>
  <div class="container">
    <h4>You Can Pay In <strong>Paypal</strong> when you using paypal trams & condition </h4>
    <ol class="">
      <li>first of of all pay in paypal account <strong class="text-info">vital999@outlook.com</strong></li>
      <li>Order form fill up </li>
      <li>please Enter secret code, your order we ensure this code</li>
    </ol>
  </div>

  <section class="justify-content-center row">
    <div class="col-md-5 col-sm-12">
      <form class="" action="{{url('user/paypal-order')}}" method="post">
        @csrf
      <div class="form-group">
          <label class="font-weight-bold" for="">Enter Reciver Name</label>
          <input class="form-control" type="text" name="reciver_name" placeholder="Enter reciver name" value="" required>
      </div>



      <div class="form-group">
          <label class="font-weight-bold" for="">Enter Reciver Email</label>
          <input class="form-control" type="text" name="reciver_email" value="" placeholder="Enter reciver email" required>
      </div>



      <div class="form-group">
          <label class="font-weight-bold" for="">Enter Reciver Phone</label>
          <input class="form-control" type="text" name="reciver_phone" value="" placeholder="Enter reciver phone" required>
      </div>



      <div class="form-group">
          <label class="font-weight-bold" for="">Enter Reciver Location</label>
          <input class="form-control" type="text" name="reciver_location" value="" placeholder="Enter reciver location">
      </div>




      <div class="form-group">
          <label class="font-weight-bold" for="">Enter Secret code for transection</label>
          <input class="form-control" type="text" name="secret" value="" placeholder="Eenter secret code for transection" required>
      </div>


      <div class="form-group">
          <label class="font-weight-bold" for="">Enter Secret code for transection</label>
          <textarea class="form-control" name="comment" rows="4" cols="80" placeholder="Eenter secret code for transection" required></textarea>
      </div>


      <input class="btn btn-info" type="submit" name="btn" value="Submit Order">


    </form>
    </div>
  </section>

@endsection
