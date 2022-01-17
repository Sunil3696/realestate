@extends('layouts.master')
@section('title','HOME || Prithakrealestate')
@section('main-content')
    {{--    @if(isset($product_info))--}}
    {{--   {{ dd($product_info) }}--}}
    {{--        @endif--}}


    @if(session('status'))
        <div class="alert alert-success alert-dismissible">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            <strong>Thank you!</strong> For you Feedback.
        </div>
    @endif
    <section class="main py-5">
        <div class="container py-5">
            <div class="row py-5">
                <div class="col-lg-10 py-5 mx-auto">
                    <h1 class="text-white text-center">Looking for best property?</h1>
                    <p class="text-white text-center">Search best property in all over Nepal.</p>
                    <form action="{{ route('search') }}" method="post">
                        @csrf
                        <div class="card mt-4">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-3" style="padding-right: 0px!important;">
                                        <span>Enter the Location:</span>
                                        <input type="text" name="location" class="form-control" placeholder="Location">
                                    </div>
                                    <div class="col-lg-3" style="padding-right: 0px!important;">
                                        <span>Minimum Price: </span>
                                        <input type="number" name="min_amt" class="form-control" placeholder="Minimum Price">
                                    </div>
                                    <div class="col-lg-3" style="padding-right: 0px!important;">
                                        <span>Maximum Price:</span>
                                        <input type="number" name="max_amt" class="form-control" placeholder="Maximum Price">
                                    </div>
                                    <div class="col-lg-3">
                                        <button class="sea btn btn-primary" type="submit" value="Search">Search</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--   ***********************main landing ends***************** -->
    <!--   ***********************section overview starts***************** -->
    <section class="landing_page py-5 bg-light">
        <div class="container py-5">
              <h1 class="h-sale text-center font-weight-bold">Service We Offer</h1><br>
            <div class="row">
                <div class="col-lg-4">
                    <img src="https://www.morevectors.com/wp-content/uploads/2012/09/Cartoon-house-vector-view-300x212.jpg" alt="" class="img-fluid mx-auto d-block">
                    <h2 class="font-weight-bold text-center">Buy a Home/Land</h2>
                    <p class="text-center">Over the 4000+ property are in sale and in rent.We provide best proprety for you with full security</p>

                </div>
                <div class="col-lg-4">
                    <img src="https://staplefordcg.b-cdn.net/wp-content/uploads/sites/68/2018/01/file-13102012303059.jpg" alt="" class="img-fluid mx-auto d-block">
                    <h2 class="font-weight-bold text-center">Rent a Home/land</h2>
                    <p class="text-center">Over the 5000+ property are in sale and in rent.Now get your dream home at best price and get relerle</p>

                </div>
                <div class="col-lg-4">
                    <img src="https://menaengineers.com/wp-content/uploads/2020/07/Engineer-CivilEngineerIntro-YCP1.jpg" alt="" class="img-fluid mx-auto d-block">
                    <h2 class="font-weight-bold text-center">Engineering Service</h2>
                    <p class="text-center">Now get Free from tention of Designing, we do the best design of infrastrucutures, let us design your home </p>

                </div>
            </div>
        </div>
    </section>
    <!--   ***********************section overview ends***************** -->
    <!--   ***********************section property for sale starts***************** -->





    <section class="sale bg-light">
        <div class="container">
            <h1 class="h-sale text-center font-weight-bold">Property for Sale</h1>
            <p class="p-sale text-center">This are the property for sale in Nepal.</p>
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    @foreach($product_info as $product_info)
                        <div class="carousel-item @if($loop->first) active @endif">
                            <div class="row">

                                <div class="col-md-6">
                                    <a href="{{ route('view_detail', $product_info->id) }}">  <img style="width: auto; height: 350px;" src="{{$product_info->images}}" alt="{{ $product_info->title }}">
                                    </a> </div>
                                <div class="col-md-6">
                                    <h3 style="margin-top: 80px; color: lawngreen">{{ $product_info->title }}</h3>
                                    <h6>{{ $product_info->short_desc }}</h6>
                                    <label>{{ $product_info->price }}</label>
                                </div>

                            </div>
                        </div>
                    @endforeach

                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
    </section>
    <!--   ***********************section property for sale ends***************** -->
    <!--   ***********************section landlord***************** -->

















    <section class="landlord">
        <div class="container py-5">
            <div class="row">


                @foreach($ads_info as $ads_info)
                    <a href="{{ $ads_info->link }}"> <img src="{{ $ads_info->images }}" alt="{{ $ads_info->title   }}"></a>
                @endforeach


            </div>
        </div>
    </section>

    <!--   ***********************section landlord ends***************** -->
    <!--   ***********************section property for Rent***************** -->


    <section class="sale bg-light">
        <div class="container">
            <h1 class="h-sale text-center font-weight-bold">Property for Sale</h1>
            <p class="p-sale text-center">This are the property for Sale in Nepal.</p>
            <div class="owl-carousel owl-theme">
                @foreach($sell_info as $sell_info )

                    <div class="item" style="align-items: center; margin-left: 25px;">
                        <a href="{{ route('view_detail', $sell_info->id) }}">
                            <img src="{{ $sell_info->images }}" alt="{{ $sell_info->title }}" style="height: 180px;">
                        </a>
                        <a href="{{ route('view_detail', $sell_info->id) }}">
                            <label for="" style="overflow: hidden; color: orange;">{{ $sell_info->title }}</label>
                        </a>

                    </div>
                @endforeach

            </div>


        </div>
    </section>

    <section class="sale bg-light">
        <div class="container">
            <h1 class="h-sale text-center font-weight-bold">Property for Rent</h1>
            <p class="p-sale text-center">This are the property for rent in Nepal.</p>
            <div class="owl-carousel owl-theme">
                @foreach($rent_info as $rent_info )

                <div class="item" style="align-items: center; margin-left: 25px;">
                    <a href="{{ route('view_detail', $rent_info->id) }}">
                       <img src="{{ $rent_info->images }}" alt="{{ $rent_info->title }}" style="height: 180px;">
                    </a>
                    <a href="{{ route('view_detail', $rent_info->id) }}">
                    <label for="" style="overflow: hidden; color: orange;">{{ $rent_info->title }}</label>
                    </a>

                </div>
                @endforeach

            </div>


        </div>
    </section>
    <!--   ***********************section property for rent ends***************** -->
    <!--  <*****************************Review starts************************> -->
    <section class="similar">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="hea-wh text-center font-weight-bold">What our customers say?</h2>
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="single-box">
                                            <div class="img-area"><img src="https://image.freepik.com/free-vector/cute-boy-cartoon_33070-2118.jpg" alt="image"></div>
                                            <div class="img-text">
                                                <h2>Hari bahadur</h2>
                                                <p> ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                    quis nostrud exercitation ullamco</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="single-box">
                                            <div class="img-area"><img src="https://thumbs.dreamstime.com/b/cute-boy-cartoon-illustration-90163697.jpg" alt="image"></div>
                                            <div class="img-text">
                                                <h2>Ram bahadur</h2>
                                                <p> ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                    quis nostrud exercitation ullamco</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="single-box">
                                            <div class="img-area"><img src="https://thumbs.dreamstime.com/b/cute-boy-cartoon-illustration-86419835.jpg" alt="image"></div>
                                            <div class="img-text">
                                                <h2>Dhiva bahadur</h2>
                                                <p> ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                    quis nostrud exercitation ullamco</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="single-box">
                                            <div class="img-area"><img src="https://image.freepik.com/free-vector/tired-employee-worker-cartoon-icon-illustration-people-business-icon-concept-isolated-flat-cartoon-style_138676-2096.jpg" alt="image"></div>
                                            <div class="img-text">
                                                <h2>Khusi bahadur</h2>
                                                <p> ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                    quis nostrud exercitation ullamco</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="single-box">
                                            <div class="img-area"><img src="https://image.freepik.com/free-vector/cute-boy-cartoon_33070-2054.jpg" alt="image"></div>
                                            <div class="img-text">
                                                <h2>Silla bahadur</h2>
                                                <p> ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                    quis nostrud exercitation ullamco</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="single-box">
                                            <div class="img-area"><img src="https://previews.123rf.com/images/hermandesign2015/hermandesign20151702/hermandesign2015170200123/72769097-cute-boy-cartoon.jpg" alt="image"></div>
                                            <div class="img-text">
                                                <h2>Shiva bahadur</h2>
                                                <p> ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                    quis nostrud exercitation ullamco</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--  <*****************************Review ends************************> -->
    <!-- <********************************conatct form *******************> -->
    <section class="section gray-bg" id="contactus">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title">
                        <h2>Get In Touch</h2>
                        <p>I design and develop services for customers of all sizes, specializing in creating stylish, modern websites</p>
                    </div>
                </div>
            </div>
            <div class="row flex-row-reverse">
                <div class="col-md-7 col-lg-8 m-15px-tb">
                    <div class="contact-form">
                        <form action="{{ route('feedback-submit') }}" method="post" class="contactform contact_form" id="contact_form">
                            @csrf
                            <div class="returnmessage valid-feedback p-15px-b" data-success="Your message has been received, We will contact you soon."></div>
                            <div class="empty_notice invalid-feedback p-15px-b"><span>Please Fill Required Fields</span></div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input id="name" name="name" type="text" placeholder="Full Name" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input id="email" name="email" type="text" placeholder="Email Address" class="form-control">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input id="subject" type="text" name="subject" placeholder="Subject" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea id="message" name="messages" placeholder="Message" class="form-control" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="send">
                                        <input type="submit" class="btn btn-outline-success" value="Submit" >
                                        {{--                                 <a id="send_message" type="submit" class="px-btn theme"><span class="cot">Contact Us</span> <i class="arrow"></i></a>--}}
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-5 col-lg-4 m-15px-tb">
                    <div class="contact-name">
                        <h5>Mail</h5>
                        <p>info@prithakrealestate.com</p>
                    </div>
                    <div class="contact-name">
                        <h5>Visit My Office</h5>
                        <p>New Road Takkagalli, <br>PB. 59766 kathmandu City</p>
                    </div>
                    <div class="contact-name">
                        <h5>Phone</h5>
                        <p>+977 984 354 8096</p>
                    </div>
                    <div class="social-share nav">
                        <a class="facebook" href="#">
                            <i class="fab fa-facebook"></i>
                        </a>
                        <a class="instagram" href="#">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a class="linkedin" href="#">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>


    </section>
    <!-- <*************************************contact form ends**************> -->
    <!-- <*****************************footer starts***************************> -->
@endsection
