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
        border: 1px solid;
        color: white;
        background-color: #3F51B5;
        padding: 7px 20px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 14px;
        margin: 4px 2px;
        cursor: pointer;
    }
</style>
@endpush


@section('content')

    <div style="clear:both; height:50px;"></div>

    <h1><b>Event & Festival</b></h1>

    <section class="timeline">
        <div class="container">
            @foreach ($event as $key => $e)
            <a style="display:none;">{{ $e->tempat }}</a>
            <a style="display:none;">{{ $e->penyelenggara }}</a>
                <div class="timeline-item">
                    <div class="timeline-img"></div>
                    <div class="col-md-12 h-100">
                        <div class="timeline-content timeline-card js--fadeInLeft">
                            <img class="image" src="{{ asset('uploads/' . $e->gambar)}}" alt="Image" height="79px">
                            <div class="timeline-img-header">
                                <h2>{{$e->nama}}</h2>
                            </div>
                            <div class="date">{{\Carbon\Carbon::parse($e->tanggal)->format('d M Y')}}</div>
                            <p class="mytext txt">{{ $e->penjelasan }}</p>
                            <a type="button" href="{{ route('acara.edit', [$e->id]) }}" class="btn" href="javascript:void(0)">Baca →</a>
                            <div style="clear:both; height: 5px;"></div>
                        </div>
                    </div> 
                </div>  

            @endforeach      
        </div>
    </section>

@endsection

@push('myscript')
<script src='https://cdn.jsdelivr.net/scrollreveal.js/3.3.1/scrollreveal.min.js'></script>
<script src="{{ asset('/timeline/js/index.js') }}"></script>
@endpush