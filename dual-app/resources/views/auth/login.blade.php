@extends('layouts.app')
@section('content')
<section class="vh-100">
    <div class="container py-5 h-100">
        <div class="row d-flex align-items-center justify-content-center h-100">
            <div class="col-md-8 col-lg-7 col-xl-6">
                <img src="{{asset('chicalogo.png')}}" class="img-fluid" alt="Chica Deusto">
            </div>


            <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">

            <div class="d-flex align-items-center mb-3 pb-1">
                    <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                    <span class="h1 fw-bold mb-0">DeustoDual</span>
                  </div>

                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="row mb-3">
                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <input type="email" id="form1Example13" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus" />
                            <label class="form-label" for="form1Example13">{{ __('Email Address') }}</label>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <!-- Password input -->
                        <div class="form-outline mb-4">
                            <input id="password" type="password" class="form-control form-control-lg  @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" />
                            <label for="password" class="form-label text-md-end">{{ __('Password') }}</label>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="d-flex justify-content-around align-items-center mb-4">
                        <!-- Checkbox -->
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="form-check-label" ffor="remember">
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                        @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                        @endif
                    </div>
                    <!-- Login button -->
                    <button type="submit" class="btn btn-primary btn-lg btn-block"> {{ __('Login') }}
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>
<script src="{{ asset('js/validateLogin.js') }}"></script>
@endsection