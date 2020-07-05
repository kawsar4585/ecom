<!doctype html>
<html class="no-js " lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Responsive Bootstrap 4 and web Application ui kit.">

    <title>:: Oreo :: eC Dashboard</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('assets')}}/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/plugins/jvectormap/jquery-jvectormap-2.0.3.css"/>
    <link rel="stylesheet" href="{{asset('assets')}}/plugins/morrisjs/morris.css" />

    <!-- Custom Css -->
    <link rel="stylesheet" href="{{asset('assets')}}/css/main.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/ecommerce.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/color_skins.css">

    <style>
        .form-control.ms{
            height: auto !important;
        }

        .ajax-alert-success,.ajax-alert-error{
            display: none;
        }
        textarea.form-control{
            border: 1px solid #E3E3E3 !important;
            border-radius: 8px;
            padding: 10px 10px;
        }
        .quick-links a{
            color: #fff;
        }
        @media screen and (max-width: 425px) {

            .nav-tabs {

                display: inline-block;
                width: 100%;
                padding-left: unset;
                padding-right: unset;
                text-align: center;

            }
        }

        .card .card-body {
            min-height: unset;
        }

        .breadcrumb{
            padding: .2rem 1rem !important;
        }
        #report{
            background-color: #fff;
        }
        .sidebar .menu .list .ml-menu li a {
            padding-top: 2px;
            padding-bottom: 2px;
        }
        .sidebar .menu .list a {


            padding: 6px 10px;
        }

        .sidebar .menu .list i.material-icons {
            margin-top: 0px;
            font-size: 22px;
        }

        label.error{
            font-size: 14px;
            color: red;
            font-weight: 500;
        }

        .hidden{
            display: none;
        }


        .dropdown-menu.inner{
            display: block;
        }


        @media screen and (max-width: 767px) {

            .nav-school-name{
                display: none !important;
            }
        }

        .bootstrap-select.form-control{
            padding-top: 0px;
        }
        .bootstrap-select.form-control .btn{
            margin-top: 0px !important;
            height: 35px !important;
        }

        .form-group .bootstrap-select button{
            background-color: #fff !important;

        }
    </style>

    @yield('style')
</head>
<body class="theme-purple">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img class="zmdi-hc-spin" src="{{asset('assets')}}/images/logo.svg" width="48" height="48" alt="Oreo"></div>
        <p>Please wait...</p>
    </div>
</div>

<!-- Overlay For Sidebars -->
<div class="overlay"></div>

<!-- Top Bar -->
<nav class="navbar p-l-5 p-r-5">
    <ul class="nav navbar-nav navbar-left">
        <li>
            <div class="navbar-header">
                <a href="javascript:void(0);" class="bars"></a>
                <a class="navbar-brand" href="index.html"><img src="assets/images/logo.svg" width="30" alt="Oreo"><span class="m-l-10">Oreo</span></a>
            </div>
        </li>
        <li><a href="javascript:void(0);" class="ls-toggle-btn" data-close="true"><i class="zmdi zmdi-swap"></i></a></li>
        <li class="hidden-md-down"><a href="events.html" title="Events"><i class="zmdi zmdi-calendar"></i></a></li>
        <li class="hidden-md-down"><a href="mail-inbox.html" title="Inbox"><i class="zmdi zmdi-email"></i></a></li>
        <li><a href="contact.html" title="Contact List"><i class="zmdi zmdi-account-box-phone"></i></a></li>

        <li class="hidden-sm-down">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search...">
                <span class="input-group-addon">
                    <i class="zmdi zmdi-search"></i>
                </span>
            </div>
        </li>
        <li class="float-right">
            <a href="javascript:void(0);" class="fullscreen hidden-sm-down" data-provide="fullscreen" data-close="true"><i class="zmdi zmdi-fullscreen"></i></a>
            <a href="sign-in.html" class="mega-menu" data-close="true"><i class="zmdi zmdi-power"></i></a>
            <a href="javascript:void(0);" class="js-right-sidebar" data-close="true"><i class="zmdi zmdi-settings zmdi-hc-spin"></i></a>
        </li>
    </ul>
</nav>

<!-- Left Sidebar -->
<aside id="leftsidebar" class="sidebar">
    <ul class="nav nav-tabs">
        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#dashboard"><i class="zmdi zmdi-home m-r-5"></i>Oreo</a></li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane stretchRight active" id="dashboard">
            <div class="menu">
                <ul class="list">
                    <li class="active open"> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-shopping-cart"></i><span>Ecommerce</span> </a>
                        <ul class="ml-menu">
                            <li class="active"> <a href="{{'/admin/dashboard'}}">Dashboard</a></li>

                            <li class={{Request::is('admin/product')? 'active' : null}}> <a href="{{url('admin/product')}}">Product</a></li>

                            <li class="active"> <a href="{{url('admin/product-list')}}">Product List</a></li>
                            <li class="active"> <a href="{{url('admin/product-add')}}">Product Add</a></li>

                            <li> <a href="{{url('admin/product-detail')}}">Product detail</a></li>

                        </ul>
                    </li>


                    <li> <a href="javascript:void(0);" class="menu-toggle"><i class="zmdi zmdi-lock"></i><span>Authentication</span> </a>
                        <ul class="ml-menu">
                            <li><a href="">Sign In</a> </li>
                            <li><a href="">Sign Up</a> </li>
                            <li><a href="">Forgot Password</a> </li>
                        </ul>
                    </li>

                </ul>
            </div>
        </div>

    </div>
</aside>

<!-- Right Sidebar -->

<!-- Chat-launcher -->

<!-- Main Content -->
@yield('content')
</section>

<!-- Jquery Core Js -->
<script src="{{asset('assets')}}/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->
<script src="{{asset('assets')}}/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->

<script src="{{asset('assets')}}/bundles/morrisscripts.bundle.js"></script> <!-- Morris Plugin Js -->
<script src="{{asset('assets')}}/bundles/jvectormap.bundle.js"></script> <!-- JVectorMap Plugin Js -->
<script src="{{asset('assets')}}/bundles/flotchartsscripts.bundle.js"></script> <!-- flot charts Plugin Js -->
<script src="{{asset('assets')}}/bundles/sparkline.bundle.js"></script> <!-- Sparkline Plugin Js -->
<script src="{{asset('assets')}}/bundles/knob.bundle.js"></script> <!-- Jquery Knob Plugin Js -->

<script src="{{asset('assets')}}/bundles/mainscripts.bundle.js"></script>
<script src="{{asset('assets')}}/js/pages/ecommerce.js"></script>
<script src="{{asset('assets')}}/js/pages/charts/jquery-knob.min.js"></script>
</body>
</html>