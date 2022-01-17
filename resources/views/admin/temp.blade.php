@extends('layouts.master')
@section('title','Rents || Mero real state')
@section('main-content')
    {{--    <div class="estate bg-light">--}}
    {{--        <div class="container">--}}
    {{--            <div class="row">--}}
    {{--                <div class="col-lg-12">--}}
    {{--                    <div class="row">--}}
    {{--                        <div class="col-lg-7">--}}
    {{--                            <div class="product-gallery">--}}
    {{--                                <div class="primary-image">--}}
    {{--                                    <a href="#" class="theater" rel="group" hidefocus="true">--}}
    {{--                                        <img src="{{ $data->images }}" class="img-fluid" alt="">--}}
    {{--                                    </a>--}}
    {{--                                </div>--}}
    {{--                                <div class="thumbnail-images">--}}
    {{--                                    <a href="#" class="theater" rel="group" hidefocus="true">--}}
    {{--                                        <img src="https://images.pexels.com/photos/106399/pexels-photo-106399.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" alt="">--}}
    {{--                                    </a>--}}
    {{--                                    <a href="#" class="theater" rel="group" hidefocus="true">--}}
    {{--                                        <img src="https://images.pexels.com/photos/106399/pexels-photo-106399.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" alt="">--}}
    {{--                                    </a>--}}
    {{--                                    <a href="#" class="theater" rel="group" hidefocus="true">--}}
    {{--                                        <img src="https://images.pexels.com/photos/106399/pexels-photo-106399.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" alt="">--}}
    {{--                                    </a>--}}
    {{--                                    <a href="#" class="theater" rel="group" hidefocus="true">--}}
    {{--                                        <img src="https://images.pexels.com/photos/106399/pexels-photo-106399.jpeg?auto=compress&cs=tinysrgb&h=650&w=940" alt="">--}}
    {{--                                    </a>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="col-lg-5">--}}
    {{--                            <div class="product-info">--}}
    {{--                                <h2>{{ $data->title }}</h2>--}}
    {{--                                <div class="wp-block property list no-border">--}}
    {{--                                    <div class="wp-block-content clearfix">--}}
    {{--                                        <h4 class="content-title">{{ $data->location }}</h4>--}}
    {{--                                        <p class="description mb-15">{{ $data->short_desc }}</p>--}}
    {{--                                        <span class="pull-left">--}}
    {{--                                <span class="price">NPR. {{ $data->price }}</span>--}}
    {{--                            </span>--}}
    {{--                                        <span class="float-right">--}}
    {{--                                <span class="capacity">--}}
    {{--                                    <i class="fa fa-user"></i>--}}
    {{--                                    <i class="fa fa-user"></i>--}}
    {{--                                </span>--}}
    {{--                            </span>--}}
    {{--                                    </div>--}}
    {{--                                    <div class="wp-block-footer style2 mt-15">--}}
    {{--                                        <ul class="aux-info">--}}
    {{--                                            <li><i class="fa fa-building"></i><span class="tx-siz">{{ $data->area }} Sq Feet</span></li>--}}
    {{--                                            <li><i class="fa fa-user"></i><span class="tx-siz"> {{ $data->features }}</span></li>--}}
    {{--                                            <li><i class="fa fa-user"></i><span class="tx-siz"> {{ $data->features }}</span></li>--}}
    {{--                                            <li><i class="fa fa-user"></i><span class="tx-siz"> {{ $data->features }}</span></li>--}}

    {{--                                        </ul>--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                                <span class="clearfix"></span>--}}
    {{--                                <p class="tx-siz">--}}
    {{--                                <h4 class="content-title" style="color: #1b1e21;">Contact Info</h4>--}}
    {{--                                    <label>Email : {{ $data->email }}</label><br>--}}
    {{--                                    <label>Contact : {{ $data->contact_no }}</label>--}}
    {{--                                </p>--}}

    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                    <div class="row">--}}
    {{--                        <div class="col-md-12">--}}
    {{--                            <div class="tabs-framed boxed">--}}
    {{--                                <ul class="nav-tabs nav nav-justified tabs">--}}
    {{--                                    <li class="nav-item">--}}
    {{--                                        <a class="nav-link active" href="#tab-1" data-toggle="tab"><span class="aps">Additional details</span></a>--}}
    {{--                                    </li>--}}
    {{--                                    <li class="nav-item">--}}
    {{--                                        <a class="nav-link" href="#tab-2" data-toggle="tab"><span class="aps">Maps</span></a>--}}
    {{--                                    </li>--}}
    {{--                                </ul>--}}
    {{--                                <div class="tab-content">--}}
    {{--                                    <div class="tab-pane text-white active" id="tab-1">--}}
    {{--                                        <div class="tab-body">--}}
    {{--                                            <div class="section-title-wr">--}}
    {{--                                                <h3 class="section-title left">Property description</h3>--}}
    {{--                                            </div>--}}
    {{--                                            <p>--}}
    {{--                                                {{ strip_tags($data->description)  }}--}}
    {{--                                            </p>--}}
    {{--                                            <div class="section-title-wr">--}}
    {{--                                                <h3 class="section-title left">Additional details</h3>--}}
    {{--                                            </div>--}}
    {{--                                            <table class="table table-bordered table-striped table-hover table-dark table-responsive">--}}
    {{--                                                <tbody>--}}
    {{--                                                <tr>--}}
    {{--                                                    <td><strong>Property Size:</strong>{{ $data->area }}</td>--}}
    {{--                                                    <td><strong>Lot size:</strong>{{ $data->area }}</td>--}}
    {{--                                                    <td><strong>Price:</strong> NPR. {{ $data->price }}</td>--}}
    {{--                                                    <td><strong>Status:</strong> {{ $data->status }}</td>--}}

    {{--                                                </tr>--}}

    {{--                                                </tbody>--}}
    {{--                                            </table>--}}
    {{--                                        </div>--}}
    {{--                                    </div>--}}

    {{--                                    <div class="tab-pane fade" id="tab-2">--}}
    {{--                                        <!-- <div class="tab-body"> -->--}}
    {{--                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7063.391280808806!2d85.32634752378765!3d27.726682078078845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19168de06f8b%3A0xcfa1995cfd8b4e8d!2sBaluwatar%2C%20Kathmandu%2044600!5e0!3m2!1sen!2snp!4v1604590710038!5m2!1sen!2snp" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>--}}
    {{--                                        <!--   </div> -->--}}
    {{--                                    </div>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
    <!-- <*******************************view page starts*****************> -->
    <!-- <***************************************similar catagory starts********************************> -->

    <style>
        body{
            margin-top:20px;
            background:#eee;
        }


        .product-content {
            border: 1px solid #dfe5e9;
            margin-bottom: 20px;
            margin-top: 12px;
            background: #fff
        }

        .product-content .carousel-control.left {
            margin-left: 0
        }

        .product-content .product-image {
            background-color: #fff;
            display: block;
            min-height: 238px;
            overflow: hidden;
            position: relative
        }

        .product-content .product-deatil {
            border-bottom: 1px solid #dfe5e9;
            padding-bottom: 17px;
            padding-left: 16px;
            padding-top: 16px;
            position: relative;
            background: #fff
        }

        .product-content .product-deatil h5 a {
            color: #2f383d;
            font-size: 15px;
            line-height: 19px;
            text-decoration: none;
            padding-left: 0;
            margin-left: 0
        }

        .product-content .product-deatil h5 a span {
            color: #9aa7af;
            display: block;
            font-size: 13px
        }

        .product-content .product-deatil span.tag1 {
            border-radius: 50%;
            color: #fff;
            font-size: 15px;
            height: 50px;
            padding: 13px 0;
            position: absolute;
            right: 10px;
            text-align: center;
            top: 10px;
            width: 50px
        }

        .product-content .product-deatil span.sale {
            background-color: #21c2f8
        }

        .product-content .product-deatil span.discount {
            background-color: #71e134
        }

        .product-content .product-deatil span.hot {
            background-color: #fa9442
        }

        .product-content .description {
            font-size: 12.5px;
            line-height: 20px;
            padding: 10px 14px 16px 19px;
            background: #fff
        }

        .product-content .product-info {
            padding: 11px 19px 10px 20px
        }

        .product-content .product-info a.add-to-cart {
            color: #2f383d;
            font-size: 13px;
            padding-left: 16px
        }

        .product-content name.a {
            padding: 5px 10px;
            margin-left: 16px
        }

        .product-info.smart-form .btn {
            padding: 6px 12px;
            margin-left: 12px;
            margin-top: -10px
        }

        .product-entry .product-deatil {
            border-bottom: 1px solid #dfe5e9;
            padding-bottom: 17px;
            padding-left: 16px;
            padding-top: 16px;
            position: relative
        }

        .product-entry .product-deatil h5 a {
            color: #2f383d;
            font-size: 15px;
            line-height: 19px;
            text-decoration: none
        }

        .product-entry .product-deatil h5 a span {
            color: #9aa7af;
            display: block;
            font-size: 13px
        }

        .load-more-btn {
            background-color: #21c2f8;
            border-bottom: 2px solid #037ca5;
            border-radius: 2px;
            border-top: 2px solid #0cf;
            margin-top: 20px;
            padding: 9px 0;
            width: 100%
        }

        .product-block .product-deatil p.price-container span,
        .product-content .product-deatil p.price-container span,
        .product-entry .product-deatil p.price-container span,
        .shipping table tbody tr td p.price-container span,
        .shopping-items table tbody tr td p.price-container span {
            color: #21c2f8;
            font-family: Lato, sans-serif;
            font-size: 24px;
            line-height: 20px
        }

        .product-info.smart-form .rating label {
            margin-top: 0
        }

        .product-wrap .product-image span.tag2 {
            position: absolute;
            top: 10px;
            right: 10px;
            width: 36px;
            height: 36px;
            border-radius: 50%;
            padding: 10px 0;
            color: #fff;
            font-size: 11px;
            text-align: center
        }

        .product-wrap .product-image span.sale {
            background-color: #57889c
        }

        .product-wrap .product-image span.hot {
            background-color: #a90329
        }

        .shop-btn {
            position: relative
        }

        .shop-btn>span {
            background: #a90329;
            display: inline-block;
            font-size: 10px;
            box-shadow: inset 1px 1px 0 rgba(0, 0, 0, .1), inset 0 -1px 0 rgba(0, 0, 0, .07);
            font-weight: 700;
            border-radius: 50%;
            padding: 2px 4px 3px!important;
            text-align: center;
            line-height: normal;
            width: 19px;
            top: -7px;
            left: -7px
        }

        .description-tabs {
            padding: 30px 0 5px!important
        }

        .description-tabs .tab-content {
            padding: 10px 0
        }

        .product-deatil {
            padding: 30px 30px 50px
        }

        .product-deatil hr+.description-tabs {
            padding: 0 0 5px!important
        }

        .product-deatil .carousel-control.left,
        .product-deatil .carousel-control.right {
            background: none!important
        }

        .product-deatil .glyphicon {
            color: #3276b1
        }

        .product-deatil .product-image {
            border-right: none!important
        }

        .product-deatil .name {
            margin-top: 0;
            margin-bottom: 0
        }

        .product-deatil .name small {
            display: block
        }

        .product-deatil .name a {
            margin-left: 0
        }

        .product-deatil .price-container {
            font-size: 24px;
            margin: 0;
            font-weight: 300
        }

        .product-deatil .price-container small {
            font-size: 12px
        }

        .product-deatil .fa-2x {
            font-size: 16px!important
        }

        .product-deatil .fa-2x>h5 {
            font-size: 12px;
            margin: 0
        }

        .product-deatil .fa-2x+a,
        .product-deatil .fa-2x+a+a {
            font-size: 13px
        }

        .profile-message ul {
            list-style: none ;
        }

        .product-deatil .certified {
            margin-top: 10px
        }

        .product-deatil .certified ul {
            padding-left: 0
        }

        .product-deatil .certified ul li:not(first-child) {
            margin-left: -3px
        }

        .product-deatil .certified ul li {
            display: inline-block;
            background-color: #f9f9f9;
            border: 1px solid #ccc;
            padding: 13px 19px
        }

        .product-deatil .certified ul li:first-child {
            border-right: none
        }

        .product-deatil .certified ul li a {
            text-align: left;
            font-size: 12px;
            color: #6d7a83;
            line-height: 16px;
            text-decoration: none
        }

        .product-deatil .certified ul li a span {
            display: block;
            color: #21c2f8;
            font-size: 13px;
            font-weight: 700;
            text-align: center
        }

        .product-deatil .message-text {
            width: calc(100% - 70px)
        }

        @media only screen and (min-width:1024px) {
            .product-content div[class*=col-md-4] {
                padding-right: 0
            }
            .product-content div[class*=col-md-8] {
                padding: 0 13px 0 0
            }
            .product-wrap div[class*=col-md-5] {
                padding-right: 0
            }
            .product-wrap div[class*=col-md-7] {
                padding: 0 13px 0 0
            }
            .product-content .product-image {
                border-right: 1px solid #dfe5e9
            }
            .product-content .product-info {
                position: relative
            }
        }

        .message img.online {
            width:40px;
            height:40px;
        }
    </style>
    <div class="col-sm-12 col-md-12 col-lg-12">
        <!-- product -->
        <div class="product-content product-wrap clearfix product-deatil">
            <div class="row">
                <div class="col-md-5 col-sm-12 col-xs-12">
                    <div class="product-image">
                        <div id="myCarousel-2" class="carousel slide">

                            <div class="carousel-inner">
                                <!-- Slide 1 -->
                                <div class="item active">
                                    <img src="{{ $data->images }}" style="height: 420px;" alt="" />
                                </div>


                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-md-offset-1 col-sm-12 col-xs-12">
                    <h2 class="name">
                        {{ $data->title }}
                        <small>Location: {{ $data->location }}</small>

                    </h2>
                    <hr />
                    <h3 class="price-container">
                        Npr. {{ $data->price }}
                        <small>*includes tax</small>
                    </h3>
                    <div class="certified">
                        <ul>
                            <li>
                                <a href="javascript:void(0);">Area<span>{{ $data->area }}</span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">Email<span>{{ $data->email }}</span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0);">Contact<span>{{ $data->contact_no }}</span></a>
                            </li>
                        </ul>
                    </div>
                    <hr />
                    <div class="description description-tabs">
                        <ul id="myTab" class="nav nav-pills">
                            <li class="active"><Product Description</li>&nbsp;&nbsp;

                        </ul>
                        <div id="" class="tab-content">
                            <div class="" id="more-information">

                                <strong><h3>Description</h3></strong>
                                <p>
                                    {!! $data->description !!}
                                </p>





                            </div>
                            <hr />

                        </div>
                    </div>
                </div>
                <!-- end product -->
            </div>
























































            <section class="testimonal">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="hea-wh text-center font-weight-bold">You May Also Like</h2><br>
                            <div class="owl-carousel owl-theme">
                                @foreach($similars as $similars)
                                    <div class="item"  style="align-items: center; margin-left: 25px;">
                                        <a href="{{ route('view_detail', $similars->id) }}">
                                            <div class="img-box"><img src="{{ $similars->images }}" alt="{{ $similars->title }}"></div>
                                        </a>
                                        <br> <div><p>{{ $similars->title }}</p></div>
                                        <p class="overview" style="size: 16px;"><strong>{{ $similars->location }}</strong></p>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </section>
@endsection
