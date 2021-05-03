@extends('user_dashboard')
@section('user_content')
<br><br>
  <section class="container py-5">
    <h4 class="text-center">BLOG</h4>
    <hr>
    <br>
    <div class="row">
      <div class="col-md-8 col-12 col-lg-8">
        <span class="h4">  {{$single_blog->blog_title}}</span><br><br>
        <div class="">
          <img width="100%" height="400px;" src="{{asset($single_blog->blog_image)}}" alt="">
        </div>
        <div class="py-3">
          <span class="lead container"> {{$single_blog->blog_short_description}} <br><br> {{$single_blog->blog_description}}  </span>
        </div>
        <p class="form-inline"> Thank You </p>
      </div>










      <div class="col-md-4 col-12 col-lg-4">
        <div class="row">
          @foreach(App\blog::latest()->where('blog_status',1)->paginate(4) as $v_blog)
          <div class="col-md-12 col-12 col-lg-12">

          <div class="card" style=" height: 350px;">
            <a href="{{url('single-blog/'.$v_blog->id)}}">
              <img style="background-image: cover; width: 100%; height: 200px;" src="{{asset($v_blog->blog_image)}}" alt="">
            </a>
            <div class="card-body">
              <span>  {{$v_blog->created_at->diffForHumans()}}</span>
              <h4><a style="text-decoration: none; " href="{{url('single-blog/'.$v_blog->id)}}">
              {{$v_blog->blog_title}}</a></h4>

          </div>
          </div>

          </div>
          @endforeach
        </div>
      </div>
    </div>
  </section>


@endsection
