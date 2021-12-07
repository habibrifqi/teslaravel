@extends('layouts/maindashboard')

@section('container')
<div id="preloader" class="preloader">
  <div class="loading">
    <img src="https://www.google.com/url?sa=i&url=https%3A%2F%2Ftenor.com%2Fsearch%2Floading-gifs&psig=AOvVaw2BWrOZd1oHSZ4NPdGKGvaR&ust=1638886736292000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCPCw6v-uz_QCFQAAAAAdAAAAABAD" width="80">
    <p>Harap Tunggu</p>
  </div>
</div>
<div class="container">
    <div class="row">
      <div class="col-lg-10 ">
        <h2 class="mb-3">{{ $newpostingan->title }}</h2>
        @if ($newpostingan->image)
        <img src="{{ asset('storage/'.$newpostingan->image) }}" alt="" class="img-fluid">
        @else
            <img src="https://source.unsplash.com/1600x900/?computer" alt="" class="img-fluid">
        @endif
          
            </p>
            
              {!! $newpostingan->body !!} 
            
            
            <div class="tag-widget post-tag-container mb-5 mt-5">
                <div class="tagcloud">
                    <a href="/post?category={{ $newpostingan->category->slug }}" class="tag-cloud-link">{{ $newpostingan->category->name }}</a>
                </div>
            </div> 
        <div class="about-author d-flex p-4 bg-dark"> 
          <div class="bio mr-5">
            <img src="https://source.unsplash.com/1600x900/?face" alt="Image placeholder" class="img-fluid mb-4 ">
          </div>
          <div class="desc">
           <a href="/authors/{{ $newpostingan->author->username }}"> <h3 class="auther-post">{{ $newpostingan->author->name }}</h3></a>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus itaque, autem necessitatibus voluptate quod mollitia delectus aut, sunt placeat nam vero culpa sapiente consectetur similique, inventore eos fugit cupiditate numquam!</p>
          </div>
        </div>
      </div>
      <div class="col-lg-2 ">
          <a href="/dashboard/posts/{{ $newpostingan->slug }}/edit" class="btn btn-warning">edit</a>
          {{-- <a href="/dashboard/posts/" class="btn btn-danger">delete</a> --}}

          <form action="/dashboard/posts/{{  $newpostingan->slug }}" method="post" class="d-inline">
            @method('delete')
            @csrf
            <button role="button" class="text-light border-0 bg-danger bb-delete btn " onclick="return confirm('yakin kah maniezz')" ><span data-feather="trash" class="dt"></span>Delete</button>
        </form>
      </div>
    </div>
</div>

@endsection