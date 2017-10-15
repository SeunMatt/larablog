@extends("layouts.front")
@section("content")

 <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('{{asset('assets/front/img/post-bg.jpg')}}')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="post-heading">
                        <h1>{{$post->title}}</h1>
                        <span class="meta">Posted by <a href="#">@if(!is_null($post->user)) {{$post->user->name}} @else Admin @endif</a>  @if(!is_null($post->created_at)) on {{$post->created_at}} @endif</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Post Content -->
    <article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <p>
                    	{{$post->post}}
                    </p>
                </div>
            </div>
        </div>
    </article>


@endsection