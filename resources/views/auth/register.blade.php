@extends('layouts.app')     
        @section('content')
    <div class="sign-up-container" >
    <div class="sign-up-box" >
                <div class="sign-up-header">{{ __('Sign Up for an Account') }}</div>
                <div class="input-form">                   
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                            <div class="user-input"> 
                                <input id="name" placeholder="Your Name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                            </div>
                            <div class="user-input">
                                <input id="phone" placeholder="Mobile Number" type="number" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>
                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                                <div class="user-input">
                                    <input id="email" placeholder="Email " type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                    
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="user-input">
                                <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="user-input">
                                <input id="password-confirm" placeholder="Confirm Password" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                            <div class="agree-checkbox">
                                <input type="checkbox" id="my-checkbox">
                                <label for="my-checkbox">By creating an account means you agree to the <strong> Terms & Conditions</strong> and our <strong>Privacy Policy</strong></label>
                            </div>          
                                <button type="submit" class="sign-up-button">
                                    <div class="button-text">
                                        {{ __('Sign Up') }}
                                    </div>
                                </button>      
                    </form>
                </div>
    </div>
</div>
@endsection

