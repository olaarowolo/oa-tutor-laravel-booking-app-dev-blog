@extends('layouts.app')
@include('components.blog.head')
@include('partials.navbar')

@section('content')

<head>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<section class="login-container">
    <h1 class="h2 mb-4">Login</h1>

    @if ($errors->any())
        <div class="alert alert-danger login-error">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('login') }}" class="login-form">
        @csrf

        <div class="form-group mb-4">
            <label for="email" class="form-label">Email address</label>
            <input id="email" type="email" class="form-control login-input" name="email" value="{{ old('email') }}" required autofocus>
        </div>

        <div class="form-group mb-4">
            <label for="password" class="form-label">Password</label>
            <input id="password" type="password" class="form-control login-input" name="password" required>
        </div>

        <div class="form-check mb-4">
            <input type="checkbox" class="form-check-input" id="remember" name="remember" {{ old('remember') ? 'checked' : '' }}>
            <label class="form-check-label" for="remember">Remember Me</label>
        </div>

        <button type="submit" class="btn btn-primary login-btn">Login</button>
        <div class="mt-3 login-forgot-password">
            <a href="{{ route('password.request') }}">Forgot Your Password?</a>
        </div>

    </form>
</section>
@endsection
