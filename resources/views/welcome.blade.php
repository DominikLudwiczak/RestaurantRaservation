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
        <?php
            $dir_desktop = "./photos/desktop/";
            $files_desktop = scandir($dir_desktop);
            $dir_mob = "./photos/mobile/";
            $files_mob = scandir($dir_mob);
            unset($files_desktop[0]);
            unset($files_desktop[1]);
            $files_desktop=array_values($files_desktop);
            unset($files_mob[0]);
            unset($files_mob[1]);
            $files_mob=array_values($files_mob);
        ?>

        @for($i=0; $i < count($files_desktop); $i++)
            <a class='carousel-item'><img src="{{$dir_desktop}}{{$files_desktop[$i]}}" style='height:100%;'/></a>
        @endfor
    </div>

    <div class="carousel carousel-slider hide-on-med-and-up" style='margin:0; height:95vh;'>
        @for($i=0; $i < count($files_mob); $i++)
            <a class='carousel-item'><img src="{{$dir_mob}}{{$files_mob[$i]}}" style='height:100%;'/></a>
        @endfor
    </div>
@endsection