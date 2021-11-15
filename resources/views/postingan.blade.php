@extends('layouts/main')


@section('container')
    <h2>{{ $newpostingan['jdudul'] }}</h2>   
    <h5>by; {{ $newpostingan['pembuat'] }}</h5>  
    <p>{{ $newpostingan['des'] }}</p>
@endsection
