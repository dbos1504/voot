@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="container flex flex-wrap items-center">
            <div class="w-1/2 relative overflow-hidden">
                <img src="/img/login.svg" alt="login">
                <img class="login-f" src="/img/login1.png" alt="login">
            </div>
            <div class="w-1/2 pl-24">
                <div class="mb-6 text-3xl font-bold uppercase border-b">{{ __('Login') }}</div>

                <div class="">

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="">
                            <label for="email" class="text-xs tracking-widest">{{ __('Email *') }}</label>

                            <div class="mb-2">
                                <input id="email" type="email"
                                       class="w-full tracking-widest border px-3 py-3 @error('email') is-invalid @enderror"
                                       name="email"
                                       value="{{ old('email') }}"
                                       required autocomplete="email"
                                       placeholder="Email"
                                       autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="password" class="text-xs tracking-widest">{{ __('Password *') }}</label>

                            <div class="">
                                <input id="password" type="password"
                                       class="w-full tracking-widest border px-3 py-3 @error('password') is-invalid @enderror"
                                       name="password"
                                       placeholder="Password"
                                       required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-3">
                            <div class="flex justify-between">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="text-xs uppercase" for="remember">
                                        {{ __('Skrá mig á póstlista') }}
                                    </label>
                                </div>
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link text-xs text-orange-500 tracking-widest" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>

                        <div class="mb-0">
                            <div class="w-full">
                                <button type="submit" class="w-full py-3 text-center tracking-widest text-white bg-blue-800 uppercase">
                                    {{ __('Login') }}
                                </button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
