@extends('layouts.app')

@section('content')
    <div class='container center-align' style="height:90vh;">
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
                            <button type='submit' class='btn'>Znajdź stoliki</button>
                    </div>
                </div>
            </form>
    </div>

    <?php $year=date('Y', strtotime(session('date'))); $month=date('m', strtotime('-1 month',strtotime(session('date')))); $day=date('d', strtotime(session('date'))); ?>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var options = {
                defaultDate: new Date(<?php echo $year.", ".$month.", ".$day ?>),
                setDefaultDate: true
            };
            var elems = document.querySelector('.datepicker');
            var instance = M.Datepicker.init(elems, options);
            // instance.open();
            instance.setDate(options.dafaultDate);
        });

        const defaultTime = '<?php echo session('time');?>';
        const myInput = document.getElementById('time');
        const timeInstance = M.Timepicker.init(myInput, {
            defaultTime: defaultTime
        });

        // forces materialize time picker to display default time in input
        timeInstance._updateTimeFromInput();
        timeInstance.done();
    </script>
@endsection