@extends('wisatawan.index')

@section('title','Beranda - LU XING')

@push('mycss')
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <style>
        ul {
            list-style-type: none;
        }

        li {
            display: inline-block;
        }

        input[type="checkbox"][id^="cb"] {
            display: none;
        }

        label {
            border: 1px solid #fff;
            padding: 10px;
            display: block;
            position: relative;
            margin: 10px;
            cursor: pointer;
            -webkit-touch-callout: none;
            -webkit-user-select: none;
            -khtml-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        label::before {
            background-color: white;
            color: white;
            content: " ";
            display: block;
            border-radius: 50%;
            border: 1px solid grey;
            position: absolute;
            top: -5px;
            left: -5px;
            width: 25px;
            height: 25px;
            text-align: center;
            line-height: 28px;
            transition-duration: 0.4s;
            transform: scale(0);
        }

        label img {
            height: 100%;
            width: 100%;
            transition-duration: 0.2s;
            transform-origin: 50% 50%;
        }

        :checked+label {
            border-color: #ddd;
        }

        :checked+label::before {
            content: "✓";
            background-color: grey;
            transform: scale(1);
        }

        :checked+label img {
            transform: scale(0.9);
            box-shadow: 0 0 5px #333;
            z-index: -1;
        }
        .check{
            opacity:0.5;
            color:#996;    
        }
        .centered {
            position: absolute;
            top: 80%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: #fff;
            font-size: 20px;
            font-weight: bold; 
        }
        input[type=submit]{
            background-color: #008CBA;
            border: none;
            color: white;
            padding: 9px 35px;
            text-decoration: none;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 25px;
        }
    </style>
@endpush

@section('content')

    <div id="carouselExampleIndicators" class="my-carousel carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="img/brdr.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img/candi.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img/tuguu.jpg" alt="Third slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <br>
    <h1><b>Pilih Wisata Favoritmu</b></h1>
    <br>
    
    <form method="post" action="{{ route('preferences.store') }}">
        {{ csrf_field() }}

        <input type="hidden" name="nama_user" value="{{ Auth::user()->name }}">

        <div style="text-align: center;">
            @foreach ($genres as $key => $genre)
            <div class="col-md-3" style="display: inline-block;">  
                <ul>
                    <li>
                        <input type="checkbox" style="display: none;" name="id_genre[]" id="{{$genre->id}}" value="{{$genre->id}}"/>
                        <label for="{{$genre->id}}">
                            <div style="height: 400px; width: 280px;">
                                <img src="{{ asset('uploads/genre/' . $genre->gambar) }}" />
                            </div>
                        </label>
                        <div class="centered"> {{ $genre->nama }}</div>
                    </li>
                </ul>
            </div>
            @endforeach  
        </div>

        <div style="float: right; margin-right: 195px;">
            <input type="submit" value="Lanjut">
        </div>
    </form>

    <div style="clear:both; height:20px;"></div>
        
@endsection

@push('myscript')
<script>
    $(document).ready(function(e){
    		$(".img-check").click(function(){
				$(this).toggleClass("check");
			});
	});
</script>
@endpush