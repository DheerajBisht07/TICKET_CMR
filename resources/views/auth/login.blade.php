<head>
    <style>
     .sign-in-container{
        width: 1440px;
        height: 900px;
        padding: 0px, 354px, 0px, 354px;
        background: #F8FAFC;
        justify-content: center; 
        display:flex;
     }
     .sign-in-box{
            width: 480px;
            height: 900px;
            background: #F8FAFC;
            /* justify-content: center; */
            /* margin-left:250px;
            margin-right:250px; */
            margin-top: 80px;
     }
     .sign-in-header{
            width: auto;
            left: 164px;
            font-family: Inter;
            font-size: 30px;
            font-weight: 700;
            color: #0F172A;
            align-items: center;
            justify-content: center; 
     }
     .sign-in-subheader{
        //styleName: body/medium/regular;
        font-family: Inter;
        font-size: 14px;
        font-weight: 400;
        line-height: 22px;
        letter-spacing: 0px;
        text-align: left;
     }
     #email,#password{
        height: 45px;
     }
     .input-form{
      padding-top: 20px;
      padding-bottom:20px;
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
     .button-text{
            width: 62px
            height: 22px
            styleName: Heading/H6;
            font-family: Inter;
            font-size: 20px;
            font-weight: 700;
            line-height: 22px;
     }
     .sign-in-button{
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
     .remember-me{
        //styleName: body/medium/medium;
        font-family: Inter;
        font-size: 14px;
        font-weight: 500;
        line-height: 22px;
        letter-spacing: 0.20000000298023224px;
        text-align: left;
        margin-top: 3px;
        margin-left:5px;
        margin-right: 30px;
        //styleName: body/medium/medium;
     }
     .form-check{
        justify:left;
        width:150px;
     }
    #remember{
        width: 20px;
        height: 20px;

     }
     .save-log-in{
        width: 404px;
        display:flex;
        margin-bottom: 30px;
     }
     .forget-password{
        margin-top:3px;
        margin-left:105px;
        padding-right:none;
        /* float:right; */
        padding-right:none;
        /* display:block; */
    }
    .forget-password-text{
        //styleName: body/medium/bold;
        font-family: Inter;
        font-size: 14px;
        font-weight: 700;
        line-height: 22px;
        letter-spacing: 0px;
        text-align: right;
        color: #7F56D8;
     }
    </style>
</head>
@extends('layouts.app')

@section('content')
<div class="sign-in-container">
    <div class="sign-in-box">
        <!-- <div class="col-md-8"> -->
            <!-- <div class="card"> -->
                <div class="sign-in-header">{{ __('Sign In to your Account') }}</div>
                <div class="sign-in-subheader">Welcome back! please enter your detail</div>
                <div class="input-form">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <!-- <div class="row mb-3"> -->
                            <!-- <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label> -->
                            <div class="user-input">
                                <input id="email" placeholder="Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

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
                                <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        <!-- </div> -->

                        <div class="save-log-in">
                            <!-- <div class="col-md-6 offset-md-4"> -->
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
                            <!-- </div> -->
                        </div>

                        <!-- <div class="row mb-0"> -->
                            <button type="submit" class="sign-in-button">
                                <div class="button-text">
                                    {{ __('Sign in') }}
                                </div>    
                            </button>    
                        <!-- </div> -->
                    </form>
                </div>
            <!-- </div> -->
        <!-- </div> -->
    </div>
</div>
@endsection
