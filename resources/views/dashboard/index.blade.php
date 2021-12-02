{{-- <h1>Welcome,Rifqi Error</h1>

<li>
    <form action="/logout" method="post">
      @csrf
        <button type="submit" class="ii"><a href="#"><i class="fas fa-sign-out-alt"></i> Log0ut</a></button>
    </form>
    {{-- <a href="#"><i class="fas fa-sign-out-alt"></i>LogOut</a> --}}
  {{-- </li> --}} 


@extends('layouts/maindashboard')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
  <h1 class="h2">Wellcome {{ auth()->user()->name }}</h1>
  {{-- <div class="btn-toolbar mb-2 mb-md-0">
    <div class="btn-group mr-2">
      <button class="btn btn-sm btn-outline-secondary">Share</button>
      <button class="btn btn-sm btn-outline-secondary">Export</button>
    </div>
    <button class="btn btn-sm btn-outline-secondary dropdown-toggle">
      <span data-feather="calendar"></span>
      This week
    </button>
  </div> --}}
</div>


@endsection
