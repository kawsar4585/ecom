@extends('layouts.app-admin')

@section('content')
    <section class="content ecommerce-page">

        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-7 col-md-6 col-sm-12">
                        <h2>eCommerce Dashboard
                            <small>Welcome to Oreo</small>
                        </h2>
                    </div>
                    <div class="col-lg-5 col-md-6 col-sm-12">
                        <ul class="breadcrumb float-md-right">
                            <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Oreo</a></li>
                            <li class="breadcrumb-item"><a href="ec-dashboard.html">eCommerce</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <div class="card product_item">
                        <div class="body">
                            <div class="cp_img">
                                <img src="{{asset('assets')}}/images/ecommerce/1.png" alt="Product" class="img-fluid" />
                                <div class="hover">
                                    <a href="javascript:void(0);" class="btn btn-primary btn-sm waves-effect"><i class="zmdi zmdi-plus"></i></a>
                                    <a href="javascript:void(0);" class="btn btn-primary btn-sm waves-effect"><i class="zmdi zmdi-shopping-cart"></i></a>
                                </div>
                            </div>
                            <div class="product_details">
                                <h5><a href="ec-product-detail.html">Simple Black Clock</a></h5>
                                <ul class="product_price list-unstyled">
                                    <li class="old_price">$16.00</li>
                                    <li class="new_price">$13.00</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <div class="card product_item">
                        <div class="body">
                            <div class="cp_img">
                                <img src="{{asset('assets')}}/images/ecommerce/15.png" alt="Product" class="img-fluid" />
                                <div class="hover">
                                    <a href="javascript:void(0);" class="btn btn-primary btn-sm waves-effect"><i class="zmdi zmdi-plus"></i></a>
                                    <a href="javascript:void(0);" class="btn btn-primary btn-sm waves-effect"><i class="zmdi zmdi-shopping-cart"></i></a>
                                </div>
                            </div>
                            <div class="product_details">
                                <h5><a href="ec-product-detail.html">Simple Black Clock</a></h5>
                                <ul class="product_price list-unstyled">
                                    <li class="old_price">$12.00</li>
                                    <li class="new_price">$11.00</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <div class="card product_item">
                        <div class="body">
                            <div class="cp_img">
                                <img src="{{asset('assets')}}/images/ecommerce/13.png" alt="Product" class="img-fluid" />
                                <div class="hover">
                                    <a href="javascript:void(0);" class="btn btn-primary btn-sm waves-effect"><i class="zmdi zmdi-plus"></i></a>
                                    <a href="javascript:void(0);" class="btn btn-primary btn-sm waves-effect"><i class="zmdi zmdi-shopping-cart"></i></a>
                                </div>
                            </div>
                            <div class="product_details">
                                <h5><a href="ec-product-detail.html">Brone Candle</a></h5>
                                <ul class="product_price list-unstyled">
                                    <li class="old_price">$23.00</li>
                                    <li class="new_price">$17.00</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <div class="card product_item">
                        <div class="body">
                            <div class="cp_img">
                                <img src="{{asset('assets')}}/images/ecommerce/4.png" alt="Product" class="img-fluid" />
                                <div class="hover">
                                    <a href="javascript:void(0);" class="btn btn-primary btn-sm waves-effect"><i class="zmdi zmdi-plus"></i></a>
                                    <a href="javascript:void(0);" class="btn btn-primary btn-sm waves-effect"><i class="zmdi zmdi-shopping-cart"></i></a>
                                </div>
                            </div>
                            <div class="product_details">
                                <h5><a href="ec-product-detail.html">Simple Black Clock</a></h5>
                                <ul class="product_price list-unstyled">
                                    <li class="old_price">$16.00</li>
                                    <li class="new_price">$10.00</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <div class="card product_item">
                        <div class="body">
                            <div class="cp_img">
                                <img src="{{asset('assets')}}/images/ecommerce/5.png" alt="Product" class="img-fluid" />
                                <div class="hover">
                                    <a href="javascript:void(0);" class="btn btn-primary btn-sm waves-effect"><i class="zmdi zmdi-plus"></i></a>
                                    <a href="javascript:void(0);" class="btn btn-primary btn-sm waves-effect"><i class="zmdi zmdi-shopping-cart"></i></a>
                                </div>
                            </div>
                            <div class="product_details">
                                <h5><a href="ec-product-detail.html">Brone Lamp Glasses</a></h5>
                                <ul class="product_price list-unstyled">
                                    <li class="old_price">$18.00</li>
                                    <li class="new_price">$15.00</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <div class="card product_item">
                        <div class="body">
                            <div class="cp_img">
                                <img src="{{asset('assets')}}/images/ecommerce/14.png" alt="Product" class="img-fluid" />
                                <div class="hover">
                                    <a href="javascript:void(0);" class="btn btn-primary btn-sm waves-effect"><i class="zmdi zmdi-plus"></i></a>
                                    <a href="javascript:void(0);" class="btn btn-primary btn-sm waves-effect"><i class="zmdi zmdi-shopping-cart"></i></a>
                                </div>
                            </div>
                            <div class="product_details">
                                <h5><a href="ec-product-detail.html">Unero Small Bag</a></h5>
                                <ul class="product_price list-unstyled">
                                    <li class="old_price">$21.00</li>
                                    <li class="new_price">$17.00</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <div class="card product_item">
                        <div class="body">
                            <div class="cp_img">
                                <img src="{{asset('assets')}}/images/ecommerce/7.png" alt="Product" class="img-fluid" />
                                <div class="hover">
                                    <a href="javascript:void(0);" class="btn btn-primary btn-sm waves-effect"><i class="zmdi zmdi-plus"></i></a>
                                    <a href="javascript:void(0);" class="btn btn-primary btn-sm waves-effect"><i class="zmdi zmdi-shopping-cart"></i></a>
                                </div>
                            </div>
                            <div class="product_details">
                                <h5><a href="ec-product-detail.html">Unero Round Sunglass</a></h5>
                                <ul class="product_price list-unstyled">
                                    <li class="old_price">$16.00</li>
                                    <li class="new_price">$10.00</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <div class="card product_item">
                        <div class="body">
                            <div class="cp_img">
                                <img src="{{asset('assets')}}/images/ecommerce/8.png" alt="Product" class="img-fluid" />
                                <div class="hover">
                                    <a href="javascript:void(0);" class="btn btn-primary btn-sm waves-effect"><i class="zmdi zmdi-plus"></i></a>
                                    <a href="javascript:void(0);" class="btn btn-primary btn-sm waves-effect"><i class="zmdi zmdi-shopping-cart"></i></a>
                                </div>
                            </div>
                            <div class="product_details">
                                <h5><a href="ec-product-detail.html">Wood Simple Clock</a></h5>
                                <ul class="product_price list-unstyled">
                                    <li class="old_price">$16.00</li>
                                    <li class="new_price">$10.00</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <div class="card product_item">
                        <div class="body">
                            <div class="cp_img">
                                <img src="{{asset('assets')}}/images/ecommerce/9.png" alt="Product" class="img-fluid" />
                                <div class="hover">
                                    <a href="javascript:void(0);" class="btn btn-primary btn-sm waves-effect"><i class="zmdi zmdi-plus"></i></a>
                                    <a href="javascript:void(0);" class="btn btn-primary btn-sm waves-effect"><i class="zmdi zmdi-shopping-cart"></i></a>
                                </div>
                            </div>
                            <div class="product_details">
                                <h5><a href="ec-product-detail.html">Wood Long TV Board</a></h5>
                                <ul class="product_price list-unstyled">
                                    <li class="old_price">$16.00</li>
                                    <li class="new_price">$10.00</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <div class="card product_item">
                        <div class="body">
                            <div class="cp_img">
                                <img src="{{asset('assets')}}/images/ecommerce/10.png" alt="Product" class="img-fluid" />
                                <div class="hover">
                                    <a href="javascript:void(0);" class="btn btn-primary btn-sm waves-effect"><i class="zmdi zmdi-plus"></i></a>
                                    <a href="javascript:void(0);" class="btn btn-primary btn-sm waves-effect"><i class="zmdi zmdi-shopping-cart"></i></a>
                                </div>
                            </div>
                            <div class="product_details">
                                <h5><a href="ec-product-detail.html">Simple Black Clock</a></h5>
                                <ul class="product_price list-unstyled">
                                    <li class="old_price">$16.00</li>
                                    <li class="new_price">$10.00</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <div class="card product_item">
                        <div class="body">
                            <div class="cp_img">
                                <img src="{{asset('assets')}}/images/ecommerce/11.png" alt="Product" class="img-fluid" />
                                <div class="hover">
                                    <a href="javascript:void(0);" class="btn btn-primary btn-sm waves-effect"><i class="zmdi zmdi-plus"></i></a>
                                    <a href="javascript:void(0);" class="btn btn-primary btn-sm waves-effect"><i class="zmdi zmdi-shopping-cart"></i></a>
                                </div>
                            </div>
                            <div class="product_details">
                                <h5><a href="ec-product-detail.html">Wood Simple Chair V2</a></h5>
                                <ul class="product_price list-unstyled">
                                    <li class="old_price">$16.00</li>
                                    <li class="new_price">$10.00</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12">
                    <div class="card product_item">
                        <div class="body">
                            <div class="cp_img">
                                <img src="{{asset('assets')}}/images/ecommerce/12.png" alt="Product" class="img-fluid" />
                                <div class="hover">
                                    <a href="javascript:void(0);" class="btn btn-primary btn-sm waves-effect"><i class="zmdi zmdi-plus"></i></a>
                                    <a href="javascript:void(0);" class="btn btn-primary btn-sm waves-effect"><i class="zmdi zmdi-shopping-cart"></i></a>
                                </div>
                            </div>
                            <div class="product_details">
                                <h5><a href="ec-product-detail.html">Simple Black Clock</a></h5>
                                <ul class="product_price list-unstyled">
                                    <li class="old_price">$16.00</li>
                                    <li class="new_price">$10.00</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @section('script')

    <script src="{{asset('assets')}}/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->
    <script src="{{asset('assets')}}/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->

    <script src="{{asset('assets')}}/bundles/mainscripts.bundle.js"></script><!-- Custom Js -->

@endsection
