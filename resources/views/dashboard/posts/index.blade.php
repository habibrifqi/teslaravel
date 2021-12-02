@extends('layouts/maindashboard')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
    <h1 class="h2">My posts</h1>   
    </div>
    
    <div class="table-responsive">
        <table class="table table-striped table-sm">
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
                        <a href="/dashboard/post/{{ $post->id }}" ><span data-feather="edit"></span></a>
                        <a href="/dashboard/post/{{ $post->id }}" class="text-danger"><span data-feather="trash"></span></a>
                    </td>
                </tr>
                @endforeach
                
            </tbody>
        </table>
    </div>

@endsection