

<h3>Chackout page</h3>



    <div class="flex-center position-ref full-height">
        @if (Route::has('login'))
            <div class="top-right links">
                @auth
                    <a href="{{ url('/home') }}">Home</a>
                @else
                    <a href="{{ route('login') }}">Login</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            </div>
        @endif

        <div class="">


            <div class="links">
                <script src="https://js.stripe.com/v3/"></script>

                    <form action="{{ route('stripe.store') }}" class="form-group" method="post" id="payment-form">

                      <div class="">
                        <div class="col-md-6">
                          <div class="form-group">
                            <label for="" class="h4">Enter Your Name</label>
                            <input class="form-control"  type="text" placeholder="enter your name" name="reciver_name" value="">
                          </div>
                          <div class="form-group">
                            <label for="" class="h4">Enter Your E-mail</label>
                            <input class="form-control" type="text" placeholder="enter your email" name="reciver_email" value="">
                          </div>
                          <div class="form-group">
                            <label for="" class="h4">Enter Your Location</label>
                            <input class="form-control" type="text" placeholder="enter your Location" name="reciver_location" value="">
                          </div>
                          <div class="form-group">
                            <label for="" class="font-weight-bold h4">Enter Your Phone </label>
                            <input class="form-control" type="text" placeholder="enter your Phone Number" name="reciver_phone" value="">
                          </div>
                          <div class="form-group">
                            <input type="hidden" placeholder="enter your name" name="total" value="{{$total}}">
                          </div>
                        </div>
                      </div>




                        @csrf
                      <div class="form-row  col-md-6">

                        <label for="card-element font-weight-bold h4">
                          Enter your Credit or debit card
                        </label>
                        <div id="card-element">
                          <!-- A Stripe Element will be inserted here. -->
                        </div>

                        <!-- Used to display form errors. -->
                        <div id="card-errors" role="alert"></div>
                      </div>

                      <button class="btn btn-success float-right">Submit Payment</button>
                    </form>
            </div>
        </div>
    </div>

    <script>
        // Create a Stripe client.
        var stripe = Stripe('pk_test_51H2r6uAmblUsSxwPW9G201Ew9aJA0BPoGVvlzQ1hRxPH4AaIf6g6uxGK3xXMhSqc31SkMfs3mn1jVwZ6ksER5VXH00OHKX8BGF');

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









</div>
