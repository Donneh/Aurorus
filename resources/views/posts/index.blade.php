@extends('layout')

@section('content')
    <div class="col-sm-12 blog-main">

        @foreach($posts as $post)
            <div class="blog-post">
                <h2 class="blog-post-title">
                    <a href="/posts/{{ $post->id }}">
                        {{ $post->title }}
                    </a>
                </h2>

                <p class="blog-post-meta">
                    {{ $post->user->name }}
                    {{ $post->created_at->toFormattedDateString() }}
                </p>

                <p>{{ $post->body }}</p>
            </div>
        @endforeach
        <nav class="blog-pagination">
            <a class="btn btn-outline-primary" href="#">Older</a>
            <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
        </nav>
    </div>
@endsection