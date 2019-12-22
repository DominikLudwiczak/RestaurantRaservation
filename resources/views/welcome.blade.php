@extends('layouts.app')

@section('content')
    <div class="carousel carousel-slider hide-on-small-only" style='margin:0; height:93vh;'>
        <div class='row carousel-fixed-item center hide-on-med-and-down' style='font-size:2em; color:white;'>
            <a href="{{ route('menu') }}" style='color:white; padding:1em;'>Menu</a>/
            <a href="{{ route('onas') }}" style='color:white; padding:1em;'>O Nas</a>/
            <a href="{{ route('kontakt') }}" style='color:white; padding:1em;'>Kontakt</a>/
            <a href="{{ route('rezerwacja') }}" style='color:white; padding:1em;'>Zarezerwuj stolik</a>/
            <a href="{{ route('faq') }}" style='color:white; padding:1em;'>FAQ</a>
        </div>
        <a class='carousel-item'><img src='/photos/desktop/foto-1.jpg' style='height:100%;'/></a>
        <a class='carousel-item'><img src='/photos/desktop/foto-2.jpg' style='height:100%;'/></a>
        <a class='carousel-item'><img src='/photos/desktop/foto-3.jpg' style='height:100%;'/></a>
        <a class='carousel-item'><img src='/photos/desktop/foto-4.jpg' style='height:100%;'/></a>
        <a class='carousel-item'><img src='/photos/desktop/foto-5.jpg' style='height:100%;'/></a>
    </div>

    <div class="carousel carousel-slider hide-on-med-and-up" style='margin:0; height:95vh;'>
        <a class='carousel-item'><img src='/photos/mobile/mob-1.jpg' style='height:100%;'/></a>
        <a class='carousel-item'><img src='/photos/mobile/mob-2.jpg' style='height:100%;'/></a>
        <a class='carousel-item'><img src='/photos/mobile/mob-3.jpg' style='height:100%;'/></a>
        <a class='carousel-item'><img src='/photos/mobile/mob-4.jpg' style='height:100%;'/></a>
    </div>
@endsection