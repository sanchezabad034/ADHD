@extends('layout.master')
@section('title', config('app.name'))
@section('description', 'Restablecer contraseña.')
@section('canonical', config('app.url'))
@section('class', 'home')
@section('content')
<section class="section">
    <div class="container">
        <div class="login-form">
            <form class="form-boxed" method="POST" action="{{ route('password.update') }}">
                @csrf

                <input type="hidden" name="token" value="{{ $token }}">
                <div class="form-control">
                    <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>
                    <input id="email" type="email" class="form-field @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-control">
                    <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                    <input id="password" type="password" class="form-field @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-control">
                    <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                    <input id="password-confirm" type="password" class="form-field" name="password_confirmation" required autocomplete="new-password">
                
                </div>

                
                <div class="text-center">
                    <button type="submit" class="btn btn--success">
                        {{ __('Reset Password') }}
                    </button>
                </div>
            </form>
        </div>
            
    </div>
</section>

@endsection
