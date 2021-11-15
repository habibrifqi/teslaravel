@extends('layouts/main')

{{-- @dump($newpostingan) --}}
@section('container')
    <h2>{{ $newpostingan->title }}</h2>   
    <p>By:rifqi in <a href="/categories/{{ $newpostingan->category->slug }}">{{ $newpostingan->category->name }}</a></p>
    {!! $newpostingan->body !!}
@endsection






