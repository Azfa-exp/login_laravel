@extends('layouts.app')

@section('content')
<style>
    /* CSS for a modern and minimal registration form with role selection */
    body {
        background-color: #f8f9fa;
    }

    .register-container {
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

    .form-control, .form-select {
        border-radius: 50px;
    }

    .form-control:focus, .form-select:focus {
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

<div class="container d-flex align-items-center justify-content-center register-container">
    <div class="row justify-content-center w-100">
        <div class="col-md-6">
            <div class="card shadow-sm rounded border-0">
                <div class="card-header text-center py-3">
                    <h4 class="mb-0">{{ __('Register') }}</h4>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="mb-3">
                            <label for="name" class="form-label">{{ __('Name') }}</label>
                            <div class="input-group">
                                <span class="input-group-text">
                                    <i class="fa fa-user text-muted"></i>
                                </span>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            </div>
                            @error('name')
                                <div class="invalid-feedback d-block mt-1">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">{{ __('Email Address') }}</label>
                            <div class="input-group">
                                <span class="input-group-text">
                                    <i class="fa fa-envelope text-muted"></i>
                                </span>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                            </div>
                            @error('password')
                                <div class="invalid-feedback d-block mt-1">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password-confirm" class="form-label">{{ __('Confirm Password') }}</label>
                            <div class="input-group">
                                <span class="input-group-text">
                                    <i class="fa fa-lock text-muted"></i>
                                </span>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <!-- Role Selection Dropdown -->
                        <div class="mb-3">
                            <label for="role" class="form-label">{{ __('Register as') }}</label>
                            <div class="input-group">
                                <span class="input-group-text">
                                    <i class="fa fa-users text-muted"></i>
                                </span>
                                <select id="role" class="form-select @error('role') is-invalid @enderror" name="role" required>
                                    <option value="siswa" {{ old('role') == 'siswa' ? 'selected' : '' }}>Siswa</option>
                                    <option value="guru" {{ old('role') == 'guru' ? 'selected' : '' }}>Guru</option>
                                    <option value="admin" {{ old('role') == 'admin' ? 'selected' : '' }}>Admin</option>
                                </select>
                            </div>
                            @error('role')
                                <div class="invalid-feedback d-block mt-1">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="d-grid mb-3">
                            <button type="submit" class="btn btn-dark rounded-pill">
                                {{ __('Register') }}
                            </button>
                        </div>

                        <!-- "Already have an account?" Link -->
                        <div class="text-center mt-3">
                            <span class="text-muted">{{ __('Already have an account?') }}</span>
                            <a class="text-dark fw-bold" href="{{ route('login') }}">
                                {{ __('Login') }}
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
