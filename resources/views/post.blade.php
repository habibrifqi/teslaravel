@extends('layouts/main')


@section('container')
    <h1>post</h1>    

    @foreach ( $postingan as $post)
    <article>
        <a href="/post/{{ $post['slug'] }}">
        <h3>{{ $post['jdudul'] }}</h3>
        </a>
        <h5>by; {{ $post['pembuat'] }}</h5>
        <p>{{ $post['des'] }}</p>
    </article>
    @endforeach
@endsection
