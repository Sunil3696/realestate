@extends('layouts.master')
@section('title','Rents || Mero real state')
@section('main-content')
        <div class="row">
            <div class="col-2"></div>
            <div class="col-10">
                <div class="d-flex align-items-end flex-wrap">
                    <div class="mr-md-3 mr-xl-5">
                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <input type="submit" class="btn btn-danger" value="logout">
                        </form>
                        <h2>Post Your Product</h2><br><br>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <form action="{{ route('client_ads_submit') }}" method="post" class="form" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group row">
                                <div class="col-sm-2">
                                    Product Title
                                </div>
                                <div class="col-sm-9">
                                    <input type="text" name="title" value="{{ @$edit_data->title }}" class="form-control" placeholder="Enter product title" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-2">
                                    Product Category
                                </div>
                                <div class="col-sm-9">
                                    <select name="category" class="form-control">

                                        <option  value="Land on Sell">Land On Sell</option>
                                        <option value="House on Rent">House on Rent</option>
                                        <option  value="House on Sell">House on Sell</option>
                                        <option  value="Land on Rent">Land on Rent</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-2">
                                    Product Location
                                </div>
                                <div class="col-sm-9">
                                    <input type="text" value="{{ @$edit_data->location }}" name="location" class="form-control" placeholder="Enter product Location" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-2">
                                    Product Price
                                </div>
                                <div class="col-sm-9">
                                    <input type="number" value="{{ @$edit_data->price }}" name="price" class="form-control" placeholder="Enter product price" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-2">
                                    Short Description
                                </div>
                                <div class="col-sm-9">
                                    <textarea  name="short-desc" cols="30" rows="5" class="form-control">{{ @$edit_data->short_desc }}</textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-2">
                                    Special Offer?*
                                </div>
                                <div class="col-sm-9">
                                    <input type="radio" name="special_offer" id="yes" value="YES">
                                    <label for="yes">Yes</label>
                                    <input type="radio" name="special_offer" id="no" value="NO">
                                    <label for="no">NO</label>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-2">
                                    Complete Description
                                </div>
                                <div class="col-sm-9">
                                    <textarea name="description" id="brief_desc" cols="30" rows="10">{{ @$edit_data->description }}</textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-2">
                                    Area Covered
                                </div>
                                <div class="col-md-9">
                                    <input type="text" value="{{ @$edit_data->area }}" name="area" class="form-control" placeholder="Enter product area" required>
                                </div>
                            </div>


                            <div class="form-group row">
                                <div class="col-sm-2">
                                    Product Features
                                </div>
                                <div class="col-sm-9">
                                    <label style="color: #ae1c17">Tick only if the product is house or flat</label> <br>
                                    <input type="checkbox" value="Swimming Pool" name="features[]">Swiming Pool &nbsp;
                                    <input type="checkbox" value="Garage" name="features[]">Garage &nbsp;
                                    <input type="checkbox" value="Garden" name="features[]">Garden &nbsp;
                                    <input type="checkbox" value="Water" name="features[]">Water &nbsp;
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-2">
                                    Contact Email
                                </div>
                                <div class="col-sm-3">
                                    <input type="email" value="{{ @$edit_data->email }}" name="email" class="form-control" placeholder="Enter email" required>
                                </div>
                                <div class="col-sm-3">
                                    <input type="number" value="{{ @$edit_data->contact_no }}" name="contact_no" class="form-control" placeholder="Phone Number" required>
                                </div>
                            </div>



                            <div class="form-group row">
                                <div class="col-sm-2">
                                    Product Maps
                                </div>
                                <div class="col-sm-9">
                                    <input type="text" name="maps" class="form-control" placeholder="Enter Maps URL">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-2">
                                    Product Video
                                </div>
                                <div class="col-sm-9">
                                    <input type="text" name="video" class="form-control" placeholder="Enter Youtube URL">
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
                                    <img src="{{ @$edit_data->images }}" id="holder" style="margin-top:15px;max-height:100px;">
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
            </div>
        </div>
@endsection

@section('scripts')
    <script src="{{ asset('/vendor/laravel-filemanager/js/stand-alone-button.js') }}"></script>
    <script>
        $('#lfm').filemanager('image');
    </script>
@endsection
