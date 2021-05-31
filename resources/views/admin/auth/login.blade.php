@extends('layouts.guest')

@section('content')
<div class="container h-100">
  <div class="d-flex h-100 justify-content-center align-items-center login-container">
    <div class="login-wrapper row w-100">
        <div class="d-none d-md-flex justify-content-center flex-column align-items-center login-image">
            <div class="login-illustration">
                <img src="{{ asset('/image/login-image.png') }}" class="img-fluid">
            </div>
        </div>
        <div class="login-form">
            @include('components.validation-errors')
            <form method="POST" action="{{ route('admin.login') }}">
                <div class="form-group mb-3">
                    <label for="usernameForm">Email</label>
                    <input type="text" name="email" class="form-control form-custom" id="usernameForm" placeholder="your email" value="{{ old('email') }}">
                </div>
                <div class="form-group mb-4">
                    <label for="passwordForm">Password</label>
                    <input type="password" name="password" class="form-control form-custom" id="passwordForm" placeholder="your password" value="{{ old('password') }}">
                </div>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <button type="submit" class="btn btn-main btn-lg btn-block mb-4">Sign In</button>
            </form>
            <div class="text-center">
                <!--a href="forgot-password" class="text-main">Forgot Password ?</a-->
            </div>
        </div>  
        
    </div>
     
  </div>
</div>
@endsection
