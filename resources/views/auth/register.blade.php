@extends('layouts.app')

@section('content')
    <div class='container center-align'>
        <form method='post' action="{{route('register') }}">
            @csrf
            <div class='section'>
                <div class='card center-align' style='background-color:#f9f9f9;'>
                    <span class='card-title' style='font-size:2.5em;'><b>Rejestracja</b></span>
                        <div class='card-content'>
                        <div class='row'>
                            <div class='col m3'></div>
                            <div class='input-field col s12 m6'>
                                <i class='material-icons prefix' style="color: #b07c68;">account_circle</i>
                                <input id='name' type='text' name='name' class="validate form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" required autocomplete="name" autofocus>
                                <label for='name'>Login</label>
                                <span class='helper-text' data-error='Podaj login' data-success=''></span>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong style='color:#FF003C;'>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class='row'>
                            <div class='col m3'></div>
                            <div class='input-field col s12 m6'>
                                <i class='material-icons prefix' style="color: #b07c68;">email</i>
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
                                <input  id='password' type='password' name='password' class="validate form-control @error('password') is-invalid @enderror" value="{{ old('password') }}" required autocomplete="new-password">
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
                                <button type='submit' class='btn' style='background-color:#b07d68;'>Zarejestruj się</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
