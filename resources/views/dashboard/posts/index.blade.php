@extends('layouts/maindashboard')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
    <h1 class="h2">My posts</h1>   
    </div>
    <div class="table-responsive">
        <table class="table table-striped table-sm">
            <a href="/dashboard/posts/create" class="btn btn-primary mb-3">Create New Post</a>
            @if (session()->has('success'))
                <div class="alert alert-success" role="alert">{{ session('success') }}</div>
            @endif

            
            <thead class="ss">
                <tr>
                  <th>#</th>
                  <th>Judul</th>
                  <th>Category</th>
                  <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->Category->name }}</td>
                    <td>
                        <a href="/dashboard/posts/{{ $post->slug }}" class="badge bg-info"><span data-feather="eye"></span></a>
                        <a href="/dashboard/posts/{{ $post->slug }}/edit" ><span data-feather="edit"></span></a>
                        <form action="/dashboard/posts/{{  $post->slug }}" method="post" class="d-inline">
                            @method('delete')
                            @csrf
                            <button role="button" class="text-danger border-0 bg-transparent m-0 p-0 bb-delete" onclick="return confirm('yakin kah maniezz')" ><span data-feather="trash"></span></button>
                        </form>
                        {{-- <a href="/dashboard/posts/{{ $post->slug}}" class="text-danger"><span data-feather="trash"></span></a> --}}
                    </td>
                </tr>
                @endforeach
                
            </tbody>
        </table>
    </div>

@endsection