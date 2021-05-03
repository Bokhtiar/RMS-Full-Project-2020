@extends('admin_dashboard')

@section('admin_content')

<br>
<!--Registration form-->
 <div id="form" class="container bg-light">
   <div class="text-center"><br><br>
     <p class="font-weight-bold h4">DishMize Admin Registration</p>
   </div>
   <hr>
<br><br>
   <div class="row justify-content-center">
     <div class="col-md-8">
       <div class="row">


     <div class="col-md-6">
       <form method="POST" enctype="multipart/form-data" action="{{ route('admin.register-store') }}">
           @csrf






         <div class="form-group">
           <input
           class="form-control"
           type="text"
           name="name"
           value=""
           id=" "
           required
           placeholder="First Name">
         </div>



         <div class="form-group">
           <input
           class="form-control"
           type="text"
           name="last_name"
           value=""
           id=" "
           required
           placeholder="Last Name">
         </div>



         <div class="form-group">
           <input
           class="form-control"
           type="text"
           name="phone"
           value=""
           id=" "
           required
           placeholder="Phone">
         </div>

         <div class="form-group">
           <input
           class="form-control"
           type="file"
           name="image"
           value=""
           id=" "

           >
         </div>

         <div class="form-group">
           <input
           class="form-control"
           type="text"
           name="age"
           value=""
           id=" "

           placeholder="Age">
         </div>



         <div class="form-group">
           <input
           class="form-control"
           type="text"
           name="url"
           value=""
           id=" "

           placeholder="URL">
         </div>

     </div>
     <div class="col-md-6 col-12 col-12 col-lg-6">


                               <div class="form-group ">



                                       <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Enter Your Email" required autocomplete="email">

                                       @error('email')
                                           <span class="invalid-feedback" role="alert">
                                               <strong>{{ $message }}</strong>
                                           </span>
                                       @enderror

                               </div>

                               <div class="form-group row">


                                   <div class="col-md-12">
                                       <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required placeholder="Enter Your Password
                                       " autocomplete="new-password">

                                       @error('password')
                                           <span class="invalid-feedback" role="alert">
                                               <strong>{{ $message }}</strong>
                                           </span>
                                       @enderror
                                   </div>
                               </div>

                               <div class="form-group row">


                                   <div class="col-md-12">
                                       <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Conform Password" required autocomplete="new-password">
                                   </div>
                               </div>



               <div class="form-group">
                  <input
                  class="form-control"
                  type="text"
                  name="paypel"
                  value=""
                  id=" "

                  placeholder="Paypal Mail">
               </div>




               <div class="form-group">
                  <input
                  class="form-control"
                  type="text"
                  name="country"
                  value=""
                  id=" "
                  required
                  placeholder="Address ">
               </div>



                <div class="form-group">
                  <select class="form-control" name="gender">
                     <option value="1"  selected>Male</option>
                     <option value="2">Female</option>
                     <option value="3">Others</option>
                 </select>
                 </div>

  </div>
  <br>

                 <div class="row">
                     <div class="col-md-12 col-12 col-lg-12 col-sm-12">
                       <div class="form-group">
                         <label for="">Tell Us About You</label>
                        <textarea required class="form-control" name="about" placeholder="Tell Us About You" rows="4" cols="178"></textarea>
                     </div>
                   </div>
                 </div>

                 <input class="btn btn-info" type="submit" name="btn" value="Submit For DishMize Member">
             </form>


    </div>

     <br>
 </div>
</div>
</div>























@endsection
