@extends('wisatawan.index')

@section('title','LUXING')

@push('mycss')
<style>
    #map-canvas{
        width: 100%;
        height: 350px
    }
    input[type=text], select {
        width: 30%;
        padding: 8px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 10px;
        box-sizing: border-box;
    }
    button[type=submit] {
        background-color: #4D8EC7;
        border: none;
        border-radius: 25px;
        width: 150px;
        padding: 8px 20px;
    }
</style>
@endpush

@section('content')

<div id="map-canvas"></div>

<div style="clear:both; height: 20px;"></div>

<div class="container" style="text-align: center;">
    <h2><b>Kamu sedang dimana?</b></h2>
    <form action="{{ route('distances.store') }}" method="POST">
    @csrf
        <div class="form-group" >
            <label for="" style="font-weight: bold;">Lokasi :</label>
            <input type="text" id="searchmap" placeholder="Masukkan Lokasi" required>  
        </div>
        
        <input type="hidden" class="form-control input-sm" name="lat" id="lat">
    
        <input type="hidden" class="form-control input-sm" name="lng" id="lng">
      
        <div style="font-weight: bold; margin-top: 20px;">
            <button type="submit" class="btn btn-primary">Search</button>
        </div>
    </form>
</div>
@endsection

@push('myscript')
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDs_rn7bVJcUNeexCiRC35MDmlUnVoUwyA&libraries=places" type="text/javascript"></script>

    <script>
        var map = new google.maps.Map(document.getElementById('map-canvas'),{
            center:{
                lat: 27.72,
                lng: 85.36
            },
            zoom:15
        });

        var marker = new google.maps.Marker({
            position: {
                lat: 27.72,
                lng: 85.36
            },
            map: map,
            draggable: true
        });

        var searchBox = new google.maps.places.SearchBox(document.getElementById('searchmap'));

        google.maps.event.addListener(searchBox, 'places_changed', function(){
            var places = searchBox.getPlaces();
            var bounds = new google.maps.LatLngBounds();
            var i, place;

            for(i=0; place=places[i]; i++){
                bounds.extend(place.geometry.location);
                marker.setPosition(place.geometry.location);
            }

            map.fitBounds(bounds);
            map.setZoom(15);
        });

        google.maps.event.addListener(marker, 'position_changed', function(){
            var lat = marker.getPosition().lat();
            var lng = marker.getPosition().lng();

            $('#lat').val(lat);
            $('#lng').val(lng);
        });
    </script>
@endpush