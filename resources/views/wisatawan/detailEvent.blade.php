@extends('wisatawan.index')

@section('title','LUXING')

@push('mycss')
<style>
    .wu {
        white-space: pre-wrap; 
        text-align: left; 
    }
</style>
@endpush

@section('content')
<div style="clear:both; height:30px;"></div>
<div style="margin-left: 200px; margin-right: 200px; font-weight: bold;">
    <div class="container">
        <img class="image" src="{{ asset('uploads/' . $detail->gambar)}}" alt="Image" style="height: 500px; width: 100%;">
        
        <div style="clear:both; height:30px;"></div>
        <div class="row" style="height: 20px;">
            <label class="col-md-2 col-form-label text-md-left">Nama Event</label>
            <div class="col-md-5" style="margin-top: 6px;">
                : {{ $detail->nama }}
            </div>
        </div>
        <div style="clear:both; height:10px;"></div>
        <div class="row" style="height: 20px;">
            <label class="col-md-2 col-form-label text-md-left">Tanggal</label>
            <div class="col-md-5" style="margin-top: 6px;">
                : {{\Carbon\Carbon::parse($detail->tanggal)->format('d M Y')}} 
            </div>
        </div>
        <div style="clear:both; height:10px;"></div>
        <div class="row" style="height: 20px;">
            <label class="col-md-2 col-form-label text-md-left">Tempat</label>
            <div class="col-md-5" style="margin-top: 6px;">
                : {{ $detail->tempat }}  
            </div>
        </div>
        <div style="clear:both; height:10px;"></div>
        <div class="row" style="height: 20px;">
            <label class="col-md-2 col-form-label text-md-left">Penyelenggara</label>
            <div class="col-md-5" style="margin-top: 6px;">
                : {{ $detail->penyelenggara }}  
            </div>
        </div>
        <div style="clear:both; height:50px;"></div>
    
        <div class="wu">
            {{ $detail->penjelasan }}
        </div>
    </div>
</div>
@endsection