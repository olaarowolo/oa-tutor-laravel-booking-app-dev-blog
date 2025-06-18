@extends('layouts.app')
@include('components.blog.head')
@include('partials.navbar')

@section('content')

<head>
    <title>{{ __('Register') }}</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>

<section class="login-container">
    <div class="register-card">
        <div class="h2 mb-4">{{ __('Register') }}</div>

        <div class="register-body">
            <form method="POST" action="{{ route('register') }}" class="register-form">
                @csrf

                <div class="form-group mb-4">
                    <label for="first_name" class="form-label">{{ __('First Name') }}</label>
                    <input id="first_name" type="text" class="form-control login-input @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="given-name" autofocus>
                    @error('first_name')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>

                <div class="form-group mb-4">
                    <label for="last_name" class="form-label">{{ __('Last Name') }}</label>
                    <input id="last_name" type="text" class="form-control login-input @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="family-name">
                    @error('last_name')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>

                <div class="form-group mb-4">
                    <label for="email" class="form-label">{{ __('Email Address') }}</label>
                    <input id="email" type="email" class="form-control login-input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                    @error('email')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>

                <div class="form-group mb-4">
                    <label for="password" class="form-label">{{ __('Password') }}</label>
                    <input id="password" type="password" class="form-control login-input @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>

                <div class="form-group mb-4">
                    <label for="password-confirm" class="form-label">{{ __('Confirm Password') }}</label>
                    <input id="password-confirm" type="password" class="form-control login-input" name="password_confirmation" required autocomplete="new-password">
                </div>
<br>
                <div class="form-group mb-0">
                    <button type="submit" class="btn btn-primary w-100">
                        {{ __('Register') }}
                    </button>
                </div>

            </form>
        </div>
    </div>
</section>

@endsection
