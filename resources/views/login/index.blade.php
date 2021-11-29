@extends('layouts/mainlogin')

{{-- @dump($active) --}}
@section('cc-login')

    <div class="row justify-content-center" id="row-form">
        <div class="col-md-5">
            <main class="form-signin">
                <form class="ff-form">
                    <div class="img-login text-center">
                        <img class="text-center mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
                    </div>
                    
                <h1 class="h3 mb-3 fw-normal text-center">Please sign in</h1>
                
                
                <div class="form-floating">
                    <label for="floatingInput">Email address</label>
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                </div>
                <div class="form-floating">
                    <label class="mt-3" for="floatingPassword ">Password</label>
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                </div>
            
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