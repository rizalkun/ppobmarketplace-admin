@extends('layouts.index')

@section('content')
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Mitra</h3>
                                <nav>
                                    <ul class="breadcrumb">
                                        <li class="breadcrumb-item">Home</li>
                                        <li class="breadcrumb-item">Mitra</li>
                                        <li class="breadcrumb-item">List Mitra</li>
                                        <li class="breadcrumb-item active"><a href="#">Tambah</a></li>
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
                                                <h6 class="title">Tambah Mitra</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-inner">
                                        <form action="/admin/mitra/list">
                                            <div class="form-group">
                                                <label class="form-label" for="m_name">Nama Mitra</label>
                                                <input type="text" class="form-control" name="mitra_name" id="m_name" placeholder="Enter Mitra Name">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label" for="address">Alamat</label>
                                                <input type="text" class="form-control" name="address" id="address" placeholder="Enter Alamat">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label" for="phone">No HP</label>
                                                <input type="text" class="form-control" name="phone" id="phone" placeholder="Enter No HP">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Status</label>
                                                <select class="form-select js-select2" name="status">
                                                    <option>Select</option>
                                                    <option value="1">Aktif</option>
                                                    <option value="0">Tidak Aktif</option>
                                                </select>
                                            </div>
                                            <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                                <li>
                                                    <button type="submit" class="btn btn-lg btn-primary">Tambah</button>
                                                </li>
                                                <li>
                                                    <a href="/admin/mitra/list" class="btn btn-lg btn-light">Batal</a>
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
