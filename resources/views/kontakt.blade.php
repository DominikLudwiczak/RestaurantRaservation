@extends('layouts.app')

@section('content')
    <div class='container'>
        <div class='center-align'>
            <span style='font-size:3em;'>Kontakt</span>
        </div>
        <div class='row'>
            <div class='col s12 m6' style='margin-top:1em;'>
                <div id='map' style='height:30em;'></div>
                <script>
                    // Initialize and add the map
                    function initMap() {
                        // The location of Uluru
                        var uluru = {lat: 52.408562, lng: 16.921653};
                        // The map, centered at Uluru
                        var map = new google.maps.Map(
                            document.getElementById('map'), {zoom: 16, center: uluru});
                        // The marker, positioned at Uluru
                        var marker = new google.maps.Marker({position: uluru, map: map});
                    }
                </script>
                <script async defer
                    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDG9bjJdmuc2uo8QdtEiSiTGoesLk8sQlM&callback=initMap">
                </script>
            </div>
            <div class='col s12 m6' style='margin-top:1.5em;'>
                <div class='col s12 valign-wrapper' style="padding:0.5em;">
                    <i class="material-icons prefix" style="color: #D8977B; font-size:2em;">phone</i> <a href='tel:+48123456789' class='flow-text' style='color:#818181; font-size:1.5em;'>123 465 789</a>
                </div>
                <div class='col s12 valign-wrapper' style="padding:0.5em;">
                    <i class="material-icons prefix" style="color: #D8977B; font-size:2em;">email</i> <a href='mailto:restauracja.divaldo@gmail.com' style='color:#818181; font-size:1.5em;'>restauracja.divaldo@gmail.com</a>
                </div>
                <div class='col s12 valign-wrapper' style="padding:0.5em;">
                    <i class='material-icons prefix' style='color: #D8977B; font-size:2.5em;'>home</i> <span style='color:#818181; font-size:1.5em;'>Poznań ul.Fredry 13</span>
                </div>

                <div class='col s12 center-align'>
                    <hr/>
                    <span style='font-size:1.5em; color:#818181;'>Godziny otwarcia</span>
                    <table class='striped'>
                        <tbody>
                            <tr>
                                <th class='center-align'>PN-PT</th>
                                <th class='center-align'>12:00-22:00</th>
                            </tr>
                            <tr>
                                <th class='center-align'>SOB</th>
                                <th class='center-align'>12:00-23:00</th>
                            </tr>
                            <tr>
                                <th class='center-align'>ND</th>
                                <th class='center-align'>12:00-21:30</th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div> 
        </div>
    </div>
@endsection  