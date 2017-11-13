@extends('layout')

@section('content')
    <div class="col-sm-12 blog-main">
        <ul>
            <li>{{ $user->name }}</li>
            <li>{{ $user->email }}</li>
        </ul>

        <ul>
            @foreach($user->posts()->get() as $post)
                <li><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></li>
            @endforeach
        </ul>
    </div>
@endsection