@extends('layouts.main')
@section('container')
    <article>
        <h3>
            {{ $post->title }}
        </h3>
        <h5>By: Ryan fabella</h5>
        <h5><a href="/categories/{{ $post->category->slug }}"> {{ $post->category->name }}</a></h5>
        {!! $post->body !!}
    </article>
    <a href="/posts">Balik</a>
@endsection
