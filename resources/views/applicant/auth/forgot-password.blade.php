@extends('layouts.guest')

@section('content')
<div class="container h-100">
  <div class="d-flex h-100 justify-content-center align-items-center login-container">
   
    <div class="row w-100">
       
        <div class="login-form mx-auto">
            <h3 class="mb-4">
                Reset Password
            </h3>
            <div class="mb-4 text-sm text-gray-600">
                {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
            </div>
            @if(session()->has('status'))
                <div class="alert alert-success">{!! session()->get('status') !!}</div>
            @endif
            <form method="POST" action="{{ route('password.email') }}">
                @csrf
                <div class="form-group mb-3">
                    <label for="usernameForm">Email</label>
                    <input type="text" name="email" class="form-control form-custom" id="usernameForm" placeholder="your email">
                    {{ $errors->first('email') }}
                </div>
                <button type="submit" class="btn btn-main btn-lg btn-block mb-4">{{ __('Email Password Reset Link') }}</button>
            </form>
            <div class="text-center">
                <a href="/login">Back to Login</a> 
            </div>
        </div>  
    </div>
  </div>
</div>
@endsection
