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
                    <?php
                        $dir_desktop = "./photos/desktop/";
                        $files_desktop = scandir($dir_desktop);
                        $dir_mob = "./photos/mobile/";
                        $files_mob = scandir($dir_mob);
                        unset($files_desktop[0]);
                        unset($files_desktop[1]);
                        $files_desktop=array_values($files_desktop);
                        unset($files_mob[0]);
                        unset($files_mob[1]);
                        $files_mob=array_values($files_mob);
                    ?>
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
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $y=0; ?>
                                @for($x=0; $x <= ceil(count($files_desktop)/7); $x++)
                                    <tr class='hide-on-small-only'>
                                        @for($i=$y; $i < count($files_desktop); $i++)
                                            @if($i < 7*$x)
                                                <td><img class='materialboxed' width="200rem" src="{{$dir_desktop}}{{$files_desktop[$i]}}"></td>
                                            @else
                                                <?php $y=$i; ?>
                                                @break
                                            @endif
                                        @endfor
                                    </tr>
                                @endfor

                                <?php $y=0; ?>
                                @for($x=0; $x <= ceil(count($files_mob)/7); $x++)
                                    <tr class='hide-on-med-and-up'>
                                        @for($i=$y; $i < count($files_mob); $i++)
                                            @if($i < 7*$x)
                                                <td><img class='materialboxed' width="200rem" src="{{$dir_mob}}{{$files_mob[$i]}}"></td>
                                            @else
                                                <?php $y=$i; ?>
                                                @break
                                            @endif
                                        @endfor
                                    </tr>
                                @endfor
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection