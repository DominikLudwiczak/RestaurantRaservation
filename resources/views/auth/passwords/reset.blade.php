@extends('layouts.app')

@section('content')
    <div class='container'>
        <div class='section'>
            <div class='card center-align' style='background-color:#f9f9f9;'>
                <span class='card-title' style='font-size:2.5em;'>Resetuj hasło</span>
                <div class='card-content'>
                    <form method="POST" action="{{ route('password.update') }}">
                        @csrf
                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class='row'>
                            <div class='col m3'></div>
                            <div class='input-field col s12 m6'>
                                <i class='material-icons prefix' style="color: #b07c68;">account_circle</i>
                                <input  id='email' type='email' name='email' class="validate form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email">
                                <label for='email'>E-Mail</label>
                                <span class='helper-text' data-error='Wprowadź E-Mail' data-success=''></span>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong style='color:#FF003C;'>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class='row'>
                            <div class='col m3'></div>
                            <div class='input-field col s12 m6'>
                                <i class='material-icons prefix' style="color: #b07c68;">https</i>
                                <input  id='password' type='password' name='password' class="validate form-control @error('password') is-invalid @enderror" required autocomplete="new-password">
                                <label for='password'>Hasło</label>
                                <span class='helper-text' data-error='Podaj hasło' data-success=''></span>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong style='color:#FF003C;'>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class='row'>
                            <div class='col m3'></div>
                            <div class='input-field col s12 m6'>
                                <i class='material-icons prefix' style="color: #b07c68;">https</i>
                                <input  id='password-confirm' type='password' name='password_confirmation' class="validate form-control" required autocomplete="new-password">
                                <label for='password-confirm'>Powtórz hasło</label>
                                <span class='helper-text' data-error='Powtórz hasło' data-success=''></span>
                            </div>
                        </div>
                        <div class='row'>
                            <div class='col m3'></div>
                            <div class='input-field col s12 m6'>
                                <button type='submit' class='btn' style='background-color:#b07d68;'>Zresetuj hasło</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection