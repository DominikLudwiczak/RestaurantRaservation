@extends('layouts.app')

@section('content')
    <div class='container center-align' style="height:90vh;">
        <span style='font-size:2.5em; bottom:1rem;'>Rezerwacja stolika</span>
            <div class='row'>
                <div class='input-field col s12 m2'>
                    <input type="text" id='date' class='datepicker'>
                    <label for='date' class='valign-wrapper'>Data<i class="material-icons">date_range</i></label>  
                </div>
                <div class='input-field col s12 m2'>
                    <input type="text" id='time' class='timepicker'>
                    <label for='time' class='valign-wrapper'>Godzina<i class="material-icons">watch_later</i></label>
                </div>
                <div class='input-field col s12 m2'  style="position: relative">
                    <label id="label-persons" for='persons' class='valign-wrapper' style="position: absolute; top: 0; display: none;">Ilość osób<i class='material-icons'>people</i></label>
                    <select id='persons'>
                        <option value='' disabled selected>Ilość osób</option>
                        @for($i=1; $i <= $max_persons_count; $i++)
                            <option value="{{$i}}">{{$i}}</option>
                        @endfor
                    </select>
                    <script>
                        var $select = $('select');
                        $select.on('change', function (e) {
                            $("#label-persons").css({"display": "block", "top": "-33px"});
                        });
                    </script>
                </div>
                <div class='input-field col s12'>
                        <button type='submit' class='btn'>Znajdź stoliki</button>
                </div>
            </div>
    </div>
@endsection