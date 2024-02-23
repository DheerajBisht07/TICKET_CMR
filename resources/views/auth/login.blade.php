@extends('layouts.app')

@section('content')
<div class="container">
    <div class="container-md">
    <div class="row justify-content-center">
        <div class="col-md-4 my-5">
                    <div class="d-flex justify-content-center font weight bold"><h2 >Sign In to your Account</h2></div>
                    <div class="font-weight-lighter d-flex justify-content-center"><p>Welcome back! please enter your detail</p></div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end"></label>                       
                                <input id="email" placeholder="Email Address" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror                        
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end"></label>                    
                                <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="row mb-3">
                                <div class="form-check col-6">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                                <div class="col-6"> 
                                    @if (Route::has('password.request'))
                                    <a class="btn-lg btn-link" style="color: #7F56D8;" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                    @endif
                                </div>
                        </div>
                        <div class="row mb-3">
                            <div class="d-grid gap-2 col-12 mx-auto">
                                <button type="submit"style="background: #7F56D8;" 
                                  class="btn btn-primary btn-lg border-0">
                                    {{ __('Sign In') }}
                                </button>
                            </div>
                        </div>                          
                    </form>             
        </div>
    </div>
    </div>
</div>
@endsection