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
                <div class="mb-6 text-3xl font-bold uppercase border-b">{{ __('Register') }}</div>

                <div class="">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="mb-2">
{{--                            <label for="name" class="text-xs tracking-widest">{{ __('Name') }}</label>--}}

                            <div class="mb-2">
                                <input id="name" type="text"
                                       class="w-full tracking-widest border px-3 py-3 @error('name') is-invalid @enderror"
                                       name="name"
                                       value="{{ old('name') }}"
                                       placeholder="Fullt Nafn"
                                       required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-2">
{{--                            <label for="email" class="text-xs tracking-widest">{{ __('Email') }}</label>--}}

                            <div class="mb-2">
                                <input id="email" type="email"
                                       class="w-full tracking-widest border px-3 py-3 @error('email') is-invalid @enderror"
                                       name="email"
                                       value="{{ old('email') }}"
                                       placeholder="Netfang"
                                       required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-2">
                            {{--                            <label for="email" class="text-xs tracking-widest">{{ __('Email') }}</label>--}}

                            <div class="mb-2">
                                <input id="phone" type="number"
                                       class="w-full tracking-widest border px-3 py-3 @error('phone') is-invalid @enderror"
                                       name="phone"
                                       value="{{ old('phone') }}"
                                       placeholder="Simi"
                                       required autocomplete="phone">

                                @error('phone')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-2">
                            {{--                            <label for="email" class="text-xs tracking-widest">{{ __('Email') }}</label>--}}

                            <div class="mb-2">
                                <input id="company" type="text"
                                       class="w-full tracking-widest border px-3 py-3 @error('company') is-invalid @enderror"
                                       name="company"
                                       value="{{ old('company') }}"
                                       placeholder="Company"
                                       required autocomplete="phone">

                                @error('company')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-2">
                            {{--                            <label for="email" class="text-xs tracking-widest">{{ __('Email') }}</label>--}}

                            <div class="mb-2">
                                <textarea id="grand_request" type="text"
                                       class="w-full tracking-widest border px-3 py-3 @error('grand_request') is-invalid @enderror"
                                       name="grand_request"
                                       value="{{ old('grand_request') }}"
                                       cols="30" rows="5"
                                       placeholder="Grand request"
                                       required autocomplete="grand_request">
                                </textarea>

                                @error('grand_request')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

{{--                        <div class="">--}}
{{--                            <label for="password" class="text-xs tracking-widest">{{ __('Password') }}</label>--}}

{{--                            <div class="mb-2">--}}
{{--                                <input id="password" type="password" class="w-full border px-3 py-3 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">--}}

{{--                                @error('password')--}}
{{--                                    <span class="invalid-feedback" role="alert">--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                        </div>--}}

{{--                        <div class="mb-2">--}}
{{--                            <label for="password-confirm" class="text-xs tracking-widest">{{ __('Confirm Password') }}</label>--}}

{{--                            <div class="mb-2">--}}
{{--                                <input id="password-confirm" type="password" class="w-full border px-3 py-3" name="password_confirmation" required autocomplete="new-password">--}}
{{--                            </div>--}}
{{--                        </div>--}}

                        <div class="text-right mt-4">
                            <div class="">
                                <button type="submit" class="py-3 px-12 text-center text-white bg-blue-800 uppercase">
                                    {{ __('Register') }}
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
