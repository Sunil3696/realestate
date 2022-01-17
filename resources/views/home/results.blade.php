@extends('layouts.master')
@section('title','Rents || Mero real state')
@section('main-content')
    <div class="container" style="margin-left: 8px; >
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="row" style="margin-left: 45px;">
                @if(isset($search))
                @foreach($search as $search)
                    <div class="col-lg-4">
                        <div class="card" style="border: none;">
                            <img src="{{$search->images }}" alt="" class="img-fluid">
                            <h6 class="pl-5 pt-3 font-weight-bold">NRS. {{ $search->price }}</h6>
                            <p class="px-3"> {{ $search->short_desc }}</p>

                            <a href="{{ route('view_detail' , $search->id) }}" class="btn btn-outline-success" style="margin-bottom: 80px;">Learn More</a>
                        </div>
                    </div>

                @endforeach
                    @endif


            </div>

        </div>
    </div>
        @if($search = 0)
            <h1>No Products Available On your Search</h1><a href="{{ route('property_for_sell') }}">Click here</a><label>To See Our products

        @endif
@endsection


