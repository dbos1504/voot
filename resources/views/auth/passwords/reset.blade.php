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
                <div class="mb-2 text-3xl font-bold uppercase">{{ __('Reset Password') }}</div>
                <p class="mb-6 pb-3 text-xs tracking-widest border-b">Recover your Order Account</p>
                <div class="">
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="">
                            <label for="email" class="text-xs tracking-widest">{{ __('Email') }}</label>

                            <div class="mb-2">
                                <input id="email" type="email"
                                       class="w-full tracking-widest border px-3 py-3 @error('email') is-invalid @enderror"
                                       name="email"
                                       value="{{ $email ?? old('email') }}"
                                       placeholder="Email"
                                       required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-2">
                            <label for="password" class="text-xs tracking-widest">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password"
                                       class="w-full tracking-widest border px-3 py-3 @error('password') is-invalid @enderror"
                                       name="password"
                                       placeholder="Password"
                                       required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-2">
                            <label for="password-confirm" class="text-xs tracking-widest">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password"
                                       class="w-full tracking-widest border px-3 py-3"
                                       name="password_confirmation"
                                       placeholder="Confirm Password"
                                       required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="mb-0">
                            <div class="w-full mt-4 flex justify-between">
                                <button type="submit" class="w-full py-3 text-center mr-4 tracking-widest text-white bg-blue-800 uppercase">
                                    {{ __('Reset Password') }}
                                </button>
                                <div class="w-full text-right">
                                    <a class="text-orange-500 text-xs tracking-widest" href="/hafa-samband">Contact us</a> <br>
                                    <a class="text-xs tracking-widest" href="/register">Create a profile</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
