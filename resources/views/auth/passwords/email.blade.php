@extends('layouts.app')

@section('content')
    <div class='container'>
        <div class='section'>
            <div class='card center-align' style='background-color:#f9f9f9;'>
                <span class='card-title' style='font-size:2.5em;'>Resetuj hasło</span>
                <div class='card-content'>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
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
                                <button type='submit' class='btn' style='background-color:#b07d68;'>Wyślij</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection