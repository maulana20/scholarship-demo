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
            @include('components.alert-success')
            <form method="POST" action="{{ route('password.update') }}">
                @csrf
                <input type="hidden" name="token" value="{{ $request->route('token') }}">
                <div class="form-group mb-3">
                    <label for="emailForm">{{ __('Email') }}</label>
                    <input type="text" name="email" class="form-control form-custom" id="emailForm" placeholder="your email" value="{{ $request->email }}">
                    {{ $errors->first('email') }}
                </div>
                <div class="form-group mb-3">
                    <label for="passwordForm">{{ __('Password') }}</label>
                    <input type="password" name="password" class="form-control form-custom" id="passwordForm" placeholder="{{ __('Password') }}">
                    {{ $errors->first('password') }}
                </div>
                <div class="form-group mb-3">
                    <label for="confirmpasswordForm">{{ __('Confirm Password') }}</label>
                    <input type="password" name="password_confirmation" class="form-control form-custom" id="confirmpasswordForm" placeholder="{{ __('Confirm Password') }}">
                    {{ $errors->first('password_confirmation') }}
                </div>
                <button type="submit" class="btn btn-main btn-lg btn-block mb-4">{{ __('Reset Password') }}</button>
            </form>
            <div class="text-center">
                <a href="/login">Back to Login</a> 
            </div>
        </div>  
    </div>
  </div>
</div>
@endsection
