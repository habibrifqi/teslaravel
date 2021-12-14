@extends('layouts/maindashboard')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
    <h1 class="h2">Create posts</h1>   
</div>

<div class="col-lg-8 p-0">
    <form method="post" action="/dashboard/posts" class="mb-5" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="title" class="form-control @error('title')
                is-invalid
            @enderror" id="title" name="title" value="{{ old('title') }}" >

            @error('title')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="slug" class="form-label">slug</label>
            <input type="slug" class="form-control" id="slug" name="slug"  readonly value="{{ old('slug') }}" >
            @error('slug')
            <div class="invalid-feedback">
                {{ $message }}
            </div>         
            @enderror
        </div>
        <div class="mb-3">
            <label for="slug" class="form-label">Category</label>
            <select class="form-control" aria-label="Default select example" name="category_id" >
                
                @foreach ($categories as $category)
                    @if (old('category_id')== $category->id)
                        <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                    @else
                    <option value="{{ $category->id }}" >{{ $category->name }}</option>
                    @endif
                     
                    
                @endforeach
                {{-- <option >-- MASUKKAN KATEGORI --</option> --}}
            </select>
        </div>

        <div class="mb-3">
            <label for="image" class="form-label">post image</label>
            <img class="img-preview img-fluid mb-3 col-sm-5" style="max-height:500px ">
            <input class="form-control 
            @error('image')
                is-invalid
            @enderror" 
            type="file" id="image" name="image">
            @error('image')
            <div class="invalid-feedback">
                {{ $message }}
            </div>         
            @enderror
        </div>

        <div class="mb-3">
            <label for="slug" class="form-label">Body</label>
            <input id="body" type="hidden" name="body"  value="{{ old('body') }}" >
            <trix-editor input="body"></trix-editor>
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
    });

    // console.log('asdasd');

            
    
   
    

</script>

    
@endsection