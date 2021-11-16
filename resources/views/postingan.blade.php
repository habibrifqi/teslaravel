@extends('layouts/main')

{{-- @dump($newpostingan) --}}
@section('container')
    <h2>{{ $newpostingan->title }}</h2>   
    <p>By: <a class="text-decoration-none" href="">{{ $newpostingan->user->name }}</a> in <a class="text-decoration-none" href="/categories/{{ $newpostingan->category->slug }}">{{ $newpostingan->category->name }}</a></p>
    {!! $newpostingan->body !!}
@endsection






