@extends('layouts.layout')

@section('content')
    <div class="banner h-100 d-flex justify-content-center align-items-center">
        <div class="p-5 rounded bg-light shadow-lg">
            <div class="text-center mb-3">
                <i class="fas fa-users display-3 text-primary"></i>
                <h1 class="text-dark">Sign In</h1>
                <h5 class="text-primary">and start to post all your ideas!</h5> 
            </div> 
            <form method="POST" action="{{ route('register') }}">
                @csrf        
                <label for="name" class="mt-2">{{ __('Name') }}</label>
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror rounded-pill" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <label for="email" class="mt-2">{{ __('E-Mail Address') }}</label>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror rounded-pill" name="email" value="{{ old('email') }}" required autocomplete="email">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>      
                @enderror

                <label for="password" class="mt-2">{{ __('Password') }}</label>
        
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror rounded-pill" name="password" required autocomplete="new-password">
        
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                        
                <label for="password-confirm" class="mt-2">{{ __('Confirm Password') }}</label>
    
                <input id="password-confirm" type="password" class="form-control rounded-pill" name="password_confirmation" required autocomplete="new-password">
                         
                <button type="submit" class="btn btn-primary btn-block mt-4">
                    {{ __('Register') }}
                </button>
                       
            </form>
    </div>
</div>
@endsection
