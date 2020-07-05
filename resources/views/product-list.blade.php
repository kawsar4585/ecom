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
                <div class="col-lg-12">
                    <div class="card product_item_list">
                        <div class="body table-responsive">
                            <table class="table table-hover m-b-0">
                                <thead>
                                <tr>
                                    <th>Image</th>
                                    <th>Product Name</th>
                                    <th data-breakpoints="sm xs">Detail</th>
                                    <th data-breakpoints="xs">Amount</th>
                                    <th data-breakpoints="xs md">Stock</th>
                                    <th data-breakpoints="sm xs md">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><img src="{{asset('assets')}}/images/ecommerce/1.png" width="48" alt="Product img"></td>
                                    <td><h5>Simple Black Clock</h5></td>
                                    <td><span class="text-muted">randomised words even slightly believable</span></td>
                                    <td>$16.00</td>
                                    <td><span class="col-green">In Stock</span></td>
                                    <td>
                                        <a href="javascript:void(0);" class="btn btn-default waves-effect waves-float waves-green"><i class="zmdi zmdi-edit"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-default waves-effect waves-float waves-red"><i class="zmdi zmdi-delete"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img src="{{asset('assets')}}/images/ecommerce/10.png" width="48" alt="Product img"></td>
                                    <td><h5>Brone Candle</h5></td>
                                    <td><span class="text-muted">It is a long established  will be distracted</span></td>
                                    <td>$15.00</td>
                                    <td><span class="col-amber">Low Stock</span></td>
                                    <td>
                                        <a href="javascript:void(0);" class="btn btn-default waves-effect waves-float waves-green"><i class="zmdi zmdi-edit"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-default waves-effect waves-float waves-red"><i class="zmdi zmdi-delete"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img src="{{asset('assets')}}/images/ecommerce/11.png" width="48" alt="Product img"></td>
                                    <td><h5>Wood Simple Clock</h5></td>
                                    <td><span class="text-muted">There passages of Lorem Ipsum available</span></td>
                                    <td>$16.00</td>
                                    <td><span class="col-amber">Low Stock</span></td>
                                    <td>
                                        <a href="javascript:void(0);" class="btn btn-default waves-effect waves-float waves-green"><i class="zmdi zmdi-edit"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-default waves-effect waves-float waves-red"><i class="zmdi zmdi-delete"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img src="{{asset('assets')}}/images/ecommerce/5.png" width="48" alt="Product img"></td>
                                    <td><h5>Unero Small Bag</h5></td>
                                    <td><span class="text-muted">It is a long established fact that a distracted</span></td>
                                    <td>$23.00</td>
                                    <td><span class="col-red">Out Of Stock</span></td>
                                    <td>
                                        <a href="javascript:void(0);" class="btn btn-default waves-effect waves-float waves-green"><i class="zmdi zmdi-edit"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-default waves-effect waves-float waves-red"><i class="zmdi zmdi-delete"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img src="{{asset('assets')}}/images/ecommerce/6.png" width="48" alt="Product img"></td>
                                    <td><h5>Simple Black Clock</h5></td>
                                    <td><span class="text-muted">Contrary to popular belief, simply random text</span></td>
                                    <td>$16.00</td>
                                    <td><span class="col-green">In Stock</span></td>
                                    <td>
                                        <a href="javascript:void(0);" class="btn btn-default waves-effect waves-float waves-green"><i class="zmdi zmdi-edit"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-default waves-effect waves-float waves-red"><i class="zmdi zmdi-delete"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img src="{{asset('assets')}}/images/ecommerce/2.png" width="48" alt="Product img"></td>
                                    <td><h5>Brone Lamp Glasses</h5></td>
                                    <td><span class="text-muted">All the Lorem Ipsum generators on predefined chunks</span></td>
                                    <td>$12.00</td>
                                    <td><span class="col-green">In Stock</span></td>
                                    <td>
                                        <a href="javascript:void(0);" class="btn btn-default waves-effect waves-float waves-green"><i class="zmdi zmdi-edit"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-default waves-effect waves-float waves-red"><i class="zmdi zmdi-delete"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td><img src="{{asset('assets')}}/images/ecommerce/3.png" width="48" alt="Product img"></td>
                                    <td><h5>Simple Black Clock</h5></td>
                                    <td><span class="text-muted">established fact that a be distracted</span></td>
                                    <td>$22.00</td>
                                    <td><span class="col-red">Out Of Stock</span></td>
                                    <td>
                                        <a href="javascript:void(0);" class="btn btn-default waves-effect waves-float waves-green"><i class="zmdi zmdi-edit"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-default waves-effect waves-float waves-red"><i class="zmdi zmdi-delete"></i></a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="card">
                        <div class="body">
                            <ul class="pagination pagination-primary m-b-0">
                                <li class="page-item"><a class="page-link" href="javascript:void(0);"><i class="zmdi zmdi-arrow-left"></i></a></li>
                                <li class="page-item active"><a class="page-link" href="javascript:void(0);">1</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0);">4</a></li>
                                <li class="page-item"><a class="page-link" href="javascript:void(0);"><i class="zmdi zmdi-arrow-right"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @section('script')

        <script src="{{asset('assets')}}/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->
        <script src="{{asset('assets')}}/bundles/vendorscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js -->

        <script src="{{asset('assets')}}/bundles/footable.bundle.js"></script> <!-- Lib Scripts Plugin Js -->

        <script src="{{asset('assets')}}/bundles/mainscripts.bundle.js"></script><!-- Custom Js -->
        <script src="{{asset('assets')}}/js/pages/tables/footable.js"></script><!-- Custom Js -->

    @endsection