
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="shortcut icon" href="images/favicon.png" />
</head>
<body>
<div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="navbar-brand-wrapper d-flex justify-content-center">
            <div class="navbar-brand-inner-wrapper d-flex justify-content-between align-items-center w-100">
                <a class="navbar-brand brand-logo" href="{{ route('admin') }}"><label>PrithakRealstate</label></a>
                <a class="navbar-brand brand-logo-mini" href="index.html"><img src="images/logo-mini.svg" alt="logo"/></a>
                <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                    <span class="mdi mdi-sort-variant"></span>
                </button>
            </div>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
            <ul class="navbar-nav mr-lg-4 w-100">
                <li class="nav-item nav-search d-none d-lg-block w-100">
                    <div class="input-group">
                        <div class="input-group-prepend">
                <span class="input-group-text" id="search">
                  <i class="mdi mdi-magnify"></i>
                </span>
                        </div>
                        <input type="text" class="form-control" placeholder="Search now" aria-label="search" aria-describedby="search">
                    </div>
                </li>
            </ul>
            <ul class="navbar-nav navbar-nav-right">
                <li class="nav-item dropdown mr-1">
                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <input type="submit" class="btn btn-danger" value="logout">
                    </form>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="messageDropdown">
                        <p class="mb-0 font-weight-normal float-left dropdown-header"></p>
                        <a class="dropdown-item">
                            <div class="item-thumbnail">
                                <img src="images/faces/face4.jpg" alt="image" class="profile-pic">
                            </div>
                            <div class="item-content flex-grow">
                                <h6 class="ellipsis font-weight-normal">
                                </h6>
                                <p class="font-weight-light small-text text-muted mb-0">

                                </p>
                            </div>
                        </a>
                        <a class="dropdown-item">
                            <div class="item-thumbnail">
                                <img src="images/faces/face2.jpg" alt="image" class="profile-pic">
                            </div>
                            <div class="item-content flex-grow">
                                <h6 class="ellipsis font-weight-normal">Tim Cook
                                </h6>
                                <p class="font-weight-light small-text text-muted mb-0">
                                    New product launch
                                </p>
                            </div>
                        </a>
                        <a class="dropdown-item">
                            <div class="item-thumbnail">
                                <img src="" alt="image" class="profile-pic">
                            </div>
                            <div class="item-content flex-grow">
                                <h6 class="ellipsis font-weight-normal">
                                </h6>
                                <p class="font-weight-light small-text text-muted mb-0">

                                </p>
                            </div>
                        </a>
                    </div>
                </li>
                <li class="nav-item dropdown mr-4">
                    <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center notification-dropdown" id="notificationDropdown" href="#" data-toggle="dropdown">
                        <i class="mdi mdi-bell mx-0"></i>
                        <span class="count"></span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="notificationDropdown">
                        <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
                        <a class="dropdown-item">
                            <div class="item-thumbnail">
                                <div class="item-icon bg-success">
                                    <i class="mdi mdi-information mx-0"></i>
                                </div>
                            </div>
                            <div class="item-content">
                                <h6 class="font-weight-normal">Application Error</h6>
                                <p class="font-weight-light small-text mb-0 text-muted">
                                    Just now
                                </p>
                            </div>
                        </a>
                        <a class="dropdown-item">
                            <div class="item-thumbnail">
                                <div class="item-icon bg-warning">
                                    <i class="mdi mdi-settings mx-0"></i>
                                </div>
                            </div>
                            <div class="item-content">
                                <h6 class="font-weight-normal">Settings</h6>
                                <p class="font-weight-light small-text mb-0 text-muted">
                                    Private message
                                </p>
                            </div>
                        </a>
                        <a class="dropdown-item">
                            <div class="item-thumbnail">
                                <div class="item-icon bg-info">
                                    <i class="mdi mdi-account-box mx-0"></i>
                                </div>
                            </div>
                            <div class="item-content">
                                <h6 class="font-weight-normal">New user registration</h6>
                                <p class="font-weight-light small-text mb-0 text-muted">
                                    2 days ago
                                </p>
                            </div>
                        </a>
                    </div>
                </li>
                <li class="nav-item nav-profile ">

                        <span class="nav-profile-name">{{ Auth::user()->name}}</span>


                </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                <span class="mdi mdi-menu"></span>
            </button>
        </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link" href="index.html">--}}
{{--                        <i class="mdi mdi-home menu-icon"></i>--}}
{{--                        <span class="menu-title">Dashboard</span>--}}
{{--                    </a>--}}
{{--                </li>--}}
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('file-manager') }}">
                        <i class="mdi mdi-file menu-icon"></i>
                        <span class="menu-title">File Manager</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('product-list') }}">
                        <i class="mdi mdi-package-up menu-icon"></i>
                        <span class="menu-title">Product Management</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('ads_list') }}">
                        <i class="mdi mdi-share-variant menu-icon"></i>
                        <span class="menu-title">Ads Management</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('Feed_back') }}">
                        <i class="mdi mdi-message menu-icon"></i>
                        <span class="menu-title">FeedBack Management</span>
                    </a>
                </li>  <li class="nav-item">
                    <a class="nav-link" href="{{ route('about') }}">
                        <i class="mdi mdi-google-pages menu-icon"></i>
                        <span class="menu-title">Page Management</span>
                    </a>
                </li>



            </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
                @yield('main-content')

            </div>
            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->
            <footer class="footer">
                <div class="d-sm-flex justify-content-center justify-content-sm-between">
                    <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © {{ date('Y') }} <a href="https://www.hbooking.loc/" target="_blank">Hbooking</a>. All rights reserved.</span>
                    <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Crafted by Sunil</span>
                </div>
            </footer>

        </div>

    </div>

</div>




<script src="{{ asset('js/manifest.js') }}"></script>
<script src="{{ asset('js/vendor.js') }}"></script>
<script src="{{ asset('js/app.js') }}"></script>
<script>
    $('#brief_desc').summernote();
</script>
@yield('scripts')



</body>

</html>

