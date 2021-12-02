@extends('layouts/maindashboard')

@section('container')
<div class="container">
    <div class="row">
      <div class="col-lg-10 ">
        <h2 class="mb-3">{{ $newpostingan->title }}</h2>
          <img src="https://source.unsplash.com/1600x900/?computer" alt="" class="img-fluid">
            </p>{!! $newpostingan->body !!} 
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
          <a href="" class="btn btn-warning">edit</a>
          <a href="" class="btn btn-danger">delete</a>
      </div>
    </div>
</div>

@endsection