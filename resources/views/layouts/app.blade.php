<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poiret+One&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type='text/html'>

    <!-- Materlize -->
    <!-- Compiled and minified CSS -->
    <link type='text/css' rel='stylesheet' href='/public/css/materialize.min.css' media='screen,projection'/>

    <!-- icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>

    <style type='text/css'>
        /* Inactive/Active Default input field color */
            .input-field input[type]:not([readonly]),
            .input-field input[type]:focus:not([readonly]),
            .input-field textarea:not([readonly]),
            .input-field textarea:focus:not([readonly]) {
                border-bottom: 1px solid #969595;
                box-shadow: 0 1px 0 0 #969595;
            }

            /* Inactive/Active Default input label color */
            .input-field input[type]:focus:not([readonly])+label,
            .input-field textarea:focus:not([readonly])+label {
                color: #b07d68;
            }

            /* Active/Inactive Invalid input field colors */
            .input-field input[type].invalid,
            .input-field input[type].invalid:focus,
            .input-field textarea.invalid,
            .input-field textarea.invalid:focus {
                border-bottom: 1px solid #FF003C;
                box-shadow: 0 1px 0 0 #FF003C;
            }

            /* Active/Inactive Invalid input label color */
            .input-field input[type].invalid:focus+label,
            .input-field input[type].invalid~.helper-text::after,
            .input-field input[type].invalid:focus~.helper-text::after, 
            .input-field textarea.invalid:focus+label,
            .input-field textarea.invalid~.helper-text::after,
            .input-field textarea.invalid:focus~.helper-text::after {
                color: #ff6c80;
            }

            /* Active/Inactive Valid input field color */
            .input-field input[type].valid,
            .input-field input[type].valid:focus,
            .input-field textarea.valid,
            .input-field textarea.valid:focus {
                border-bottom: 1px solid #1DB755;
                box-shadow: 0 1px 0 0 #1DB755;
            }

            /* Active/Inactive Valid input label color */
            .input-field input[type].valid:focus+label,
            .input-field input[type].valid~.helper-text::after,
            .input-field input[type].valid:focus~.helper-text::after,
            .input-field textarea.valid:focus+label,
            .input-field textarea.valid~.helper-text::after,
            .input-field textarea.valid:focus~.helper-text::after {
                color: #26a69a;
            }

            body
            {
                display: flex;
                min-height: 100vh;
                flex-direction: column;
                margin:0;
            }

            main
            {
                flex: 1 0 auto;
            }

            .picker__date-display { background-color: #6d4e7a; }

    </style>
            
</head>
<body>
    <nav style='background-color:#4a4949;'>
        <div class="nav-wrapper">
            <div class='container'>
                <a href="{{ url('/') }}" class='brand-logo'>{{ config('app.name', 'Laravel') }}</a>
                
                <ul class="right hide-on-med-and-down">
                    @guest
                        <li><a href="{{ route('login') }}">Zaloguj się</a></li>
                        @if (Route::has('register'))
                            <li><a href="{{ route('register') }}">Rejestracja</a></li>
                        @endif
                    @else
                         <!-- dropdown -->
                        <ul id="dropdown1" class='dropdown-content'>
                            <li>
                                <a href="{{ route('logout') }}" style='color:white; background-color:#646464;' onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    {{ __('Wyloguj się') }}
                                </a>
                            </li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </ul>
                        <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">{{ Auth::user()->name }}<i class="material-icons right">arrow_drop_down</i></a></li>
                    @endguest
                </ul>
                    <!-- sidenav -->
                    <ul class='sidenav center-align' id='mobile-demo'>
                        @guest
                            @if(\Request::is('menu/*'))
                                <li><a href="">Menu</a></li>
                            @else
                                <li><a href="{{ route('menu') }}">Menu</a></li>
                            @endif
                            <li><a href="{{ route('onas') }}">O Nas</a></li>
                            <li><a href="{{ route('kontakt') }}">Kontakt</a></li>
                            <li><a href="{{ route('rezerwacja') }}">Zarezerwuj stolik</a></li>
                            <li><a href="{{ route('faq') }}">FAQ</a></li>
                            <li><div class='divider'></div></li>
                            <li><a href="{{ route('login') }}">Zaloguj się</a></li>
                            @if (Route::has('register'))
                                <li><a href="{{ route('register') }}">Rejestracja</a></li>
                            @endif
                        @else
                             <!-- dropdown -->
                             <ul id="dropdown2" class='dropdown-content'>
                                <li>
                                    <a href="{{ route('logout') }}"onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                                        {{ __('Wyloguj się') }}
                                    </a>
                                </li>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </ul>
                            <li><a class="dropdown-trigger" href="#!" data-target="dropdown2">{{ Auth::user()->name }}<i class="material-icons right">arrow_drop_down</i></a></li>
                        @endguest
                    </ul>
                    <a href='#' data-target='mobile-demo' class='sidenav-trigger'><i class='material-icons'>menu</i></a>
            </div>
        </div>
    </nav>

    <!-- content -->
    <main class='py-4'>
        @include('includes.messages')
        @yield('content')
    </main>

    <!-- footer -->
    <footer class="page-footer" style="background-color: #333232;">
        <div class='container'>
            <div class='row' style='display:flex; flex-wrap:wrap;'>
                <div class="col s12 m4 center-align">
                    <h4 class="white-text">Restauracja Divaldo</h4>
                    <p class="grey-text text-lighten-4">Witamy na stronie naszej Rastauracji "Divaldo" - u nas spełnią sie twoje kulinarne marzenia.</p>
                </div>
                <div class='col s12 m4 center-align'>
                    <h4 class='white-text'>Linki</h4>
                    <div class='col s12' style='margin-top:-1em;'>
                        <ul>
                            @if(\Request::is('menu/*'))
                                <li><a class="grey-text text-lighten-3" href="">Menu</a></li>
                            @else
                                <li><a class="grey-text text-lighten-3" href="{{ route('menu') }}">Menu</a></li>
                            @endif
                            <li><a class="grey-text text-lighten-3" href="{{ route('onas') }}">O Nas</a></li>
                            <li><a class="grey-text text-lighten-3" href="{{ route('rezerwacja') }}">Zarezerwuj stolik</a></li>
                            <li><a class="grey-text text-lighten-3" href="{{ route('faq') }}">FAQ</a></li>
                        </ul>
                    </div>
                </div>
                <div class='col s12 m4 center-align'>
                    <div class='col s12'>
                        <h4 class="white-text"><a href="{{ route('kontakt') }}" style='color:white;'>Kontakt</a></h4>
                        <a href='tel:+48123456789' style='color:white;' class='flow-text'>123 465 789</a><br/>
                        <span class='flow-text' style='font-size:1em;'>Poznań 61-701 ul.Fredry 13</span>
                    </div>
                </div>
            </div>
            <hr>
            <div class='card center-align' style='background-color:#393838;'>
                <span class='card-title' style='font-size:1.5em;'>Masz pytania? Napisz do nas!</span>
                <form method='post' action="{{ route('message') }}">
                    @csrf
                    <div class='card-content'>
                        <div class='row' style='margin-bottom:0;'>
                            <div class='col m3'></div>
                            <div class='input-field col s12 m6'>
                                <i class="material-icons prefix" style="color: #D8977B;">email</i>
                                <input id='mail' name='mail' type='email' class='validate' required autocomplete="email" style='color:white;'>
                                <label for='mail'>E-Mail</label>
                                <span class='helper-text' data-error='Wprowadź adres E-Mail' data-success=''></span>
                            </div>
                        </div>
                        <div class='row' style='margin-bottom:0;'>
                            <div class='col m3'></div>
                            <div class='input-field col s12 m6'>
                                <i class="material-icons prefix" style="color: #D8977B;">mode_edit</i>
                                <textarea id='textarea1' name='wiadomosc' class='materialize-textarea' data-length="255" style='color:white;'></textarea>
                                <label for='textarea1'>Wiadomość</label>
                            </div>
                        </div>
                        <div class='row'>
                            <div class='col s3'></div>
                            <div class='input-field col s6'>
                                <button type='submit' class='btn' name='button' value='<?php url()->current(); ?>' style='background-color:#b07d68;'>{{ __('Wyślij') }}</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </footer>
    <div class="footer-copyright" style='background-color:#1f1f1f; color:grey;'>
        <div class="container center-align" style='margin-bottom:0.5em;'>
            <div class='row' style='margin-top:1em; margin-bottom:0;'>
                <a href='#!'><i class='small material-icons white-text'>stars</i></a>
                <a href='#!'><i class='small material-icons white-text'>https</i></a>
                <a href='#!'><i class='small material-icons white-text'>account_circle</i></a>
            </div>
            © 2019 Copyright Text
        </div>
    </div>

    <script type='text/javascript' src='public/js/materialize.min.js'></script>
    <script>
        $(document).ready(function()
        {
            $('.dropdown-trigger').dropdown();
            $('.collapsible').collapsible();
            $('textarea#textarea1').characterCounter();
            $('.sidenav').sidenav();
            $('select').formSelect();
            $('.datepicker').datepicker();
            $('.timepicker').timepicker({
                defaultTime: 'now',
                twelveHour: false,
                disable:[
                    {from: [19,0], to: [8,0]}
                ]
            });
            $('.carousel.carousel-slider').carousel({
                fullWidth: true,
            });
            $('.carousel').carousel({});

            setInterval(function(){
                    $('.carousel.carousel-slider').carousel('next');
                }, 10000);
            });
    </script>
</body>
</html>
