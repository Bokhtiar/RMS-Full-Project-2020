@extends('user_dashboard')
@section('user_content')
<br><br><br>

<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">

                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">


                    </div>
                </div>
                <!-- /.row -->
                <!-- .row -->
                <div class="row">
                    <div class="col-md-4 col-xs-12 text-center">
                        <div class="white-box">
                <div class="user-bg"> <img height="200px;" width="50%" style="border: 20px; border-radius: 80px; " width="100%" alt="user" src="{{asset(Auth::user()->image)}}">
                                <div class="overlay-box">
                                    <div class="user-content">
                                        <a href="javascript:void(0)"><img style="display: none" src="../plugins/images/users/genu.jpg"
                                                class="thumb-lg img-circle" alt="img"></a>
                                        <h4 class="text-dark">{{Auth::user()->name}}</h4>
                                        <h5 class="text-dark">{{Auth::user()->email}}</h5>
                                    </div>
                                </div>
                            </div>








                            <div class="user-btm-box ml-5 ">
                                <div class="col-md-4 col-sm-4 text-center">
                                    <p class="text-purple"><i class="ti-facebook"></i></p>
                                    <a class="font-weight-bold h6 "  href="{{url('user/single-user/'.Auth::id())}}">Dashboard</a>
                                </div>







                                <div class="col-md-4 col-sm-4 text-center">
                                    <p class="text-blue"><i class="ti-twitter"></i></p>
                                    <a class="font-weight-bold h6" href="{{url('user_post_add')}}">Add Post</a>
                                </div>

                                <div class="col-md-4 col-sm-4 text-center">
                                    <p class="text-blue"><i class="ti-twitter"></i></p>
                                    <a class="font-weight-bold h6" href="{{url('earn-money')}}">Earn Money</a>
                                </div>





                                <div class="col-md-4 col-sm-4 text-center">
                                    <p class="text-danger"><i class="ti-dribbble"></i></p>
                                    <a class="font-weight-bold h6" href="{{url('user/all-post/'.Auth::id())}}">View Post</a>
                                </div>
                                <div class="col-md-4 col-sm-4 text-center">
                                    <p class="text-danger"><i class="ti-dribbble"></i></p>
                                    <a class="font-weight-bold h6" href="{{url('user/logout')}}">Logout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 col-xs-12">
                        <div class="white-box">
                            @yield('user_profile_content')
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->
    </div>



@endsection
