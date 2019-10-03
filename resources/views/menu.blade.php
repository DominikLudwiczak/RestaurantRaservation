@extends('layouts.app')

@section('content')
    <div class='container center-align'>
        <span style='font-size: 3em;'>Menu</span><br/>
        <nav class="nav-extended" style="font-family: 'Poiret One', cursive; background-color:#8A6F63;">
            <div class="nav-content">
                <ul class="tabs tabs-transparent">
                    <li class="tab"><a href="menu/#przystawki">Przystawki</a></li>
                    <li class="tab"><a class="active" href="menu/#zupy">Zupy</a></li>
                    <li class="tab"><a href="menu/#sałaty">Sałaty</a></li>
                    <li class="tab"><a href="menu/#przystawki">Dania Wegetariańskie</a></li>
                    <li class="tab"><a href="menu/#zupy">Dania Główne</a></li>
                    <li class="tab"><a href="menu/#sałaty">Desery</a></li>
                    <li class="tab"><a href="menu/#sałaty">Dla Dzieci</a></li>
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
        <span style="font-family: 'Poiret One', cursive; font-size:2.5em;"><i>Przystawki</i></span>
        <!-- for desktop -->
        <div class='row hide-on-small-only'>
            <div class='col m6' style="font-family: 'Poiret One', cursive; font-size:1.2em;">
                <table>
                    <thead>
                        <th></th>
                        <th></th>
                    </thead>
                    <tbody>
                        <tr>
                            <th>Śledź Matis / Pomidor / Cebua / Oliwa Paprykowa</th>
                            <th>32</th>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class='col m6' style="font-family: 'Poiret One', cursive; font-size:1.2em;">
                <table>
                    <thead>
                        <th></th>
                        <th></th>
                    </thead>
                    <tbody>
                        <tr>
                            <th>Szpinak / Borowiki / Suszone Pomidory / Bursztyn</th>
                            <th>35</th>
                        </tr>
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
                    <tr>
                        <th>Szpinak / Borowiki / Suszone Pomidory / Bursztyn</th>
                        <th>35</th>
                    </tr>
                    <tr>
                        <th>Śledź Matis / Pomidor / Cebua / Oliwa Paprykowa</th>
                        <th>32</th>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection