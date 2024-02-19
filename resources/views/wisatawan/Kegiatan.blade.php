@extends('wisatawan.index')

@section('title','LUXING')

@push('mycss')
<link href="https://fonts.googleapis.com/css?family=Roboto:100i,300,400,500,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Allura" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('/timeline/css/style.css')}}">
<style>
    .mytext {
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-line-clamp: 4; /* number of lines to show */
        -webkit-box-orient: vertical;
    }
    .txt {
        font-family: Arial, Helvetica, sans-serif;
        color: #000;
        font-size: 15px;
    }
    .btn {
        width: 30%;
        border: 1px solid;
        color: white;
        background-color: #3F51B5;
        padding: 7px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 14px;
        margin: 7px 1px;
        cursor: pointer;
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
    .center{
        text-align: center;
    }
</style>
@endpush

@section('content')

    <div style="clear:both; height:50px;"></div>

    <h1><b>Kegiatan</b></h1>

    <div class="center">
    @foreach ($kegiatan as $key => $e)
        <a style="display:none;">{{ $e->id_about }}</a>
        <div class="col-md-3" style="display: inline-block;">   
            <div class="card">
                <div class="image" style="background-image: url({{ asset('uploads/' . $e->gambar)}});" ></div>
                <div class="card-block">
                    <div style="clear:both; height:15px;"></div>
                    <h4 class="card-title" style="font-size: 20px;">{{$e->nama}}</h4>
                    <p class="card-text mytext">{{ $e->penjelasan }}</p>
                </div>
                <a type="button" href="{{ route('kegiatanUser.edit', [$e->id]) }}" class="btn" href="javascript:void(0)">Baca →</a>
            </div>       
            <div style="clear:both; height:5px;"></div>
        </div>           
    @endforeach
    </div>      

@endsection

@push('myscript')
<script src='https://cdn.jsdelivr.net/scrollreveal.js/3.3.1/scrollreveal.min.js'></script>
<script src="{{ asset('/timeline/js/index.js') }}"></script>
@endpush