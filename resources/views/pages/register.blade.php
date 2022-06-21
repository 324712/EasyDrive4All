@extends('layout.app')
@section('pagename', 'Home')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center">{{ __('Account aanmaken') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="firstname"
                                       class="col-md-4 col-form-label text-md-end">{{ __('Voornaam') }}</label>

                                <div class="col-md-6">
                                    <input id="firstname" type="text"
                                           class="form-control @error('firstname') is-invalid @enderror"
                                           name="firstname" value="{{ old('firstname') }}" required
                                           autocomplete="firstname" autofocus>

                                    @error('firstname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="lastname"
                                       class="col-md-4 col-form-label text-md-end">{{ __('Achternaam') }}</label>

                                <div class="col-md-6">
                                    <input id="lastname" type="text"
                                           class="form-control @error('lastname') is-invalid @enderror" name="lastname"
                                           value="{{ old('lastname') }}" required autocomplete="lastname" autofocus>

                                    @error('lastname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="birthday"
                                       class="col-md-4 col-form-label text-md-end">{{ __('Gebortedatum') }}</label>

                                <div class="col-md-6">
                                    <input id="birthday" type="text" min="01-01-1900" max="01-01-2004"
                                           class="form-control @error('birthday') is-invalid @enderror" name="birthday"
                                           value="{{ old('birthday') }}" required autocomplete="birthday" autofocus>

                                    @error('birthday')
                                    <div id="dateHelp" class="form-text color-red">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="bsn"
                                       class="col-md-4 col-form-label text-md-end">{{ __('BSN') }}</label>

                                <div class="col-md-6">
                                    <input id="bsn" type="text"
                                           class="form-control @error('bsn') is-invalid @enderror" name="bsn"
                                           value="{{ old('bsn') }}" required autocomplete="bsn" autofocus>

                                    @error('bsn')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="iban"
                                       class="col-md-4 col-form-label text-md-end">{{ __('IBAN') }}</label>

                                <div class="col-md-6">
                                    <input id="IBAN" type="text"
                                           class="form-control @error('IBAN') is-invalid @enderror" name="IBAN"
                                           value="{{ old('IBAN') }}" required autocomplete="IBAN" autofocus>

                                    @error('IBAN')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="address"
                                       class="col-md-4 col-form-label text-md-end">{{ __('Adres') }}</label>

                                <div class="col-md-6">
                                    <input id="address" type="text"
                                           class="form-control @error('address') is-invalid @enderror" name="address"
                                           value="{{ old('address') }}" required autocomplete="address" autofocus>

                                    @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="phone_number"
                                       class="col-md-4 col-form-label text-md-end">{{ __('Telefoonnummer') }}</label>

                                <div class="col-md-6">
                                    <input id="phone_number" type="text"
                                           class="form-control @error('phone_number') is-invalid @enderror" name="phone_number"
                                           value="{{ old('phone_number') }}" required autocomplete="phone_number" autofocus>

                                    @error('phone_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email"
                                       class="col-md-4 col-form-label text-md-end">{{ __('Emailadres') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                           class="form-control @error('email') is-invalid @enderror" name="email"
                                           value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password"
                                       class="col-md-4 col-form-label text-md-end">{{ __('Wachtwoord') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                           class="form-control @error('password') is-invalid @enderror" name="password"
                                           required autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>


                            <div class="row mb-3">
                                <label for="password-confirm"
                                       class="col-md-4 col-form-label text-md-end">{{ __('Wachtwoord bevestigen') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                           name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>
                            <div class="row mb-3">

                            </div>

                            <div class="row mb-0">
                                <div class="col-md-12 offset-md-5">
                                    <button type="submit" class="btn btn-outline-info">
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
