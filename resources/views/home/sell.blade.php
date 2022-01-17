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
                @foreach($sell as $sell)
                    <div class="col-lg-4">
{{--                        <div class="card" style="border: none;">--}}
{{--                            <img src="{{$sell->images }}" alt="" class="img-fluid">--}}
{{--                            <h6 class="pl-5 pt-3 font-weight-bold">NRS. {{ $sell->price }}</h6>--}}
{{--                            <p class="px-3"> {{ $sell->short_desc }}</p>--}}

{{--                            <a href="{{ route('view_detail' , $sell->id) }}" class="btn btn-outline-success" style="margin-bottom: 80px;">Learn More</a>--}}
{{--                        </div>--}}
{{--                    </div>--}}

                    <div class="card">
                        <a href="{{ route('view_detail' , $sell->id) }}"> <img src="{{$sell->images }}" alt="Denim Jeans" style="height: 280px"></a>
                        <h4>{{$sell->title }}</h4>
                        <p class="price">Npr. {{$sell->price }}</p>
                        <p style="height: 20px; overflow: hidden;">{{$sell->short_desc }}</p>
                        {{--                            <p><button class="btn btn-outline-success">Learn More</button></p>--}}
                    </div><br><br>
            </div>

                @endforeach

            </div></div></div></div>

    </div>

@endsection


