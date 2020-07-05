@extends('layouts.app-admin')
@section('content')
    <section class="content">

            <div class="block-header">
                <div class="row">
                    <div class="col-lg-7 col-md-6 col-sm-12">
                        <h2>eCommerce Dashboard
                            <small>Welcome to Oreo</small>
                        </h2>
                    </div>
                    <div class="col-lg-5 col-md-6 col-sm-12">
                        <ul class="breadcrumb float-md-right">
                            <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Oreo</a>
                            </li>
                            <li class="breadcrumb-item"><a href="ec-dashboard.html">eCommerce</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ul>
                    </div>
                </div>
            </div>
        <div class="container-fluid">
            @if(session()->has('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if($errors->any())
                <div class="alert alert-danger">
                    {{ $errors->first() }}
                </div>
            @endif
            <!-- Advanced Form Example With Validation -->
                <div class="row clearfix">
                    <div class="offset-md-3 col-md-6">
                        <div class="card">
                            <div class="header">
                                <h2><strong>Add New</strong>Product</h2>
                            </div>
                            <div class="body">


                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="body">

                                            <div class="alert alert-success ajax-alert-success"></div>
                                            <div class="alert alert-success ajax-alert-error"></div>
                                            <form action="{{url('/admin/product-add')}}" id="form"  accept-charset="UTF-8" enctype="multipart/form-data" method="POST">
                                                {{csrf_field()}}

                                                <div class="row clearfix">

                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for=""><small>Product Name*</small></label>
                                                                <input type="text" name="name" id="name_id" class="form-control" placeholder="Product Name">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-12 class_id">
                                                            <div class="form-group ">
                                                                <label for=""><small>Amount</small></label>
                                                                <input type="number" class="form-control" placeholder="Amount" name="amount" >
                                                            </div>
                                                        </div>
                                                        <div class="col-md-12">
                                                            <div class="form-group">
                                                                <label for=""><small>Stock</small></label>
                                                                <select  data-live-search="true"  name="stock" id="stock" class="form-control ms">
                                                                    <option value="">Select an Option</option>
                                                                    <option value="in_stock">In Stock</option>
                                                                    <option value="low_stock">Low Stock</option>
                                                                    <option value="out_of_stock">Out of stock</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for=""><small>Detail</small></label>
                                                            <textarea name="description"  class="form-control" placeholder="Detail"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for=""><small>Image</small></label>
                                                            <input type="file" class="form-control" name="image" id="image_id">
                                                        </div>
                                                    </div>

                                                    <div class="col-md-12 text-center">
                                                        <button data-loading-text="Processing..." class="btn btn-primary btn-round" type="submit">Save Changes</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- #END# Advanced Form Example With Validation -->
        </div>



    </section>


@endsection