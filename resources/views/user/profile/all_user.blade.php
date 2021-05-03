@extends('user_dashboard')
@section('user_content')
<br><br>

<section class="container py-5">
  <div class="pro-des">
     <div class="row">
       <div class="col-md-12">
         <div class="text">
           <h1 class="text-center">Our Register User</h1>
           <hr>
         </div>
       </div>
     </div>

    <div class="row  py-5 ">
      @foreach($all_user as $v_user)
      <div class="col-md-4 col-sm-6 col-6">
      <div class="entry gray_bg">
      <figure >

        <img style="background-image: cover; width: 100%; " src="{{asset($v_user->image)}}" alt="">
      <figcaption class="text-light"><i class="fa fa-eye"></i> <span>Security Issue...!only admin see har</span></figcaption>
      </figure>
      <div class="shortDesc">
      <h5>{{$v_user->name}}</h5> <h5>{{$v_user->email}}</h5>
      <div class="actions">
      <div class="rows">


      </div>
      </div>
      </div>
      </div>
      </div>
      @endforeach
    </div>
  </section>


@endsection
