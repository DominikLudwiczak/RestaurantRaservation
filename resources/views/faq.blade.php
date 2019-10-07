@extends('layouts.app')

@section('content')
    <div class='container center-align'>
        <span style='font-size:2.5em;'>FAQ</span>
        @foreach($result as $row)
            <ul class='collapsible'>
                <li>
                    <div class='collapsible-header'>{{$row->question}}</div>
                    <div class='collapsible-body'>
                        <span>
                            {{$row->answer}}
                        </span>
                    </div>
                </li>
            </ul>
        @endforeach
    </div>
@endsection