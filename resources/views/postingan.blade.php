@extends('layouts/main')

{{-- @dump($newpostingan) --}}
@section('container')
    <h2>{{ $newpostingan->title }}</h2>   
    <p>By: <a class="text-decoration-none" href="/authors/{{ $newpostingan->author->username }}">{{ $newpostingan->author->name }}</a> in <a class="text-decoration-none" href="/categories/{{ $newpostingan->category->slug }}">{{ $newpostingan->category->name }}</a></p>
    {!! $newpostingan->body !!}
@endsection






