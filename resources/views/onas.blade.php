@extends('layouts.app')

@section('content')
    <div class='center-align'>
        <span style='font-size:2.5em;'>O Nas</span>
        <div class="card">
            <div class='card-tabs' style="background-color:#8A6F63;">
                <ul class='tabs tabs-fixed-width'>
                    <li class='tab'><a href='#one'>O Nas</a></li>
                    <li class='tab'><a href='#two'>Organizacja imprez</a></li>
                    <li class='tab'><a href='#three'>Galeria</a></li>
                </ul>
            </div>
            <div class='card-content' style="min-height: 60vh;">
                <div id='one'>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias reiciendis quo qui cupiditate officiis repellendus,
                    molestiae, eveniet ex fuga excepturi labore. Quasi officia obcaecati aperiam veniam voluptates ipsam repellat assumenda.
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias reiciendis quo qui cupiditate officiis repellendus,
                    molestiae, eveniet ex fuga excepturi labore. Quasi officia obcaecati aperiam veniam voluptates ipsam repellat assumenda.
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias reiciendis quo qui cupiditate officiis repellendus,
                    molestiae, eveniet ex fuga excepturi labore. Quasi officia obcaecati aperiam veniam voluptates ipsam repellat assumenda.
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias reiciendis quo qui cupiditate officiis repellendus,
                    molestiae, eveniet ex fuga excepturi labore. Quasi officia obcaecati aperiam veniam voluptates ipsam repellat assumenda.<br/><br/>
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias reiciendis quo qui cupiditate officiis repellendus,
                    molestiae, eveniet ex fuga excepturi labore. Quasi officia obcaecati aperiam veniam voluptates ipsam repellat assumenda.
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias reiciendis quo qui cupiditate officiis repellendus,
                    molestiae, eveniet ex fuga excepturi labore. Quasi officia obcaecati aperiam veniam voluptates ipsam repellat assumenda.
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias reiciendis quo qui cupiditate officiis repellendus,
                    molestiae, eveniet ex fuga excepturi labore. Quasi officia obcaecati aperiam veniam voluptates ipsam repellat assumenda.
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias reiciendis quo qui cupiditate officiis repellendus,
                    molestiae, eveniet ex fuga excepturi labore. Quasi officia obcaecati aperiam veniam voluptates ipsam repellat assumenda.
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Alias reiciendis quo qui cupiditate officiis repellendus,
                    molestiae, eveniet ex fuga excepturi labore. Quasi officia obcaecati aperiam veniam voluptates ipsam repellat assumenda.
                 </div>
                <div id='two'>Test 2</div>
                <div id='three'>
                    <div class='col m12'>
                        <table class='responsive-table'>
                            <thead>
                                <tr>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    @for($i=1; $i < 7; $i++)
                                        <td><img class='materialboxed' width="200rem" src='/photos/desktop/foto-{{$i}}.jpg'></td>
                                    @endfor
                                    @for($i=1; $i < 6; $i++)
                                        <td><img class='materialboxed' width="200rem" src='/photos/mobile/mob-{{$i}}.jpg'></td>
                                    @endfor
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection