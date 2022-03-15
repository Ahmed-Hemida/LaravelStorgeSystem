@extends('layouts.app')
@section('style')
<style>
html {
    height: 100%;
    margin: 0;
}
::placeholder {
  color:#ec1b52!important;
}
body {
    background: url('https://podu.me/img/login_bg_new.png');
    height: 100%;
    margin: 0;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

.form-control:focus {
    /* box-shadow: 0 0 0 0.25rem #fbd0db !important; */
    box-shadow: none !important;
    background: #F9F9F9 !important;
}

.rounded {
    border-radius: 100px !important;
}

.form-control {
    color: #ec1b52 !important;
    text-align: center;
    caret-color: #ec1b52;
    border: none;
    background: #F9F9F9;
    padding: 10px;
}

.bg-rose {
    background: #ec1b52;
}

.text-rose {
    color: #ec1b52;
}
.card{
    margin-top:5%;
}

.text-rose-li {
    color: #fbd0db;
}

a {
    text-decoration: none;
}

a:hover {
    color: #ec1b52 !important;
}
@media only screen and (max-width: 650px) {
    .m-5{
        margin:0px!important;
    }
    .card{
        float: none!important;
        display: block;
        margin-right:auto;
        margin-left:auto;
        margin-top:20%;
        width:90%!important;
        border-radius:50px!important;

    }

}
</style>
@endsection
@section('content')
<div class="container">
    <div class="card w-50 float-end rounded">
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center">
                        <a class="text-rose mr-1"  href="/register">Sign up</a>
                        <span class="text-warning">|</span>
                        <a class="text-rose-li ml-1"href="/login">Login</a>
                    </h1>
                    <form method="POST" action="{{ route('login') }}" class="">
                        @csrf

                        <div class="m-5">
                            <!-- autocomplete="email" -->
                            <input id="email" autocomplete="off" placeholder="Enter Email" type="email"
                                class="form-control rounded-pill mt-5 @error('email') is-invalid @enderror" name="email"
                                value="{{ old('email') }}" required autofocus>

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror


                            <!-- autocomplete="current-password" -->
                            <input id="password" autocomplete="off" placeholder="Enter password" type="password"
                                class="form-control rounded-pill mt-5 mb-2 @error('password') is-invalid @enderror"
                                name="password" required>

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror

                            <div class="row mb-0">
                                <div class="col-md-12 ">
                                    <button type="submit" class="btn bg-rose w-100 text-white  mt-5 rounded-pill">
                                        {{ __('Login') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                    <a class="btn btn-link d-block text-secondary"
                                        href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection