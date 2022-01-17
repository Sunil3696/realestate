@extends('layouts.admin-dashboard')
@section('title','Products || prithakrealstate')
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
                        @if(session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif
                    </div>

                </div>
                <div class="d-flex justify-content-between align-items-end flex-wrap">
                    <a href="{{ route('product-add') }}" class="btn btn-primary mt-2 mt-xl-0">  <i class="mdi mdi-plus-circle"></i> Add Product</a>

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
                                <th>Title</th>
                                <th>Category</th>
                                <th>Price</th>
                                <th>Location</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($product_info as $info)
                                <tr>
                                    <td>{{ $info->id }}</td>
                                    <td>{{ $info->title }}</td>
                                    <td>{{ $info->category }}</td>
                                    <td>{{ $info->price }}</td>
                                    <td>{{ $info->location }}</td>
                                    <td><img src="{{ asset($info->images) }}" style="width: 80px; height: 80px;"></td>
                                    <td>{{ $info->status }}</td>
                                    <td><a href="{{ route('pedit',$info->id) }}">Edit</a>|| <a href="{{ route('destroy', $info->id) }}">Delete</a></td>

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
