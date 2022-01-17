@extends('layouts.login-layout')

@section('content')

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="form-group">

            <input id="email" type="email" id="exampleInputEmail1" placeholder="Enter Your Email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

            @error('email')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
        <div class="form-group">
            <input id="password" type="password" id="exampleInputPassword1" placeholder="Enter Your Password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

            @error('password')
            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>


        <div class="my-2 d-flex justify-content-between align-items-center">
            <div class="form-check">
                <label class="form-check-label text-muted">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}
                    Keep me signed in
                </label>
            </div>
            @if (Route::has('password.request'))
                <a href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
            @endif
        </div>

        <div class="my-3">
            <input type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" value="LOGIN">

        </div>

        <div class="my-3">
            <label>Don't have account?</label><a href="{{ route('register') }}">Signup</a>
        </div>


    </form>

















@endsection
