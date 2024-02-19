@extends('layouts.app')
@section('content')
<div class="sign-in-container">
    <div class="sign-in-box">
                <div class="sign-in-header">{{ __('Sign In to your Account') }}</div>
                <div class="sign-in-subheader">Welcome back! please enter your detail</div>
                <div class="input-form">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                            <div class="user-input">
                                <input id="email" placeholder="Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="user-input">
                                <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        <div class="save-log-in">                    
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        <div class="remember-me">
                                            {{ __('Remember Me') }}
                                        </div>
                                    </label>    
                                </div>
                                <div class="forget-password">
                                 @if (Route::has('password.request'))
                                    <a class="forget-password-text" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                 @endif
                                </div>                          
                        </div>                  
                            <button type="submit" class="sign-in-button">
                                <div class="button-text">
                                    {{ __('Sign in') }}
                                </div>    
                            </button>                        
                    </form>
                </div>
    </div>
</div>
@endsection
