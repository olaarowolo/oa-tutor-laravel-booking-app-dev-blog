@extends('layouts.app')
@include('components.blog.head')
@include('partials.navbar')

@section('content')

<head>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<section class=" login-container">
    <h1 class="h2 mb-4">Reset Password</h1>

    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    <form method="POST" action="{{ route('password.email') }}" class="login-form">
        @csrf

        <div class="form-group mb-4">
            <label for="email" class="form-label">Email Address</label>
            <input id="email" type="email" class="form-control login-input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <button type="submit" class="btn btn-primary login-btn">
            {{ __('Send Password Reset Link') }}
        </button>
    </form>
</section>
@endsection
