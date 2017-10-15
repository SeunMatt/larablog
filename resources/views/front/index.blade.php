@extends("layouts.front")
@section("content")
<!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('{{asset('assets/front/img/home-bg.jpg')}}')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>Lara Blog</h1>
                        <hr class="small">
                        <span class="subheading">A Clean Blog built with Laravel By Seun Matt</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
               
                @foreach($posts  as $post) 
                 <div class="post-preview">
                    <a href="{{route('front.view', ['id' => $post->id])}}">
                        <h2 class="post-title">
                            {{$post->title}}
                        </h2>
                        <h3 class="post-subtitle">
                            {{substr($post->post, 0, 150)}}
                        </h3>
                    </a>
                    <p class="post-meta">Posted by <a href="#">@if(!is_null($post->user)) {{$post->user->name}} @else Admin @endif</a> @if(!is_null($post->created_at)) on {{$post->created_at}} @endif</p>
                </div>
                <hr>
                @endforeach

                <!-- Pager -->
                <ul class="pager">
                    <li class="next">
                        <a href="#">Older Posts &rarr;</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

@endsection