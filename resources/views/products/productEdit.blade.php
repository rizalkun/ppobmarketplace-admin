@extends('layouts.index')

@section('content')
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Produk</h3>
                                <nav>
                                    <ul class="breadcrumb">
                                        <li class="breadcrumb-item">Home</li>
                                        <li class="breadcrumb-item">Produk</li>
                                        <li class="breadcrumb-item">Produk</li>
                                        <li class="breadcrumb-item active"><a href="#">Edit</a></li>
                                    </ul>
                                </nav>
                            </div><!-- .nk-block-head-content -->
                        </div><!-- .nk-block-between -->
                    </div><!-- .nk-block-head -->
                    <div class="nk-block nk-block-lg">
                        <form action="/admin/product/list">
                            <div class="row">
                                <div class="col-xl-6 col-lg-8">
                                    <div class="card card-bordered card-preview">
                                        <div class="card-inner">
                                            <div class="card-title-group">
                                                <div class="card-title">
                                                    <h6 class="title">Edit Produk</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-inner">
                                            <div class="form-group">
                                                <label class="form-label" for="p_code">Product Code</label>
                                                <input type="text" class="form-control" id="p_code" name="product_code" value="" placeholder="Enter Product Code">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label" for="p_name">Product Name</label>
                                                <input type="text" class="form-control" id="p_name" name="product_name" value="" placeholder="Enter Product Name">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Category</label>
                                                <select class="form-select js-select2" name="kategori_id" data-search="on">
                                                    <option value="1">1</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Operator</label>
                                                <select class="form-select js-select2" name="operator_id" data-search="on">
                                                    <option value="1">1</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Type</label>
                                                <select class="form-select js-select2" name="is_prabayar">
                                                    <option value="true">Prabayar</option>
                                                    <option value="false">Pascabayar</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Status</label>
                                                <select class="form-select js-select2" name="status">
                                                    <option value="0">Gagal</option>
                                                    <option value="1">Sukses</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label" for="description">Description</label>
                                                <div class="form-control-wrap">
                                                    <textarea class="form-control" id="description" name="description" placeholder="Description..."></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- .card-preview -->
                                </div>
                                <div class="col-xl-6 col-lg-4">
                                    <div class="card card-bordered card-preview">
                                        <div class="card-inner bg-primary text-white py-2">
                                            <h6 class="title">Edit Harga</h6>
                                        </div>
                                        <div class="card-inner">
                                            <div class="form-group">
                                                <label class="form-label" for="base_price">Base Price</label>
                                                <input type="text" class="form-control" id="base_price" name="base_price" value="" placeholder="Base Price">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label" for="price">Price</label>
                                                <input type="text" class="form-control" id="price" name="price" value="" placeholder="Price">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label" for="profit">Profit</label>
                                                <input type="text" class="form-control" id="profit" name="profit" value="" placeholder="Profit">
                                            </div>
                                            <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                                <li>
                                                    <button type="submit" class="btn btn-lg btn-primary">Update</button>
                                                </li>
                                                <li>
                                                    <a href="/admin/product/list" class="btn btn-lg btn-light">Cancel</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div><!-- .card-preview -->
                                </div>
                            </div>
                        </form>
                    </div> <!-- nk-block -->
                </div>
            </div>
        </div>
    </div>
@endsection
