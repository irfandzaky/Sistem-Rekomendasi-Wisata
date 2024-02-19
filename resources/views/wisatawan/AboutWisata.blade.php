@extends('wisatawan.index')

@section('title','LUXING')

@push('mycss')
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
        .hu {
            width: 100%;
            height: 700px;
        }
        .wu {
            white-space: pre-wrap; 
            text-align: left; 
            font-size: 20px; 
            font-weight: bold;
        }
        .topnav {
            overflow: hidden;
            display: flex;
            justify-content: center;
            position: absolute;
            top: 90%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        .topnav a {
            float: none;
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
            border-top: 5px solid transparent;
            padding-right: 50px;
            padding-left: 50px;
        }
        .topnav a:hover {
            border-top: 5px solid red;
        }
        .topnav a.active {
            border-top: 5px solid red;
        }
        hr.new4 {
            width: 660px;
            border: 1px solid white;
            position: absolute;
            top: 83%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
    </style>
@endpush

@section('content')
<div class="carousel slide" data-ride="carousel">
      <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
                <div class="d-flex align-items-center justify-content-center min-vh-100">
                    <img class ="hu" src="{{ asset('uploads/about/' . $about->gambar) }}" alt="First slide" witdh="10px">
                </div>
            </div>
      </div>
</div>

<hr class="new4">
<div style="left: 50%">
    <div class="topnav">
        <a class="#" href="{{ url('preferences/'.$about->id) }}">About</a>
        <a href="{{ route('kegiatanUser.show', [$about->id]) }}">What To Do</a>
        <a href="{{ route('acara.show', [$about->id]) }}">Event</a>
        <a href="{{ route('post.index', [$about->id]) }}">Feedback</a>
    </div>
</div>

<div style="clear:both; height:20px;"></div>

<h1><b>{{$about->nama}}</b></h1>

<div class="w3-container"> 
    <div class="card">
        <div class="card-body">
        <p class="wu"> {{$about->penjelasan}} </p>
        </div>
    </div>      
</div>
@endsection