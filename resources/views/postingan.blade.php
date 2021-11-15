@extends('layouts/main')

{{-- @dump($newpostingan) --}}
@section('container')
    <h2>{{ $newpostingan->title }}</h2>   
    {!! $newpostingan->body !!}
@endsection






