@extends('layouts/mainlogin')

{{-- @dump($active) --}}
@section('cc-login')

    <div class="row justify-content-center" id="row-form">
        <div class="col-md-5">
            <main class="form-signin">
                
                <form class="ff-form" action="/login" method="post">
                    <div class="img-login text-center">
                        <img class="text-center mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
                    </div>
                    @csrf
                    @if (session()->has('success'))
                        <div class="alert alert-success alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <strong>Registrasi Berhasil!</strong> silahkan Login.
                      </div>
                    @endif
                   
                    {{-- <div class="alert alert-danger alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        {{ session('loginError') }}
                      </div> --}}
                    
                    
                <h1 class="h3 mb-3 fw-normal text-center">Please sign in</h1>
                
                
                <div class="form-floating">
                    <label for="email">Email address</label>
                    <input type="email" name="email" class="form-control @error('email')
                        is-invalid
                    @enderror" id="email" placeholder="name@example.com" value="{{ old('email') }}" autofocus required>
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>

                    @enderror
                </div>
                <div class="form-floating">
                    <label class="mt-3" for="password ">Password</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                </div>

                @if (session()->has('loginError'))
                    <div class="alert alert-danger alert-dismissible" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                         {{ session('loginError') }}
                    </div>
                 @endif
            
                <button class="w-100 btn btn-lg btn-primary p-2 mt-4" type="submit">Login</button>
                {{-- <p class="mt-5 mb-3 text-muted text-center">&copy; 2017–2021</p> --}}
                </form>
                <div class="text-center mt-1">
                    <small class="text-center">Not registered <a href="/register">Regiter Now</a></small>
                </div>
                
            </main>

        </div>
    </div>


    <?php
   
    ?>
   
    
@endsection