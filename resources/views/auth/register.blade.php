@extends('layouts.app')

@section('content')
<div class="container" style="background: #F8FAFC;" >
  <div class="container-md">
    <div class="row justify-content-center" >
        <div class="col-md-4">       
               <h2 class="text-center my-5 font weight bold" >Sign Up for an Account</h2>                
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end"></label>                         
                                <input id="name" placeholder="Your Name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror             
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="col-md-4 col-form-label text-md-end"></label>                         
                            <input id="phone" placeholder="Mobile number" type="number" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>
                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror                          
                        </div>
                        <div class="mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end"></label>                        
                                <input id="email" placeholder="Email Address" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror                          
                        </div>
                        <div class="mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end"></label>                          
                                <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror                         
                        </div>
                        <div class="text-left mb-0 small"><p class="font-weight-light">Your password must have at least 8 characters</p></div>
                        <div class="mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end"></label>
                                <input id="password-confirm" placeholder="Confirm Password" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div> 
                        <div class="form-check my-4 font-weight-light">
                          <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                          <label class="form-check-label font-weight-lighter  small" for="flexCheckDefault">
                              By creating an account means you agree to the <strong>Terms
                              & Conditions</strong> and our<strong> Privacy Policy</strong>
                          </label>
                        </div>                       
                            <div class="d-grid gap-2 col-12 mx-auto">
                                <button type="submit" style="background: #7F56D8;" 
                                   class="btn btn-primary btn-lg border-0">
                                    {{ __('Sign Up') }}
                                </button>
                            </div>                    
                    </form>             
        </div>
    </div>
    </div>
</div>
@endsection