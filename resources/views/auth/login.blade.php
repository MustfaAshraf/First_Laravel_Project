@extends('layouts.app')

@section('content')
<div class="login-container">
    <div class="login-header">
        <h2>{{__('language.WELCOME!')}}</h2>
        <p>{{__('language.PLEASE_LOGIN_TO_YOUR_ACCOUNT')}}</p>
    </div>
    
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="form-group">
            <label for="email" class="form-label">{{__('language.EMAIL_ADDRESS')}}</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="password" class="form-label">{{__('language.PASSWORD')}}</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                <label class="form-check-label" for="remember">
                    {{ __('language.REMEMBER_ME') }}
                </label>
            </div>
        </div>

        <div class="form-group mb-0">
            <button type="submit" class="btn btn-primary btn-block">
                {{ __('language.LOGIN') }}
            </button>

            @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('language.FORGOT_YOUR_PASSWORD?') }}
                </a>
            @endif
        </div>
    </form>
</div>
@endsection
