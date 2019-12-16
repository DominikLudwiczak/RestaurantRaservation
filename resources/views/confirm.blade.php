@extends('layouts.app')

@section('content')
    <div class='container center-align' style="min-height:90vh;">
        <span style='font-size:2.5em; bottom:1rem;'>Potwierdzenie rezerwacji</span>
        <div class='medium card'>
            <div class='card-content'>
                <div class='row'>
                    <div class='col s12 m6'>
                        <h6 style='color:gray;'>Dane osobowe</h6>
                        <hr>
                        <div class='left-align' style="margin-left:2em;">
                            Imię: <br/>
                            Nazwisko: <br/>
                            E-mail:
                        </div>
                    </div>
                    <div class='col s12 m6'>
                        <h6 style="color:gray;">Szczegóły rezerwacji</h6>
                        <hr>
                        <div class='left-align' style="margin-left:2em;">
                            Data: {{$date}}<br/>
                            Godzina: {{$time}}<br/>
                            Ilość osób: {{$persons}}
                        </div>
                    </div>
                </div>
                <button typ='submit' class='btn' style="background-color:#A8735C;">Zatwierdź</button>
            </div>
        </div>
    </div>
@endsection