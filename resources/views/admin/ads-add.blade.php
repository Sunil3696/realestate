@extends('layouts.admin-dashboard')
@section('title','Admin| Add Ads')
@section('main-content')
    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="d-flex justify-content-between flex-wrap">
                <div class="d-flex align-items-end flex-wrap">
                    <div class="mr-md-3 mr-xl-5">
                        <h2>{{ isset($ads_detail) ? 'Update' : 'Add' }} Ads </h2>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <form action="{{ isset($ads_detail) ? route('ads_update_submit',$ads_detail->id) : route('ads_submit') }}" method="post" class="form" enctype="multipart/form-data">
                @csrf
                <div class="form-group row">
                    <div class="col-sm-2">
                        Ads Title
                    </div>
                    <div class="col-sm-9">
                        <input type="text" value="{{ @$ads_detail->title }}" name="title" class="form-control" placeholder="Enter Ads title" required>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-2">
                        Ads Link
                    </div>
                    <div class="col-sm-9">
                        <input type="url" name="link" value="{{ @$ads_detail->link }}" class="form-control" placeholder="Enter Ads" required>
                    </div>
                </div>



                <div class="form-group row">
                    <div class="col-sm-2">
                        Image
                    </div>
                    <div class="col-sm-9">
                        <div class="input-group">
                   <span class="input-group-btn">
                     <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                       <i class="fa fa-picture-o"></i> Choose
                     </a>
                   </span>
                            <input id="thumbnail" class="form-control" type="text" name="filepath">
                        </div>
                        <img id="holder" src="{{ @$ads_detail->images }}" style="margin-top:15px;max-height:100px;">
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-sm-2">
                        Ads status
                    </div>
                    <div class="col-sm-9">
                        <select name="status" class="form-control" >
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                        </select>
                    </div>
                </div>


                <div class="form-group row">
                    <div class="col-sm-2">

                    </div>
                    <div class="col-sm-9">
                        <input type="submit" class="btn btn-outline-success" value="Submit">
                    </div>
                </div>


            </form>




        </div>
    </div>
@endsection


@section('scripts')
    <script src="{{ asset('/vendor/laravel-filemanager/js/stand-alone-button.js') }}"></script>
    <script>
        $('#lfm').filemanager('image');
    </script>
@endsection
