<head>
    <style>
        .sign-up-container{
            width: 1440px;
            height: 900px;
            padding: 0px, 354px, 0px, 354px;
            background: #F8FAFC;
            justify-content: center; 
            display:flex;
        }
        .sign-up-box{
            width: 732px;
            height: 900px;
            background: #F8FAFC;
            justify-content: center;
            margin-left:300px;
        }
        .sign-up-header{
            width: auto;
            left: 164px;
            font-family: Inter;
            font-size: 30px;
            font-weight: 700;
            color: #0F172A;
            align-items: center;
            justify-content: center; 
            margin-bottom: 20px;
        }
        .user-input{
            width: 404px;
            height: 70px;
            padding: 5px, 8px, 5px, 8px;
            border-radius: 12px;
            border: 1px;
            margin-top: 4px;
            margin-bottom: 4px;
        }  
        .agree-checkbox{
            width: 404px;
            height: 56px;
            padding: 8px, 16px, 8px, 16px;
            border-radius: 12px;
            border: 1px;
            margin-top: 25px;
            margin-bottom: 25px;
            display: flex;
        }
        #my-checkbox{
            margin-top:none;
            margin-bottom: 32px;
            margin-right: 10px;
        }
        .sign-up-button{
            width: 404px;
            height: 56px;
            /* top: 547px;
            left: 164px; */
            padding: 8px;
            border-radius: 12px ;
            border-color: white;
            color: white;
            /* font-size: 25px; */
            background-color: #7F56D8;
            text-align: center;           
        }  
        .button-text{
            width: 62px
            height: 22px
            styleName: Heading/H6;
            font-family: Inter;
            font-size: 20px;
            font-weight: 700;
            line-height: 22px;
        } 
    </style>
</head>
@extends('layouts.app')

@section('content')
<div class="sign-up-container" >
    <div class="sign-up-box" >
        <!-- <div class="col-md-8"> -->
            <!-- <div class="card"> -->
                <div class="sign-up-header">{{ __('Sign Up for an Account') }}</div>

                <div class="input-form">
                    
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <!-- <div class="row mb-3"> -->
                            <!-- <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Your Name') }}</label> -->
                            <div class="user-input">
                                <input id="name" placeholder="Your Name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        <!-- </div> -->
                        <!-- <div class="row mb-3"> -->
                            <!-- <label for="phone" class="col-md-4 col-form-label text-md-end">{{ __('Mobile Number') }}</label> -->
                            <div class="user-input">
                                <input id="phone" placeholder="Mobile Number" type="number" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        <!-- </div> -->


                        <!-- <div class="row mb-3"> -->
                            <!-- <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email ') }}</label> -->

                            <div class="user-input">
                                <input id="email" placeholder="Email " type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        <!-- </div> -->


                        <!-- <div class="row mb-3"> -->
                            <!-- <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label> -->

                            <div class="user-input">
                                <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        <!-- </div> -->

                        <!-- <div class="row mb-3"> -->
                            <!-- <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label> -->
                            <div class="user-input">
                                <input id="password-confirm" placeholder="Confirm Password" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                            <div class="agree-checkbox">
                            <input type="checkbox" id="my-checkbox">
                            <label for="my-checkbox">By creating an account means you agree to the <strong> Terms & Conditions</strong> and our <strong>Privacy Policy</strong></label>
                            </div>
                        <!-- </div> -->
                        <!-- <div class="row mb-0"> -->
                            <!-- <div class="sign-up-button"> -->
                                <button type="submit" class="sign-up-button">
                                    <div class="button-text">
                                        {{ __('Sign Up') }}
                                    </div>
                                </button>
                            <!-- </div> -->
                        <!-- </div> -->
                    </form>
                </div>
            <!-- </div> -->
        <!-- </div> -->
    </div>
</div>
@endsection
