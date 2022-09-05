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
                                        <li class="breadcrumb-item active"><a href="#">Tambah</a></li>
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
                                                    <h6 class="title">Tambah Produk</h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-inner">
                                            <div class="form-group">
                                                <label class="form-label" for="p_code">Kode Produk</label>
                                                <input type="text" class="form-control" id="p_code" name="product_code" placeholder="Enter Kode Produk">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label" for="p_name">Nama Produk</label>
                                                <input type="text" class="form-control" id="p_name" name="product_name" placeholder="Enter Nama Produk">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Kategori</label>
                                                <select class="form-select js-select2" name="kategori_id" data-search="on">
                                                    <option>Select Category</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Operator</label>
                                                <select class="form-select js-select2" name="operator_id" data-search="on">
                                                    <option>Select Operator</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Type</label>
                                                <select class="form-select js-select2" name="is_prabayar">
                                                    <option>Select Type</option>
                                                    <option value="true">Prabayar</option>
                                                    <option value="false">Pascabayar</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Status</label>
                                                <select class="form-select js-select2" name="status">
                                                    <option>Select Status</option>
                                                    <option value="1">Sukses</option>
                                                    <option value="0">Gagal</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label" for="description">Deskripsi</label>
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
                                            <h6 class="title">Masukkan Harga</h6>
                                        </div>
                                        <div class="card-inner">
                                            <div class="form-group">
                                                <label class="form-label" for="base_price">Base Price</label>
                                                <input type="text" class="form-control" id="base_price" name="base_price" placeholder="Base Price">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label" for="price">Price</label>
                                                <input type="text" class="form-control" id="price" name="price" placeholder="Price">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label" for="profit">Profit</label>
                                                <input type="text" class="form-control" id="profit" name="profit" placeholder="Profit">
                                            </div>
                                            <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                                <li>
                                                    <button type="submit" class="btn btn-lg btn-primary">Simpan</button>
                                                </li>
                                                <li>
                                                    <a href="/admin/product/list" class="btn btn-lg btn-light">Batal</a>
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
