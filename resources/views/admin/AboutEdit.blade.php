@extends('admin.index')

@push('cssku')
<style>
    #map-canvas{
        width: 100%;
        height: 350px
    }
</style>
@endpush

@section('content')
    
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">About</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ url('/home') }}">Home</a></li>
                        <li class="breadcrumb-item">About Wisata</li>
                        <li class="breadcrumb-item active">About</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <section class="content">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2 class="card-title" style="margin-bottom: 1px;">Edit Wisata</h2>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('abouts.update', $about->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')

                                <div class="form-group row">
                                    <label for="email" class="col-md-2 col-form-label text-md-right">Nama :</label>

                                    <div class="col-md-8">
                                        <input type="text" class="form-control" name="nama" value="{{ $about->nama }}" placeholder="nama" required>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-md-2 col-form-label text-md-right">Genre :</label>

                                    <div class="col-md-8">
                                        <select class="form-control" name="id_genre">
                                            @foreach($classname_genre as $genre)
                                            <option value="{{$genre->id}}" {{ $genre->id == $about->id_genre ? 'selected' : '' }}>{{$genre->id}}-{{$genre->nama}}</option>
                                            @endforeach     
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email" class="col-md-2 col-form-label text-md-right">Deskripsi :</label>

                                    <div class="col-md-8">
                                        <textarea style="height: 250px;" class="form-control" name="penjelasan" placeholder="keterangan" required>{{ $about->penjelasan }}</textarea>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email" class="col-md-2 col-form-label text-md-right">Lokasi :</label>

                                    <div class="col-md-8">
                                        <div id="map-canvas"></div>
                                        <div style="clear:both; height:10px;"></div>
                                        <input type="text" name="alamat" id="searchmap" value="{{ $about->alamat }}" required>  
                                        <input type="hidden" class="form-control input-sm" value="{{ $about->lat }}" name="lat" id="lat">
                                        <input type="hidden" class="form-control input-sm" value="{{ $about->lng }}" name="lng" id="lng">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email" class="col-md-2 col-form-label text-md-right">Upload Foto :</label>

                                    <div class="col-md-8">
                                        <input type="file" name="gambar" accept=".jpg,.jpeg,.png"/>
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-8 offset-md-2">
                                        <button type="submit" class="btn btn-primary">
                                            Simpan
                                        </button>
                                        <a class="btn btn-success" href="{{ route('abouts.index') }}"> Kembali </a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@push('myjs')
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


