@extends('layouts/maindashboard')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
    <h1 class="h2">Create posts</h1>   
</div>

<div class="col-lg-8 p-0">
    <form method="post" action="/dashboard/posts">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="title" class="form-control" id="title" name="title">
        </div>
        <div class="mb-3">
            <label for="slug" class="form-label">slug</label>
            <input type="slug" class="form-control" id="slug" name="slug" disabled readonly>
        </div>
        <div class="mb-3">
            <label for="slug" class="form-label">Category</label>
            <select class="form-control" aria-label="Default select example" name="category_id">
               
                @foreach ($categories as $category)
                     <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                    
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="slug" class="form-label">Body</label>
            <input id="x" value="Editor content goes here" type="hidden" name="content">
            <trix-editor input="x"></trix-editor>
        </div>

        <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
        </div>
        <button type="submit" class="btn btn-primary">Create Post</button>
    </form>
</div>

<script>
    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');

    title.addEventListener('change',function(){
        fetch('/dashboard/posts/checkSlug?title=' + title.value)
        .then(response => response.json())
        .then(data => slug.value = data.slug)
    })

</script>

    
@endsection