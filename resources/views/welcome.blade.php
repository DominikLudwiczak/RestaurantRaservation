@extends('layouts.app')

@section('content')
    <div class="carousel carousel-slider hide-on-small-only" style='margin:0; height:100vh;'>
        <a class='carousel-item'><img src='/photos/foto-1.jpg' style='height:100%;'/></a>
        <a class='carousel-item'><img src='/photos/foto-2.jpg' style='height:100%;'/></a>
        <a class='carousel-item'><img src='/photos/foto-3.jpg' style='height:100%;'/></a>
        <a class='carousel-item'><img src='/photos/foto-4.jpg' style='height:100%;'/></a>
        <a class='carousel-item'><img src='/photos/foto-5.jpg' style='height:100%;'/></a>
        <a class='carousel-item'><img src='/photos/foto-7.jpg' style='height:100%;'/></a>

        <div class='carousel-fixed-item center hide-on-med-and-down'>
            <div class='row' style='font-size:2em; color:white; z-index:2;'>
                <a href="menu" style='color:white; padding:1em;'>Menu</a>/
                <a href="onas" style='color:white; padding:1em;'>O Nas</a>/
                <a href="kontakt" style='color:white; padding:1em;'>Kontakt</a>/
                <a href="rezerwacja" style='color:white; padding:1em;'>Zarezerwuj stolik</a>/
                <a href="FAQ" style='color:white; padding:1em;'>FAQ</a>
            </div>
        </div>
    </div>

    <div class="carousel carousel-slider hide-on-med-and-up" style='margin:0; height:95vh;'>
        <a class='carousel-item'><img src='/photos/mob-1.jpg' style='height:100%;'/></a>
        <a class='carousel-item'><img src='/photos/mob-2.jpg' style='height:100%;'/></a>
        <a class='carousel-item'><img src='/photos/mob-3.jpg' style='height:100%;'/></a>
        <a class='carousel-item'><img src='/photos/mob-4.jpg' style='height:100%;'/></a>
    </div>
@endsection