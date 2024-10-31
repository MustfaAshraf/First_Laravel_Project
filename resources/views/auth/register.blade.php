@extends('layouts.app')

@section('content')
<div class="register-container">
    <div class="register-header">
        <h2>{{__('language.CREATE_YOUR_ACCOUNT')}}</h2>
        <p>{{__('language.JOIN_OUR_PLATFORM_TODAY')}}</p>
    </div>
    
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="form-group">
            <label for="name" class="form-label">{{__('language.NAME')}}</label>
            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="email" class="form-label">{{__('language.EMAIL_ADDRESS')}}</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="password" class="form-label">{{__('language.PASSWORD')}}</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="password-confirm" class="form-label">{{__('language.CONFIRM_PASSWORD')}}</label>
            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
        </div>

        <div class="form-group mb-0">
            <button type="submit" class="btn btn-primary btn-block">
                {{__('language.REGISTER')}}
            </button>
        </div>
    </form>
</div>
@endsection
