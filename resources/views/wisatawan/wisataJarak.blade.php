@extends('wisatawan.index')

@section('title','Beranda - LU XING')

@push('mycss')
<style>
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
    .mydate {
        background: #3A678E;
        display: inline-block;
        color: #FFFFFF;
        padding: 10px;
        position: absolute;
        top: 0;
        right: 0;
    }
</style>
@endpush


@section('content')
<div style="text-align: center;">

    <br>
    <h1><b>Wisata Terdekatmu</b></h1>
    <br>

    @foreach ($jarak as $key => $j)
    <div class="col-md-3" style="display: inline-block;">   
        <div class="card">
            <div class="image" style="background-image: url({{ asset('uploads/about/' . $j->gambar) }});" ></div>
            <div class="mydate">{{ number_format($j->distance, 0) }} km</div>
            <div class="card-block">
                <div style="clear:both; height:15px;"></div>
                <h4 class="card-title" style="font-size: 20px;">{{ $j->nama }}</h4>
                <p class="card-text mytext">{{ $j->penjelasan }}</p>
                <p><a class="btn" href="{{ route('preferences.show', [$j->id]) }}" role="button">View details »</a></p>
            </div>
        </div>       
        <div style="clear:both; height:20px;"></div>
    </div>   
        <!-- {{ $j->nama }}
        {{ $j->distance }} -->
    @endforeach
</div>
@endsection

@push('myscript')

@endpush