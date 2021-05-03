@extends('user_dashboard')
@section('user_content')

<br><br><br>
<section class="container py-5">


  <table class="table table-stripe">
    <thead>
      <th>Recipe Name</th>
      <th>Recipe Image</th>
      <th>Recipe Price</th>
      <th>Quantity</th>
      <th>Action</th>
    </thead>
    <tbody>
      <?php
      $total=0;
       ?>
      @foreach(App\cart::cart_item() as $v_cart)
      <tr>
        <td>{{$v_cart->recipe->recipe_name}}</td>
        <td><img height="50px" width="60px" src="{{asset($v_cart->recipe->recipe_image)}}" alt=""> </td>
        <?php
          $total +=$v_cart->recipe->price*$v_cart->quantity;
         ?>
        <td>{{$v_cart->recipe->price * $v_cart->quantity}}</td>

        <td>
          <form class="form-inline" action="{{url('user/quantity/'.$v_cart->id)}}" method="post">
            @csrf
            <input type="text form-control"  name="quantity" value="{{$v_cart->quantity}}">
            <input type="submit" name="btb" value="update">
          </form>
        </td>
        <td>
          <a href="{{url('user/delete/'.$v_cart->id)}}">Delete</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
<div class="float-right">
  <span class="h4"><a href="{{url('/')}}">Continue Shopping</a> </span><br><br>
  <span class="font-weight-bold h5">Total Balance is :{{$total}}</span><br>
</div>

</section>
<br><br><br><br>


<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth

            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif


    <div class="container text-center">
      <strong class="text-center h4">You Can Pay in
      <a class="btn btn-info" href="{{url('user/paypal')}}">  Paypal</a>
      </strong>
    </div>
    <br><br>

    <div class=" row justify-content-center text-center">

        <div class="links col-md-5">
          <span class="font-weight-bold h4 "> Please Order Form in Credit or debit card</span>
          <br><hr> <br><br>
            <script src="https://js.stripe.com/v3/"></script>

                <form action="{{ route('stripe.store') }}" method="post" id="payment-form">
                    @csrf
                    <div class="">

                      <input class="form-control" placeholder="Enter Order Reciver Name" type="text" name="reciver_name" value="">
                    </div><br>







                    <div class="">

                      <input class="form-control" placeholder="Enter Order Reciver Email" type="email" name="reciver_email" value="">
                    </div><br>



                    <div class="">
                      <input class="form-control" placeholder="Enter Order Reciver phone" type="number" name="reciver_phone" value="">
                    </div><br>



                    <div class="">

                      <input class="form-control" placeholder="Enter Order Reciver Address" type="text" name="reciver_location" value="">
                    </div><br>

                    <div class="">

                      <input class="form-control"  type="hidden" name="Balance" value="{{$total}}">
                    </div><br>





                    <div class="">
                      <textarea class="form-control" placeholder="About order *" name="comment" rows="4" cols="80"></textarea>
                    </div><br>







                  <div class="">
                    <label for="card-element">
                      <span class="font-weight-bold">Credit or debit card</span>
                    </label>
                    <div id="card-element">
                      <!-- A Stripe Element will be inserted here. -->
                    </div>

                    <!-- Used to display form errors. -->
                    <div id="card-errors" role="alert"></div>
                  </div>

                  <button class="btn btn-info text-light">Submit Payment</button><br><br>
                </form>
        </div>
    </div>
</div>

<script>
    // Create a Stripe client.
    var stripe = Stripe('pk_test_51H3JZzBxZJNDzbsLcSAAqjYcgTOEP4sRPVvKXnOhyFVQNNuXxXKfMASZotsfv3iPlBXIPPrXv46xUKcbgREnHeJ900S1GtJ7zt');

    // Create an instance of Elements.
    var elements = stripe.elements();

    // Custom styling can be passed to options when creating an Element.
    // (Note that this demo uses a wider set of styles than the guide below.)
    var style = {
      base: {
        color: '#32325d',
        fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
        fontSmoothing: 'antialiased',
        fontSize: '16px',
        '::placeholder': {
          color: '#aab7c4'
        }
      },
      invalid: {
        color: '#fa755a',
        iconColor: '#fa755a'
      }
    };

    // Create an instance of the card Element.
    var card = elements.create('card', {style: style});

    // Add an instance of the card Element into the `card-element` <div>.
    card.mount('#card-element');

    // Handle real-time validation errors from the card Element.
    card.addEventListener('change', function(event) {
      var displayError = document.getElementById('card-errors');
      if (event.error) {
        displayError.textContent = event.error.message;
      } else {
        displayError.textContent = '';
      }
    });

    // Handle form submission.
    var form = document.getElementById('payment-form');
    form.addEventListener('submit', function(event) {
      event.preventDefault();

      stripe.createToken(card).then(function(result) {
        if (result.error) {
          // Inform the user if there was an error.
          var errorElement = document.getElementById('card-errors');
          errorElement.textContent = result.error.message;
        } else {
          // Send the token to your server.
          stripeTokenHandler(result.token);
        }
      });
    });

    // Submit the form with the token ID.
    function stripeTokenHandler(token) {
      // Insert the token ID into the form so it gets submitted to the server
      var form = document.getElementById('payment-form');
      var hiddenInput = document.createElement('input');
      hiddenInput.setAttribute('type', 'hidden');
      hiddenInput.setAttribute('name', 'stripeToken');
      hiddenInput.setAttribute('value', token.id);
      form.appendChild(hiddenInput);

      // Submit the form
      form.submit();
    }
</script>





@endsection
