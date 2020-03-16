@extends('layouts.app')

@section('content')
    <div class='container center-align'>    
        <form method='POST' action="{{ route('login') }}" novalidate>
        @csrf
            <div class='section'>
                <div class='card center-align' style='background-color:#f9f9f9;'>
                    <span class='card-title' style='font-size:2.5em;'><b>Zaloguj się</b></span>
                    <div class='row'>
                        <div class='col m2 l3 hide-on-small-only'></div>
                        <div class='input-field col s12 m8 l6'>
                            <i class='material-icons prefix' style="color: #b07c68;">email</i>
                            <input id='email' type='email' name='email' class="validate @error('email') is-invalid @enderror" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            <label for='email'>E-Mail</label>
                            <span class='helper-text' data-error='Wprowadź adres E-Mail' data-success=''></span>
                            @error('email')
                                <span class='badge'>
                                    <strong style='color:red;'>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class='row'>
                        <div class='col m2 l3 hide-on-small-only'></div>
                        <div class='input-field col s12 m8 l6'>
                            <i class="material-icons prefix"  style="color: #b07c68;">https</i>
                            <input id='password' type='password' name='password' class="validate  @error('password') is-invalid @enderror" required autocomplete="current-password">
                            <label for='password'>Hasło</label>
                            <span class='helper-text' data-error='Podaj hasło' data-success=''></span>
                            @error('password')
                                <span class='badge'>
                                    <strong style='color:red;'>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class='row'>
                        <!-- over mobile -->
                        <div class='input-field col s12 hide-on-small-only'>
                            <div class='col l1'></div>
                            <div class='col m5 right-align'>
                                <button type='submit' class='btn' style='background-color:#b07d68; margin-bottom:1em;'>{{ __('Zaloguj') }}</button>
                            </div>
                            @if (Route::has('password.request'))
                                <div class='col m5 left-align'>
                                    <a class="btn" style='background-color:#b07d68;' href="{{ route('password.request') }}">Zapomniałeś hasła?</a>
                                </div>
                            @endif
                        </div>
                        <!-- mobile -->
                        <div class='input-field col s12 hide-on-med-and-up'>
                            <div class='col s12'>
                                <button type='submit' class='btn' style='background-color:#b07d68; margin-bottom:1em;'>{{ __('Zaloguj') }}</button>
                            </div>
                            @if (Route::has('password.request'))
                                <div class='col s12'>
                                    <a class="btn" style='background-color:#b07d68;' href="{{ route('password.request') }}">Zapomniałeś hasła?</a>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
