@extends('layouts.app')

@section('content')
    <div class='container center-align'>
        <span style='font-size: 3em;'>Menu</span><br/>
        <nav class="nav-extended" style="font-family: 'Poiret One', cursive; background-color:#8A6F63;">
            <div class="nav-content">
                <ul class="tabs tabs-transparent">
                    @foreach($kat as $row)
                        @if(\Request::is("menu/$row->kategoria"))
                            <?php echo "<li class='tab'><a class='active' href='$row->kategoria'>$row->kategoria</a></li>";?>
                        @else
                            <?php echo "<li class='tab'><a href='$row->kategoria'>$row->kategoria</a></li>";?>
                        @endif
                    @endforeach
                    <li class='right'>
                        <form>
                            <div class="input-field">
                                <input id="search" type="search" style='border:none;' required>
                                <label class="label-icon" for="search"><i class="material-icons">search</i></label>
                                <i class="material-icons">close</i>
                            </div>
                        </form>
                    </li>
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