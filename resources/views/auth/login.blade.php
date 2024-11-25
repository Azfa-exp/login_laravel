@extends('layouts.app')

@section('content')
<style>

    body {
        background-color: #f8f9fa;
    }

    .login-container {
        min-height: 100vh;
    }

    .card {
        border: none;
    }

    .card-header {
        background-color: #343a40;
        color: white;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
    }

    .card-body {
        padding: 2rem;
    }

    .form-control {
        border-radius: 50px;
    }

    .form-control:focus {
        box-shadow: none;
        border-color: #495057;
    }

    .input-group-text {
        background-color: #f1f3f5;
        border: none;
    }

    .btn-dark {
        background-color: #343a40;
        border: none;
    }

    .btn-dark:hover {
        background-color: #495057;
    }

    .form-check-label {
        cursor: pointer;
    }

    .text-muted {
        font-size: 0.9rem;
    }

    .fw-bold {
        font-weight: 600;
    }

    .text-dark {
        color: #343a40 !important;
    }

    .text-dark:hover {
        color: #495057 !important;
        text-decoration: underline;
    }

    .text-center a {
        transition: color 0.3s ease;
    }
</style>

<div class="container d-flex align-items-center justify-content-center login-container">
    <div class="row justify-content-center w-100">
        <div class="col-md-5">
            <div class="card shadow-sm rounded border-0">
                <div class="card-header text-center py-3">
                    <h4 class="mb-0">{{ __('Login') }}</h4>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="mb-3">
                            <label for="email" class="form-label">{{ __('Email Address') }}</label>
                            <div class="input-group">
                                <span class="input-group-text">
                                    <i class="fa fa-envelope text-muted"></i>
                                </span>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            </div>
                            @error('email')
                                <div class="invalid-feedback d-block mt-1">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">{{ __('Password') }}</label>
                            <div class="input-group">
                                <span class="input-group-text">
                                    <i class="fa fa-lock text-muted"></i>
                                </span>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            </div>
                            @error('password')
                                <div class="invalid-feedback d-block mt-1">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3 form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>

                        <div class="d-grid mb-3">
                            <button type="submit" class="btn btn-dark rounded-pill">
                                {{ __('Login') }}
                            </button>
                        </div>

                        @if (Route::has('password.request'))
                            <div class="text-center mt-2">
                                <a class="text-muted" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            </div>
                        @endif

                        <!-- Tambahkan Tautan "Don't have an account?" -->
                        @if (Route::has('register'))
                            <div class="text-center mt-3">
                                <span class="text-muted">{{ __("Don't have an account?") }}</span>
                                <a class="text-dark fw-bold" href="{{ route('register') }}">
                                    {{ __('Sign Up') }}
                                </a>
                            </div>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
