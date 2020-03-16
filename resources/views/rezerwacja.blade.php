@extends('layouts.app')

@section('content')
    <div class='container center-align' style="min-height:90vh;">
        <span style='font-size:2.5em; bottom:1rem;'>Rezerwacja stolika</span>
            <form method='post' action="{{ route('rezerwacja_check') }}">
                @csrf
                <div class='row'>
                    <div class='input-field col s12 m2'>
                        <input type="text" name='date' id='date' class='datepicker'>
                        <label for='date' class='valign-wrapper'>Data<i class="material-icons">date_range</i></label>  
                    </div>
                    <div class='input-field col s12 m2'>
                        <input type="text" name='time' id='time' class='timepicker'>
                        <label for='time' class='valign-wrapper'>Godzina<i class="material-icons">watch_later</i></label>
                    </div>
                    <div class='input-field col s12 m2'  style="position: relative">
                        <label id="label-persons" for='persons' class='valign-wrapper' style="position: absolute; top: 0; display: none;">Ilość osób<i class='material-icons'>people</i></label>
                        <select id='persons' name='persons'>
                            <option value='' disabled selected>Ilość osób</option>
                            @for($i=1; $i <= session('max_persons_count'); $i++)
                                @if($i == session('persons'))
                                    <option value="{{$i}}" selected>{{$i}}</option>
                                @else
                                    <option value="{{$i}}">{{$i}}</option>
                                @endif
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
                            <button type='submit' class='btn' style='background-color:#A8735C;'>Znajdź stoliki</button>
                    </div>
                </div>
            </form>
            @if(session('godziny'))
                <form method='post' action="{{ route('rezerwacja_confirm') }}">
                @csrf
                    <div class='col s12 '>
                        @if(session('godziny')[count(session('godziny'))-1][0]=="brak")
                            <h5>Niestety w wybranym terminie nie znaleziono wolnych stolików,<br/>
                                oto nasze propozycje na następny dzień
                            </h5>
                        @else
                            <h5>Dostępne godziny rezerwacji w wybranym dniu</h5>
                        @endif
                        <div class="card horizontal">
                            <div class="card-image hide-on-small-only">
                                <img src="photos/desktop/foto-6.jpg">
                            </div>
                            <div class="card-stacked">
                                <div class="card-content">
                                    @for($i=0; $i < count(session('godziny')); $i++)
                                        @if(session('godziny')[$i][0]!="brak")
                                            <button class='btn' style='margin-bottom:1em; background-color:#BD856F;' name='save' value="{{session('date')}}; {{session('godziny')[$i][0]}}; {{session('godziny')[$i][1]}}; {{session('persons')}}">{{session('godziny')[$i][0]}}</button>
                                        @endif
                                    @endfor
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            @endif
    </div>
    <?php
        $month=date('m', strtotime('-1 month',strtotime(session('date')))); 
        $day=date('d', strtotime(session('date'))); 
        if($month == date('m', strtotime('-1 month', date('m'))))
        {
            $year=date('Y', strtotime('-1 year', strtotime(session('date'))));
        }
        else 
        {
            $year=date('Y', strtotime(session('date')));
        }
    ?>

    <script>
        if(<?php echo session('date')!=null?>)
        {
            document.addEventListener('DOMContentLoaded', function () {
                var dzisiaj = new Date();
                var maxiDate = new Date();
                maxiDate.setMonth(dzisiaj.getMonth()+2);
                var options = {
                    defaultDate: new Date(<?php echo $year.", ".$month.", ".$day ?>),
                    setDefaultDate: true,
                    minDate: dzisiaj,
                    maxDate: maxiDate,
                };
                var elems = document.querySelector('.datepicker');
                var instance = M.Datepicker.init(elems, options);
                // instance.open();
                instance.setDate(options.dafaultDate);
            });
        }

        if(<?php echo session('time')!=null?>)
        {
            const defaultTime = '<?php echo session('time');?>';
            const myInput = document.getElementById('time');
            const timeInstance = M.Timepicker.init(myInput, {
                twelveHour: false,
                defaultTime: defaultTime
            });

            // forces materialize time picker to display default time in input
            timeInstance._updateTimeFromInput();
            timeInstance.done();
        }
    </script>
@endsection