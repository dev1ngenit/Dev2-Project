@extends('layouts.app') 

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-5">
            <div class="card shadow-sm border-0 rounded-4">
                <div class="card-header bg-primary text-white text-center rounded-top-4">
                    <h4 class="mb-0">{{ __('Admin Reset Password') }}</h4>
                </div>

                <div class="card-body p-4">
                    <form method="POST" action="{{ route('admin.password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        {{-- Email --}}
                        <div class="mb-3">
                            <label for="email" class="form-label">{{ __('Email Address') }}</label>
                            <input id="email" type="email" 
                                   class="form-control @error('email') is-invalid @enderror" 
                                   name="email" 
                                   value="{{ $email ?? old('email') }}" 
                                   required autocomplete="email" autofocus
                                   placeholder="Enter your email">

                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        {{-- Password --}}
                        <div class="mb-3">
                            <label for="password" class="form-label">{{ __('Password') }}</label>
                            <input id="password" type="password" 
                                   class="form-control @error('password') is-invalid @enderror" 
                                   name="password" 
                                   required autocomplete="new-password"
                                   placeholder="Enter new password">

                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        {{-- Confirm Password --}}
                        <div class="mb-3">
                            <label for="password-confirm" class="form-label">{{ __('Confirm Password') }}</label>
                            <input id="password-confirm" type="password" 
                                   class="form-control" 
                                   name="password_confirmation" 
                                   required autocomplete="new-password"
                                   placeholder="Confirm new password">
                        </div>

                        {{-- Submit Button --}}
                        <div class="d-grid mt-4">
                            <button type="submit" class="btn btn-primary btn-lg rounded-pill">
                                {{ __('Reset Password') }}
                            </button>
                        </div>

                        {{-- Back to login link --}}
                        <div class="mt-3 text-center">
                            <a href="{{ route('admin.login') }}" class="text-decoration-none">
                                &larr; Back to Login
                            </a>
                        </div>
                    </form>
                </div>

                <div class="card-footer text-center text-muted small">
                    &copy; {{ date('Y') }} Your Company. All rights reserved.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
