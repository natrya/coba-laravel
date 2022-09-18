@extends('layouts.main')
@section('container')
    <article>
        <h3>
            {{ $post->title }}
        </h3>
        <h5>By: {{ $post->user->name }},
        <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none"> {{ $post->category->name }}</a></h5>
        {!! $post->body !!}
    </article>
    <p></p>
    <a href="/posts" class="text-decoration-none">Back to post</a>
@endsection
