@extends('layouts.app')

@section('content')
    <div class='container center-align'>
        <span style='font-size: 2.5em;'>Menu</span><br/>
        <nav class="nav-extended" style="font-family: 'Poiret One', cursive; background-color:#8A6F63; font-size:1.5rem;">
            <div class="nav-content">
                <ul class="tabs tabs-transparent">
                    @foreach($kat as $row)
                        @if(\Request::is("menu/$row->kategoria"))
                            <li class='tab'><a class='active' href="{{$row->kategoria}}" target="_self">{{$row->kategoria}}</a></li>
                        @else
                            <li class='tab'><a href="{{$row->kategoria}}" target="_self">{{$row->kategoria}}</a></li>
                        @endif
                    @endforeach
                </ul>
            </div>
        </nav>
        <span style="font-family: 'Poiret One', cursive; font-size:2.5em;"><i>{{$kategoria}}</i></span>
        <!-- for desktop -->
        <div class='row hide-on-small-only'>
            <div class='col m6' style="font-family: 'Poiret One', cursive; font-size:1.2em; font-weight:thin;">
                <table>
                    <thead>
                        <th></th>
                        <th></th>
                    </thead>
                    <tbody>
                        <?php $x=0; $j=0;?>
                        @foreach($menu as $row)
                            <?php $x++;?>
                            @if($x<=count($menu)/2 || $x % 2!=0)
                                <tr>
                                    <th>{{$row->danie}}</th>
                                    <th>{{$row->cena}} PLN</th>
                                </tr>
                            @else
                                <?php
                                    $arr[$j][0]=$row->danie;
                                    $arr[$j][1]=$row->cena;
                                    $j++;
                                ?>
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
            @if(isset($arr))
                <div class='col m6' style="font-family: 'Poiret One', cursive; font-size:1.2em; font-weight:thin;">
                    <table>
                        <thead>
                            <th></th>
                            <th></th>
                        </thead>
                        <tbody>
                            @for($i=0; $i <= $j-1; $i++)
                                <tr>
                                    <th>{{$arr[$i][0]}}</th>
                                    <th>{{$arr[$i][1]}} PLN</th>
                                </tr>
                            @endfor
                        </tbody>
                    </table>
                </div>
            @endif
        </div>
        <!-- for mobile -->
        <div class='col s12 hide-on-med-and-up' style="font-family: 'Poiret One', cursive; font-size:1.2em;">
            <table class=''>
                <thead>
                    <th></th>
                    <th></th>
                </thead>
                <tbody>
                    @foreach($menu as $row)
                        <tr>
                            <th>{{$row->danie}}</th>
                            <th>{{$row->cena}}</th>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection