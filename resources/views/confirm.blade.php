@extends('layouts.app')

@section('content')
    <div class='container center-align' style="min-height:90vh;">
        <span style='font-size:2.5em; bottom:1rem;'>Potwierdzenie rezerwacji</span>
        <div class='card'>
            <div class='card-content'>
                <div class='row'>
                    <div class='col s12 m6'>
                        <h6 style='color:gray;'>Dane osobowe</h6>
                        <hr>
                        <div class='left-align' style="margin-left:2em;">
                            Imię: {{ Auth::user()->first_name }} <br/>
                            Nazwisko: {{ Auth::user()->last_name }} <br/>
                            E-mail: {{ Auth::user()->email }}
                        </div>
                    </div>
                    <div class='col s12 m6'>
                        <h6 style="color:gray;">Szczegóły rezerwacji</h6>
                        <hr>
                        <div class='left-align' style="margin-left:2em;">
                            Nr. stolika: {{$butt[2]}}<br/>
                            Data: {{$date}}<br/>
                            Godzina: {{$butt[1]}}<br/>
                            Ilość osób: {{$butt[3]}}
                        </div>
                    </div>
                </div>
                <form method='post' action=" {{ route('rezerwacja_save') }}" name='form'>
                    @csrf  
                    <div class='row'>
                        <a href='/rezerwacja'><button type='submit' class='btn' style='background-color: #A8735C;'>Wróć</button></a>
                        <button typ='submit' class='btn' name='save' value="{{$date}}; {{$butt[1]}}; {{$butt[2]}}; {{session('persons')}}" style="background-color:#A8735C;">Zatwierdź</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection