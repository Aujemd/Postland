@extends('layouts.layout')

@section('content')
    <div class=" d-flex align-items-center justify-content-center h-100 banner flex-wrap">
        <div class="p-5 rounded bg-light shadow-lg">
            <div class="text-center mb-3">
                <i class="fas fa-sign-in-alt display-3 text-primary"></i>
                <h1 class="text-dark">Sign In</h1>
                <h5 class="text-primary">and start to post all your ideas!</h5> 
            </div>      
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-group">
                    <label for="email" class="">{{ __('E-Mail Address') }}</label>

                    <div class="">
                        <input id="email" type="email" class="form-control p-4 @error('email') is-invalid @enderror rounded-pill" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label for="password" class="">{{ __('Password') }}</label>

                    <div class="">
                        <input id="password" type="password" class="form-control p-4 @error('password') is-invalid @enderror rounded-pill" name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>


                <div class="form-group mb-0 text-center">
                    <div class="">
                        @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                        <button type="submit" class="btn btn-primary btn-block">
                                {{ __('Login') }}
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
