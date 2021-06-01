@extends('layouts.guest')

@section('content')
<div class="container h-50">
  <div class="d-flex h-100 justify-content-center align-items-center login-container">
   
    <div class="row w-100">
       
        <div class="login-form mx-auto">
            <h3 class="mb-4">
                Verify Email
            </h3>
            
            {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
            
            @if (session('status') == 'verification-link-sent')
            <p>
                <div class="alert alert-success">{{ __('A new verification link has been sent to the email address you provided during registration.') }}</div>
            </p>
            @endif
            <p>
                <form method="POST" action="{{ route('verification.send') }}">
                    @csrf
                    <div>
                        <div class="float-left">
                            <button type="submit" class="btn" style="background-color: aliceblue;">{{ __('Resend Verification Email') }}</button>
                        </div>
                        <div class="float-right">
                            <span onclick="window.open('{{ route('logout') }}', '_self')">{{ __('Log Out') }}</span>
                        </div>
                    </div>
                </form>
            </p>
        </div>  
    </div>
  </div>
</div>
@endsection
