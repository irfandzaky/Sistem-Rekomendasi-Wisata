@extends('wisatawan.index')

@section('title','Beranda - LU XING')

@push('mycss')
    <style>
        a[type=button]{
            background-color: #008CBA;
            border: none;
            color: white;
            padding: 9px 35px;
            text-decoration: none;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 25px;
            width: 330px;
            height: 45px;
            font-size: 18px;
        }
        .centered {
            position: absolute;
            top: 100%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: #fff;
            font-size: 20px;
            font-weight: bold; 
        }
        .card {
            margin-bottom: 10px;
            padding-left:5px;
            padding-top:5px;
            padding-right:5px;
        }

        .image{
            position:relative;
            overflow:hidden;
            padding-bottom:100%;
            
        }
        .image img{
            position:absolute;
        }
        .card .image {
            background-size: cover;
        }
        .mytext {
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 4; /* number of lines to show */
            -webkit-box-orient: vertical;
        }
        .btn {
            border: 1px solid;
            color: rgb(105,105,105);
            padding: 7px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
        }
        .mybtn {
            border: 1px solid;
            background-color: #fff;
            color: #000;
            padding: 10px 30px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 25px;
        }
    </style>
@endpush


@section('content')
<!-- 
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed in=true&libraries=places"></script>

<script type="text/javascript">
    google.maps.event.addDomListener(window, 'load', intilize);
    function intilize() {
        var autocomplete = new google.maps.places.Autocomplete(document.getElementById('txtautocomplete'));
        
        google.maps.event.addListener(autocomplete, 'place_changed', function(){
            var place = autocomplete.getPlace();
            var location = "<b>Location:</b>" + place.formatted_address + "<br/>";
            location += "<b>Latitude:</b>" + place.geometry.location.lat() + "<br/>";
            location += "<b>Longtitude:</b>" + place.geometry.location.lng();
        });
        document.getElementById('lblresult').innerHTML = location;
    };
</script>

<span>Location:</span><input type="text" id="txtautocomplete" style="width:200px" placeholder="Enter the address" /><br /><br />
<label id="lblresult"></label> -->

    <!-- <form action="{{ route('distances.store') }}" method="post" enctype="multipart/form-data ">
        {{ csrf_field() }}
        <div class="row">
            <div class="col-xl-6 m-auto">
                <div class="card shadow">
                    
                    <div class="form-group">
                        <label for="description"> Location  </label>
                        <input type="text" name="lat" class="form-control" placeholder="latitude"id="latitude">
                        <input type="text" name="lng" class="form-control" placeholder="longitude" id="longitude">
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-success"> Save </button>
                    </div>
                </div>
            </div>
        </div> -->

    <div style="clear:both; height: 80px;"></div>
    <div style="text-align: center;">
        <a class="mybtn" href="{{ route('distances.index') }}" role="button">Cari Berdasarkan Lokasi Anda</a>
    </div>

    <h1></h1>
    <br>
    
    <div style="text-align: center;">
        @foreach ($wisatas as $key => $wisatas)
            <div class="col-md-3" style="display: inline-block;">   
                <div class="card">
                    <div class="image" style="background-image: url({{ asset('uploads/about/' . $wisatas->gambar) }});" ></div>
                    <div class="card-block">
                        <div style="clear:both; height:15px;"></div>
                        <h4 class="card-title" style="font-size: 20px;">{{ $wisatas->nama }}</h4>
                        <p class="card-text mytext">{{ $wisatas->penjelasan }}</p>
                        <p><a class="btn" href="{{ route('preferences.show', [$wisatas->id]) }}" role="button">View details »</a></p>
                    </div>
                 </div>       
                <div style="clear:both; height:20px;"></div>
            </div>           
        @endforeach
    </div>

@endsection

@push('myscript')

@endpush
