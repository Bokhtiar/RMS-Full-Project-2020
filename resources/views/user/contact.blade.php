@extends('user_dashboard')
@section('user_content')

<div class="gray_bg">
  <br><br><br><br>
           <div class="container margin_60">
               <div class="main_title">
                   <h2 class="nomargin_top">Send Us a Message</h2>
                   <hr class="divider">
               </div>
               <div class="row">
                   <div class="col-md-12">
                       <div class="text-shrink">
                       </div>
                   </div>
               </div>
               <div class="text-center" id="EmailalertMsg"></div>
               <div class="row margin_top_40">
                   <div class="col-sm-6 col-sm-push-6 mb-40">
                       <iframe class="map" height="380" src="https://maps.google.com/maps?q=United States&amp;hl=en&amp;sll=36.241384,-113.7547193&amp;z=3&amp;output=embed"></iframe>
                   </div>
                   <div class="col-sm-6 col-sm-pull-6">
                       <div class="form-contacts">
                           <div class="col-sm-12">
                               <h2>Get In Touch</h2>
                           </div>
                           <form method="post" action="{{url('message-submition')}}" id="contactEmail">
                             @csrf
                               <div class="form-group col-sm-12">
                                   <input type="text" id="nameEmailer" required name="name"  class="form-control lettersonly required" required  placeholder="Name" maxlength="50">
                               </div>
                               <div class="form-group col-sm-12">
                                   <input type="email" id="emailEmailer" required name="email" class="form-control required" required placeholder="E-mail">
                               </div>

                               <div class="form-group col-sm-12">
                                   <textarea class="form-control" id="message" required name="message" rows="8" required placeholder="Message"></textarea>
                               </div>
                               <div class="col-sm-5">
                                   <input type="submit" name="contactSubmit" class="btn btn-success" onclick="Email_contact()" id="contactSubmit" value="Send Now">
                                   <span><i id="refresh" class="fa fa-refresh fa-spin" style="font-size:20px; display:none"></i></span>
                               </div>
                           </form>
                       </div>
                   </div>
               </div>
           </div><!-- End container -->
       </div><!-- End white_bg -->


@endsection
