@extends('layouts.account')

@section('content')
<div class="login-content">
    <h1 class="text-center"><strong>{{ config('utility.org_name', '') }}</strong></h1>
    <h3 class="text-center"><strong>User Authorization</strong></h3>
    <form method="POST" action="{{ route('login') }}" class="login-form">
            @csrf
            <div class="alert alert-danger display-hide">
                <button class="close" data-close="alert"></button>
                <span>Enter any username and password. </span>
            </div>
            @error('email')
            <div class="alert alert-danger">
                <button class="close" data-close="alert"></button>
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            </div>
            @enderror
            @error('password')
            <div class="alert alert-danger">
                <button class="close" data-close="alert"></button>
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            </div>
            @enderror
            <div class="form-group row">

                <div class="col-md-6">
                    <input id="email" type="email" placeholder=" Email" class="form-control form-control-solid placeholder-no-fix form-group @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="off" autofocus>


                </div>

                <div class="col-md-6">
                    <input id="password" placeholder=" Password" type="password" class="form-control form-control-solid placeholder-no-fix form-group @error('password') is-invalid @enderror" name="password" required autocomplete="off">


                </div>
            </div>

            <div class="form-group row">
                <div class="col-md-6 offset-md-4">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                </div>
            </div>
            <div class="col-sm-8 text-right">
                @if (Route::has('password.request'))
                    <div class="forgot-password">
                        <a href="javascript:;" id="forget-password" class="forget-password">Forgot Password?</a>
                    </div>
                @endif
                <button type="submit" class="btn green">
                    {{ __('Login') }}
                </button>
            </div>
        </form>
    <!-- BEGIN FORGOT PASSWORD FORM -->
    <form method="POST" action="{{ route('password.email') }}" class="forget-form">
        @csrf
        <h3 class="font-green">Forgot Password ?</h3>
        <p> Enter your e-mail address below to reset your password. </p>
        <div class="form-group">
            <input id="email" type="email" placeholder=" Email Address" class="form-control placeholder-no-fix form-group @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="off" autofocus>

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-actions">
            <button type="button" id="back-btn" class="btn green btn-outline">Back</button>
            <button type="submit" class="btn btn-success uppercase pull-right">
                {{ __('Send Password Reset Link') }}
            </button>
        </div>
    </form>
    <!-- END FORGOT PASSWORD FORM -->
</div>
@endsection
