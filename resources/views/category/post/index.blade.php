@extends('layouts.main')
@section('content')
<main class="blog " style="min-height: calc(100vh - 180px)">
    <div class="container">
        <h1 class="edica-page-title" data-aos="fade-up">Блог</h1>
        <section class="featured-posts-section">
            <div class="row">
                @foreach($posts as $post)
                <div class="col-md-4 fetured-post blog-post" data-aos="fade-right">
                    <div class="blog-post-thumbnail-wrapper">
                        <img src="{{asset('storage/' . $post->main_image)}}" alt="blog post">
                    </div>
                    <div class="d-flex justify-content-between">
                        <p class="blog-post-category">{{$post->category->title}}</p>
                        @auth()
                        <form action="{{ route('post.like.store', $post->id) }}" method="POST">
                            @csrf
                            <span>{{ $post->liked_users_count }}</span>
                            <button type="submit" class="bg-transparent border-0">
                                    @if (auth()->user()->likedPosts->contains($post->id))
                                    <i class="fas fa-heart"></i>
                                    @else
                                    <i class="far fa-heart"></i>
                                    @endif
                                </button>
                            </form>
                            @endauth
                            @guest()
                                <div>
                                    <span>{{ $post->liked_users_count }}</span>
                                    <i class="far fa-heart"></i>
                                </div>
                            @endguest
                    </div>
                    <a href="{{route('post.show', $post->id)}}" class="blog-post-permalink">
                        <h6 class="blog-post-title">{{$post->title}}</h6>
                    </a>
                </div>
                @endforeach
               <div class="row">
                <div class="m-auto" style = "margin-top: -100px;" >
                    {{$posts->links()}}
                </div>
               </div>
              
            </div>
        </section>
        
    </div>

</main>

@endsection