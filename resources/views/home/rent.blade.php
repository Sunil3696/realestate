@extends('layouts.master')
@section('title','Rents || Mero real state')
@section('main-content')
    <style>
        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            max-width: 300px;
            margin: auto;
            text-align: center;
            font-family: arial;
        }

        .price {
            color: grey;
            font-size: 22px;
        }

        .card button {
            border: none;
            outline: 0;
            padding: 12px;
            color: white;
            background-color: #000;
            text-align: center;
            cursor: pointer;
            width: 100%;
            font-size: 18px;
        }

        .card button:hover {
            opacity: 0.7;
        }
    </style>
    <div class="container" style="margin-left: 8px; >
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="row" style="margin-left: 80px;">
                    @foreach($rents as $rents)
                        <div class="col-lg-4">
{{--                    <div class="col-lg-4">--}}
{{--                        <div class="card" style="border: none;">--}}
{{--                            <img src="{{$rents->images }}" alt="" class="img-fluid">--}}
{{--                            <h6 class="pl-5 pt-3 font-weight-bold">NRS. {{ $rents->price }}</h6>--}}
{{--                            <p class="px-3"> {{ $rents->short_desc }}</p>--}}

{{--                            <a href="{{ route('view_detail' , $rents->id) }}" class="btn btn-outline-success" style="margin-bottom: 80px;">Learn More</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                        <div class="card">
                            <a href="{{ route('view_detail' , $rents->id) }}"> <img src="{{ $rents->images }}" alt="Denim Jeans" style="height: 280px"></a>
                            <h4>{{ $rents->title }}</h4>
                            <p class="price">Npr. {{ $rents->price }}</p>
                            <p style="height: 20px; overflow: hidden;">{{ $rents->short_desc }}</p>
{{--                            <p><button class="btn btn-outline-success">Learn More</button></p>--}}
                        </div><br><br>
                        </div>

                    @endforeach

                </div></div></div></div>

    </div>

@endsection


