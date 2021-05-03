<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!--    fontawesome-->
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    <!--    custom style-->
    <link rel="stylesheet" href="{{asset('font/style.css')}}">

    <title> DISHMIZE | HOME </title>

<style media="screen">
font-family: Roboto, sans-serif;
text-align: center;
position: relative;
z-index: 1;
}
.product-grid3:before {
content: "";
height: 81%;
width: 100%;
background: #fff;
border: 1px solid rgba(0, 0, 0, 0.1);
opacity: 0;
position: absolute;
top: 0;
left: 0;
z-index: -1;
transition: all 0.5s ease 0s;
}
.product-grid3:hover:before {
opacity: 1;
height: 100%;
}
.product-grid3 .product-image3 {
position: relative;
}
.product-grid3 .product-image3 a {
display: block;
}
.product-grid3 .product-image3 img {
width: 100%;
height: auto;
}
.product-grid3 .pic-1 {
opacity: 1;
transition: all 0.5s ease-out 0s;
}
.product-grid3:hover .pic-1 {
opacity: 0;
}
.product-grid3 .pic-2 {
position: absolute;
top: 0;
left: 0;
opacity: 0;
transition: all 0.5s ease-out 0s;
}
.product-grid3:hover .pic-2 {
opacity: 1;
}
.product-grid3 .social {
width: 120px;
padding: 0;
margin: 0 auto;
list-style: none;
opacity: 0;
position: absolute;
right: 0;
left: 0;
bottom: -23px;
transform: scale(0);
transition: all 0.3s ease 0s;
}
.product-grid3:hover .social {
opacity: 1;
transform: scale(1);
}
.product-grid3:hover .product-discount-label,
.product-grid3:hover .product-new-label,
.product-grid3:hover .title {
opacity: 0;
}
.product-grid3 .social li {
display: inline-block;
}
.product-grid3 .social li a {
color: #e67e22;
background: #fff;
font-size: 18px;
line-height: 50px;
width: 50px;
height: 50px;
border: 1px solid rgba(0, 0, 0, 0.1);
border-radius: 50%;
margin: 0 2px;
display: block;
transition: all 0.3s ease 0s;
}
.product-grid3 .social li a:hover {
background: #e67e22;
color: #fff;
}
.product-grid3 .product-discount-label,
.product-grid3 .product-new-label {
background-color: #e67e22;
color: #fff;
font-size: 17px;
padding: 2px 10px;
position: absolute;
right: 10px;
top: 10px;
transition: all 0.3s;
}
.product-grid3 .product-content {
z-index: -1;
padding: 15px;
text-align: left;
}
.product-grid3 .title {
font-size: 14px;
text-transform: capitalize;
margin: 0 0 7px;
transition: all 0.3s ease 0s;
}
.product-grid3 .title a {
color: #414141;
}
.product-grid3 .price {
color: #000;
font-size: 16px;
letter-spacing: 1px;
font-weight: 600;
margin-right: 2px;
display: inline-block;
}
.product-grid3 .price span {
color: #909090;
font-size: 14px;
font-weight: 500;
letter-spacing: 0;
text-decoration: line-through;
text-align: left;
display: inline-block;
margin-top: -2px;
}
.product-grid3 .rating {
padding: 0;
margin: -22px 0 0;
list-style: none;
text-align: right;
display: block;
}
.product-grid3 .rating li {
color: #ffd200;
font-size: 13px;
display: inline-block;
}
.product-grid3 .rating li.disable {
color: #dcdcdc;
}
@media only screen and (max-width: 1200px) {
.product-grid3 .rating {
margin: 0;
}
}
@media only screen and (max-width: 990px) {
.product-grid3 {
margin-bottom: 30px;
}
.product-grid3 .rating {
margin: -22px 0 0;
}
}
@media only screen and (max-width: 359px) {
.product-grid3 .rating {
margin: 0;
}
}
</style>
</head>

<body>
    <div class="container top-head py-2">
        <div class="row">
            <nav class="col-md-12">
                <div class="main-menu-2 float-left">
                    <ul class="list-inline mb-0">
                        <li><a href="mailto:mail@dishmize.org"> <i class="fas fa-envelope"></i> mail@dishmize.org</a></li>
                    </ul>
                </div><!-- End main-menu-2 -->
                <div class="main-menu-2 float-right">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item"><a href="https://www.facebook.com/DishMize-197693270939732/?modal=admin_todo_tour"target="blank"   ><i class="fab fa-facebook-f"></i> </a> </li>
                        <li class="list-inline-item"><a href="https://www.instagram.com/dishmize_network/" target="_blank"><i class="fab fa-instagram"></i></a></li>
                        <li class="list-inline-item"><a href="https://www.linkedin.com/in/dishmize-network-838094167/" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                        <li class="list-inline-item"><a href="https://twitter.com/dishmize" target="_blank"><i class="fab fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="{{url('user/cart-all-product')}}">  <i class="fas fa-cart-plus h5 text-dark"></i>{{App\cart::cart_total_number()}} </a></li>
                    </ul>
                </div><!-- End main-menu-2 -->
            </nav>
        </div>
    </div>

    <!--    navbar start -->
    <header class="sticky-top">
        <div class="container">
            <div class="logo" style="margin-left: 0px;">
                <a href="{{url('/')}}">
                    <img src="{{asset('font')}}/img/logoo.png" alt="" class="hidden-sm hidden-xs">
                </a>
            </div>

            <nav class="navbar navbar-expand-lg px-0">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon text-light"><i class="fas fa-bars h4"></i></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active pl-0">
                            <a class="nav-link pl-0" href="{{url('/')}}">
                                <i class=" h3 fas fa-home"></i> <br>
                                Home </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('all-category')}}">
                                <img src="{{asset('font')}}/img/re.JPG" alt=""> <br>
                                Recipes </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('user-profile')}}">
                                <img src="{{asset('font')}}/img/dishmiz.JPG" alt=""> <br>
                                Dishmizer </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('blog-all')}}">
                                <img src="{{asset('font')}}/img/blog.png" alt=""> <br>
                                Blog </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('community')}}">
                                <img src="{{asset('font')}}/img/cm.png" alt=""> <br>
                                Community </a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{url('about')}}">
                                <img src="{{asset('font')}}/img/about.png" alt=""> <br>
                                About Us </a>
                        </li>
                        <li class="nav-item mt-1">
                          @if(Auth::check())
                              <a style="margin-top: -4px; " class="nav-link text-light" href="{{url('user/single-user/'.Auth::id())}}">
                                <img src="{{asset('font')}}/img/money.png" alt=""><br>
                                <span style=""  >Make Money</span> </a>
                                @else

                                <a style=" margin-top: 4px; " class="text-light " href="{{route('login')}}">
                                <img src="{{asset('font')}}/img/money.png" alt=""> <br>
                                Make Money </a>
                                @endif
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('contact')}}">
                                <img src="{{asset('font')}}/img/contact.png" alt=""> <br>
                                Contact Us </a>
                        </li>


                        <li class="nav-item">

                          @if(Auth::check())
                          <a class="nav-link pr-0" href="{{url('user/logout')}}">
                              <img src="{{asset('font')}}/img/log.png" alt=""> <br>
                              Logout </a>
                          @else
                          <a class="nav-link" href="{{route('register')}}">
                            <i class=" h3 fas fa-user-circle"></i><br>
                              Register </a>

                          @endif

                        </li>



                        <li class="nav-item pr-0 ml-1">
                          @if(Auth::check())
                          <!-- Example single danger button -->
                          <div class="btn-group">
                          <a   class="rounded dropdown-toggle mt-2 ml-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img  style="border: 20px; border-radius: 50px;  width:40px;"  src="{{asset(Auth::user()->image)}}" alt=""><br>
                            <span class="text-light">{{Auth::user()->name}}</span>
                          </a>
                          <div class="dropdown-menu">

                            <a class="dropdown-item" href="{{url('user/single-user/'.Auth::id())}}">Profile</a>
                              <a class="dropdown-item" href="{{url('user_post_add')}}">Add New recipe</a>
                              <a class="dropdown-item" href="{{url('user/all-post/'.Auth::id())}}">All recipe</a>



                          </div>
                          </div>
                          @else
                            <a class="nav-link pr-0" href="{{route('login')}}">
                                <img src="{{asset('font')}}/img/log.png" alt=""> <br>
                                Login </a>
                          @endif

                        </li>
                    </ul>

                </div>
            </nav>
        </div>
    </header>
    <!--    navbar end -->



<div class="">
  @yield('user_content')
</div>

<section class=" text-center py-5 bg-light">
  <div class="row ">
    <div class="col-md-8 col-lg-8 col-12">
      <p class="font-weight-bold lead">Stay Always Updated With us. Sign in with our newsletter</p>
    </div>

    <div class="col-md-4 col-md-4 col-12 ">
      <div class="pl-5">


      <form class="" action="{{url('subscriber-store')}}" method="post">
        @csrf
        <div class="form-inline">
          <input class="form-control p-3" type="email" placeholder="Your Email" name="gmail" required value="">
          <input class="btn btn-info text-light" type="submit" name="" value="Subscribe">
        </div>
      </form>
      </div>
    </div>
  </div>
</section>







<!--section start -->
<section class="bg-light py-5">
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <p class="h2"> About Dishmize </p>
            <br>
            <p> Our main idea... Is to offer you everything new in the culinary world to gain from your experience, which can be one of the most famous international cuisines in the future someday.</p>
            <p> Feel free to share your recipes with us </p>
        </div>
        <div class="col-md-4">
            <p class="h2"> Need Help </p>
            <br>
            <ul class="list-unslyled px-0" style="list-style: none">
                    <li> <i class="fas fa-envelope"></i>  Email: <a href="mailto:mail@dishmize.org">mail@dishmize.org</a></li>
                </ul>
        </div>
        <div class="col-md-4">
            <p class="h2"> Follow Us  </p>
            <br>
            <ul class="list-inline mb-0">
              <li class="list-inline-item"><a href="https://www.facebook.com/DishMize-197693270939732/?modal=admin_todo_tour"target="blank"   ><i class="fab fa-facebook-f"></i> </a> </li>
              <li class="list-inline-item"><a href="https://www.instagram.com/dishmize_network/" target="_blank"><i class="fab fa-instagram"></i></a></li>
              <li class="list-inline-item"><a href="https://www.linkedin.com/in/dishmize-network-838094167/" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
              <li class="list-inline-item"><a href="https://twitter.com/dishmize" target="_blank"><i class="fab fa-twitter"></i></a></li>
                    </ul>
        </div>
    </div>
</div>
</section>
<hr>
<!--section end -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>


      <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" charset="utf-8"></script>


      @if(Session::has('register'))
        <script type="text/javascript">
          swal("Welcome","Welcome To Our Dishmizer Group...","success")
        </script>
      @endif


      @if(Session::has('insert'))
        <script type="text/javascript">
          swal("insert data","Data inserted Sucessfully...","success")
        </script>
      @endif

</body></html>
