@extends('layouts.admin-dashboard')
@section('title','Admin| List Ads')
@section('main-content')
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="d-flex justify-content-between flex-wrap">
                <div class="d-flex align-items-end flex-wrap">
                    <div class="mr-md-3 mr-xl-5">
                        <h2>Product Details</h2>
                        @if(session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                    </div>

                </div>
                <div class="d-flex justify-content-between align-items-end flex-wrap">
                    <a href="{{ route('ads-add') }}" class="btn btn-primary mt-2 mt-xl-0">  <i class="mdi mdi-plus-circle"></i> Add Product</a>

                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 stretch-card">
            <div class="card">
                <div class="card-body">

                    <div class="table-responsive">
                        <table id="recent-purchases-listing" class="table">
                            <thead>
                            <tr>
                                <th>SN</th>
                                <th>Name</th>
                                <th>Title</th>
                                <th>Feedbacks</th>

                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($feeds as $feeds)
                                <tr>
                                    <td>{{$feeds->id}}</td>
                                    <td>{{$feeds->name}}</td>
                                    <td>{{$feeds->subject}}</td>
                                    <td>{{$feeds->message}}</td>

                                    <td><a href="{{ route('destroy_feeds' , $feeds->id) }}">Delete</a></td>


                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
