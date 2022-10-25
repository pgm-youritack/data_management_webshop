@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="register">
            <div class="register__header">{{ __('Register') }}</div>

            <div class="register__body">
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="register__body-tab">
                        <label for="first_name">{{ __('first name') }}</label>
                        <div>
                            <input id="first_name" type="text"
                                class="form-control @error('first_name') is-invalid @enderror" name="first_name"
                                value="{{ old('first_name') }}" required autocomplete="first_name" autofocus>

                            @error('first_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="register__body-tab">
                        <label for="last_name">{{ __('last name') }}</label>

                        <div class="col-md-6">
                            <input id="last_name" type="text" class="form-control @error('name') is-invalid @enderror"
                                name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>

                            @error('last_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>


                    <div class="register__body-tab">
                        <label for="email">{{ __('Email Address') }}</label>

                        <div>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="register__body-tab">
                        <label for="adres">{{ __('adres ') }}</label>

                        <div class="col-md-6">
                            <input id="adres" type="text" class="form-control @error('adres') is-invalid @enderror"
                                name="adres" value="{{ old('adres') }}" required autocomplete="adres" autofocus>

                            @error('adres')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="register__body-tab">
                        <label for="postcode">{{ __('postcode ') }}</label>

                        <div>
                            <input id="postcode" type="text"
                                class="form-control @error('postcode') is-invalid @enderror" name="postcode"
                                value="{{ old('postcode') }}" required autocomplete="postcode" autofocus>

                            @error('postcode')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="register__body-tab">
                        <label for="country">{{ __('country ') }}</label>

                        <div>
                            <input id="country" type="text"
                                class="form-control @error('postcode') is-invalid @enderror" name="country"
                                value="{{ old('postcode') }}" required autocomplete="postcode" autofocus>

                            @error('country')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="register__body-tab">
                        <label for="password">{{ __('Password') }}</label>

                        <div>
                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password" required
                                autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="register__body-tab">
                        <label for="password-confirm"
                            class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                        <div>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                                required autocomplete="new-password">
                        </div>
                    </div>
                            <button type="submit" class="register__body-button">
                                {{ __('Register') }}
                            </button>
                </form>
            </div>
        </div>


    </div>
@endsection
