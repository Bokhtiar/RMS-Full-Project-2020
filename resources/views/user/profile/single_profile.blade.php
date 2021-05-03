@extends('user_profile')
@section('user_profile_content')

<section class="bg-light  container ml-5">
  <p class="text-center h3">{{Auth::user()->name}} Profile </p><hr>
    <p class="font-weight-bold ml-5">First Name: <strong class="h4"></strong>&nbsp;<span class="h5">{{Auth::user()->name}}</span> </p>

    <p class="font-weight-bold ml-5">Last Name: <strong class="h4"></strong>&nbsp;<span class="h5">{{Auth::user()->last_name}}</span> </p>

    <p class="font-weight-bold ml-5">Email: <strong class="h4"></strong>&nbsp;<span class="h5">{{Auth::user()->email}}</span> </p>


    <p class="font-weight-bold ml-5">Phone number: <strong class="h4"></strong>&nbsp;<span class="h5">{{Auth::user()->phone}}</span> </p>


    <p class="font-weight-bold ml-5">Your Age:<strong class="h4"></strong>&nbsp;<span class="h5">{{Auth::user()->age}}</span> </p>


    <p class="font-weight-bold ml-5"> Your Address: <strong class="h4"></strong>&nbsp;<span class="h5">{{Auth::user()->country}}</span> </p>


    <p class="font-weight-bold ml-5">URL: <strong class="h4"></strong>&nbsp;<span class="h5">{{Auth::user()->url}}</span> </p>


    <p class="font-weight-bold ml-5">Your Paypal:  <strong class="h4"></strong>&nbsp;<span class="h5">{{Auth::user()->paypel}}</span> </p>

    <p class="font-weight-bold ml-5">Your  Credit or debit:  <strong class="h4"></strong>&nbsp;<span class="h5">{{Auth::user()->paypel}}</span> </p>

    <p class="font-weight-bold ml-5">About of you: <strong class="h4"></strong>&nbsp;<span class="h5">{{Auth::user()->about}}</span> </p>




</section>

@endsection
