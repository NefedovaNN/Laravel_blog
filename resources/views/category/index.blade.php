@extends('layouts.main')
@section('content')
<main class="blog" style="min-height: calc(100vh - 180px)">
    <div class="container">
        <h1 class="edica-page-title" data-aos="fade-up">Категории</h1>
        <section class="featured-posts-section">
            <ul>
                @foreach($categories as $category)
                <li><a href="{{route('category.post.index', $category->id)}}">{{$category->title}}</a></li>
                @endforeach
            </ul>
        </section>
        
    </div>

</main>

@endsection