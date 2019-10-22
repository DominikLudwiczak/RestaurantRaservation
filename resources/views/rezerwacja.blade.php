@extends('layouts.app')

@section('content')
    <div class='container center-align' style="height:90vh;">
        <span style='font-size:2.5em;'>Rezerwacja stolika</span>
            <div class='row'>
                <div class='input-field col s2'>
                    <input type="text" id='date' class='datepicker'>
                    <label for='date' class='valign-wrapper'>Data<i class="material-icons">date_range</i></label>  
                </div>
                <div class='input-field col s2'>
                    <input type="text" id='time' class='timepicker'>
                    <label for='time' class='valign-wrapper'>Godzina<i class="material-icons">watch_later</i></label>
                </div>
                <div class='input-field col s2'>
                    <select id='persons'>
                        <option value="" disabled selected>Ilość osób <i class="material-icons">add</i></option>
                        <option value="1">select 1</option>
                    </select>
                </div>
            </div>
    </div>
@endsection