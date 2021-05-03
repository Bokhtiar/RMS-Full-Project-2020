@extends('user_dashboard')
@section('user_content')

<br><br><br>
<!-- section start  -->
<div class="container py-5">
<div class="main_title">
<h2 class="nomargin_top"> Blogs</h2>
<hr class="divider">
</div>
<div class="row">


@foreach($blog as $v_blog)


<div class="col-md-4 col-sm-4 col-6 mt-5 mt-5">
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
<div class="col-md-12 clearfix">
<div class="text-center">
{{$blog->links()}}
</div>
</div>
</div>
</div>
<!-- section end  -->


@endsection
