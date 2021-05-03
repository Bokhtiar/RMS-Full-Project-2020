@extends('admin_dashboard')
@section('admin_content')



<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
                        <h4 class="page-title">Profile page</h4>
                    </div>
                    <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <a href="https://wrappixel.com/templates/ampleadmin/" target="_blank"
                            class="btn btn-danger pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light">Upgrade
                            to Pro</a>
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                            <li class="active">Profile Page</li>
                        </ol>
                    </div>
                </div>
                <!-- /.row -->
                <!-- .row -->
                <div class="row">
                    <div class="col-md-4 col-xs-12">
                        <div class="white-box">
                <div class="user-bg"> <img height="300px;" width="100%" alt="user" src="{{asset(Auth::user()->image)}}">
                                <div class="overlay-box">
                                    <div class="user-content">
                                        <a href="javascript:void(0)"><img style="display: none" src="../plugins/images/users/genu.jpg"
                                                class="thumb-lg img-circle" alt="img"></a>
                                        <h4 class="text-white">{{Auth::user()->name}}</h4>
                                        <h5 class="text-white">{{Auth::user()->email}}</h5>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-md-8 col-xs-12">
                        <div class="white-box">
                          <section class="bg-light container ml-5">
                              <p><strong class="h4"></strong>&nbsp;<span class="h5">{{Auth::user()->name}}</span> </p>

                              <p><strong class="h4"></strong>&nbsp;<span class="h5">{{Auth::user()->last_name}}</span> </p>


                              <p><strong class="h4"></strong>&nbsp;<span class="h5">{{Auth::user()->phone}}</span> </p>


                              <p><strong class="h4"></strong>&nbsp;<span class="h5">{{Auth::user()->age}}</span> </p>


                              <p><strong class="h4"></strong>&nbsp;<span class="h5">{{Auth::user()->country}}</span> </p>


                              <p><strong class="h4"></strong>&nbsp;<span class="h5">{{Auth::user()->url}}</span> </p>


                              <p><strong class="h4"></strong>&nbsp;<span class="h5">{{Auth::user()->paypel}}</span> </p>


                              <p><strong class="h4"></strong>&nbsp;<span class="h5">{{Auth::user()->name}}</span> </p>



                          </section>
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
