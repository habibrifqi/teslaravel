@extends('layouts/mainlogin')

{{-- @dump($active) --}}
@section('cc-login')

    <div class="row justify-content-center" id="row-form">
        <div class="col-md-5">
            <main class="form-registrasion">
                <form class="ff-form" action="/register" method="post">
                    <div class="img-login text-center">
                        <img class="text-center mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
                    </div>
                    
                <h1 class="h3 mb-3 fw-normal text-center">Registrasi Form</h1>
                    
                <div class="form-floating">
                    <label for="name">Name</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="name">
                </div>
                <div class="form-floating">
                    <label class="mt-3" for="Username">Username</label>
                    <input type="text" name="username" class="form-control" id="username" placeholder='username'>
                </div>
                <div class="form-floating">
                    <label class="mt-3" for="email">Email address</label>
                    <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
                </div>
                <div class="form-floating">
                    <label class="mt-3" for="password">Password</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password">
                </div>
            
                <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Login</button>
                {{-- <p class="mt-5 mb-3 text-muted text-center">&copy; 2017–2021</p> --}}
                </form>
                <div class="text-center mt-1">
                    <small class="text-center">already register? <a href="/login">Login</a></small>
                </div>
                
            </main>

        </div>
    </div>

   
    
@endsection