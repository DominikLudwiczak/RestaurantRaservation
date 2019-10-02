@extends('layouts.app')

@section('content')
    <div class="container">
        <div class='row'>
            <div class='col m2 hide-on-small-only'></div>
            <div class='col s12 m8'>
                <div class='card center-align' style='margin-top:2em;'>
                    <span class='card-title' style='font-size:2em;'><b>Zweryfikuj swój adres E-Mail</b></span>
                    <div class='card-content'>
                        @if (session('resent'))
                            <div class="alert alert-success" role="alert">
                                {{ __('Nowy link aktywacyjny został wysłany na twój adres E-Mail.') }}
                            </div>
                        @endif
                        <span style='font-size:1.2em; margin-bottom:100px;'>
                            Najpier zwefyfikuj swój adres E-Mail,<br/>
                            Jeżeli nie dostałeś maila z linkiem aktywacyjnym,
                        </span>
                        <form style='margin-top:1em;' method="POST" action="{{ route('verification.resend') }}">
                            @csrf
                            <button type="submit" class="btn" style='background-color:#b07c68;'>{{ __('Kliknij tutaj aby wysłać go ponownie') }}</button>
	                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection