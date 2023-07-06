@extends('layout.master')
@section('title', config('app.name'))
@section('description', 'Registro.')
@section('canonical', config('app.url'))
@section('class', 'home')
@section('content')
<div class="section">
    <div class="container">
        <div class="login-form">        
            <form class="form-boxed" method="POST" action="{{ route('register') }}">
                @csrf
                <h1 class="h3 text-center">Registro</h1>
                <div class="form-control">
                    <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('name') }}</label>
                    <input id="name" type="text" class="form-field @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-control">
                    <label for="lastname" class="col-md-4 col-form-label text-md-end">{{ __('lastname') }}</label>
                    <input id="lastname" type="text" class="form-field @error('lastname') is-invalid @enderror" name="lastname" value="{{ old('lastname') }}" required autocomplete="name" autofocus>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-control">
                    <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('email') }}</label>
                    <input id="email" type="text" class="form-field @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="name" autofocus>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-control">
                    <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>
                    <input id="password" type="password" class="form-field @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
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
                    <button type="submit" type="button" class="btn btn--success w-full">
                        {{ __('Register') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
