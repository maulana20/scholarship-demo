@extends('layouts.guest')

@section('content')
<div class="login-applicant-pages">
    <div class="col-lg-5">
        <h4 class="text-center">Scholarship Demo</h4>
        <div class="login-content mb-4">
            <h3 class="text-center mb-4">Welcome Back</h3>
            @include('components.validation-errors')
            <form action="{{ route('login') }}" method="post">
                @csrf
                <div class="form-group form-inline">
                    <div class="input-group icon-transparent w-100">
                        <div class="input-group-prepend">
                            <span class="input-group-text border-right-0" id="inputGroupPrepend3"><img src="{{ asset('image/icons/login_email.svg') }}"></span>
                        </div>
                        <input type="email" name="email" class="form-control shadow-none pl-0 border-left-0" value="{{ old('email') }}" placeholder="Enter your Email">
                    </div>
                </div>
                <div class="form-group form-inline">
                    <div class="input-group icon-transparent w-100">
                        <div class="input-group-prepend">
                            <span class="input-group-text border-right-0" id="inputGroupPrepend3"><img src="{{ asset('image/icons/login_password.svg') }}"></span>
                        </div>
                        <input type="password" name="password" class="form-control shadow-none pl-0 border-left-0" value="{{ old('password') }}" placeholder="Enter your Password">
                    </div>
                </div>
                <p class="text-center">Forgot your password? <a href="{{ route('password.request') }}">Reset Password</a></p>
                <div class="form-group m-0">
                    <input type="submit" class="btn btn-block btn-primary-dws" value="Login">
                </div>
            </form>
        </div>
        <p class="text-center">Don’t have an account? <a href="{{ route('register') }}">Register</a></p>
    </div>

    @stack('preload-scripts')
    <script src="{{ asset('/js/app.js') }}" defer></script>
    @stack('scripts')
</div>
@endsection
