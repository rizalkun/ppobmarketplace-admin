@extends('layouts.index')

@section('content')
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">PPOB</h3>
                                <nav>
                                    <ul class="breadcrumb">
                                        <li class="breadcrumb-item">Home</li>
                                        <li class="breadcrumb-item">Transaksi</li>
                                        <li class="breadcrumb-item">PPOB</li>
                                        <li class="breadcrumb-item active"><a href="#">Detail</a></li>
                                    </ul>
                                </nav>
                            </div><!-- .nk-block-head-content -->
                        </div><!-- .nk-block-between -->
                    </div><!-- .nk-block-head -->
                    <div class="nk-block nk-block-lg">
                        <div class="card card-bordered card-preview">
                            <div class="card-inner">
                                <div class="card-title-group">
                                    <div class="card-title">
                                        <h6 class="title">Detail PPOB</h6>
                                    </div>
                                    <div class="card-tools">
                                        <a href="#" class="btn btn-icon btn-outline-primary"><em class="icon ni ni-printer"></em></a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-inner">
                                <div class="row gy-4">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="name">Username</label>
                                            <input type="text" class="form-control" id="name" value="alexander" placeholder="" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="p_name">Nama Produk</label>
                                            <input type="text" class="form-control" id="p_name" value="PLN Pascabayar" placeholder="" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="id_pel">ID Pelanggan</label>
                                            <input type="text" class="form-control" id="id_pel" value="123456700012" placeholder="" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="Tagihan">Tagihan</label>
                                            <input type="text" class="form-control" id="Tagihan" value="Rp 120.456" placeholder="" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="admin">Biaya Admin</label>
                                            <input type="text" class="form-control" id="admin" value="Rp 3.000" placeholder="" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="total_tagihan">Total Tagihan</label>
                                            <input type="text" class="form-control" id="total_tagihan" value="Rp 123.456" placeholder="" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="metode">Metode Pembayaran</label>
                                            <input type="text" class="form-control" id="metode" value="Saldo" placeholder="" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="date">Tanggal Transaksi</label>
                                            <input type="text" class="form-control" id="date" value="08 June 2022 12:20" placeholder="" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Status</label>
                                            <span class="form-control"><span class="badge badge-dot bg-success">&nbsp;</span>Sukses</span>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="description">Deskripsi</label>
                                            <div class="form-control-wrap">
                                                <textarea class="form-control" id="description" placeholder="Description..." readonly>Transaksi Success</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <ul class="align-center justify-between flex-wrap flex-sm-nowrap gx-4 gy-2">
                                            <li>
                                                <a href="#" class="btn btn-lg btn-primary">Refund Saldo</a>
                                            </li>
                                            <li>
                                                <a href="/admin/transaction/deposit" class="btn btn-lg btn-light">Kembali</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div><!-- .card-preview -->
                    </div> <!-- nk-block -->
                </div>
            </div>
        </div>
    </div>
@endsection
