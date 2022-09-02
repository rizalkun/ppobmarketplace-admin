@extends('layouts.index')

@section('content')
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Category</h3>
                                <nav>
                                    <ul class="breadcrumb">
                                        <li class="breadcrumb-item">Home</li>
                                        <li class="breadcrumb-item">Product</li>
                                        <li class="breadcrumb-item">Category</li>
                                        <li class="breadcrumb-item active"><a href="#">Add</a></li>
                                    </ul>
                                </nav>
                            </div><!-- .nk-block-head-content -->
                        </div><!-- .nk-block-between -->
                    </div><!-- .nk-block-head -->
                    <div class="nk-block nk-block-lg">
                        <div class="row">
                            <div class="col-lg-8 col-xl-6">
                                <div class="card card-bordered card-preview">
                                    <div class="card-inner">
                                        <div class="card-title-group">
                                            <div class="card-title">
                                                <h6 class="title">Add Category</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-inner">
                                        <form action="/admin/product/category">
                                            <div class="form-group">
                                                <label class="form-label" for="p_id">Product Id</label>
                                                <input type="text" class="form-control" name="product_id" id="p_id" placeholder="Enter Product Id">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label" for="p_name">Product Name</label>
                                                <input type="text" class="form-control" name="product_name" id="p_name" placeholder="Enter Product Name">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Type</label>
                                                <select class="form-select js-select2" name="is_prabayar">
                                                    <option>Select</option>
                                                    <option value="true">Prabayar</option>
                                                    <option value="false">Pascabayar</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Status</label>
                                                <select class="form-select js-select2" name="status">
                                                    <option>Select</option>
                                                    <option value="1">Availale</option>
                                                    <option value="0">Not Availale</option>
                                                </select>
                                            </div>
                                            <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                                <li>
                                                    <button type="submit" class="btn btn-lg btn-primary">Save</button>
                                                </li>
                                                <li>
                                                    <a href="/admin/product/category" class="btn btn-lg btn-light">Cancel</a>
                                                </li>
                                            </ul>
                                        </form>
                                    </div>
                                </div><!-- .card-preview -->
                            </div>
                        </div>
                    </div> <!-- nk-block -->
                </div>
            </div>
        </div>
    </div>
@endsection
