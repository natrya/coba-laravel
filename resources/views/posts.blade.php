@extends('layouts.main')
@section('container')
    <h1>{{ $title }}</h1>
    @foreach ($posts as $post)
        <article class="mb-5">
            <h3>
                <a href="/posts/{{ $post->slug }}" class="text-decoration-none">
                    {{ $post->title }}
                </a>
            </h3>
            <h5>By: <a href="/users/{{ $post->user->username }}" class="text-decoration-none">{{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->name }}" class="text-decoration-none">{{ $post->category->name }}</a></h5>
            <p>{{ $post->excerpt }}</p>
        </article>
    @endforeach
@endsection
