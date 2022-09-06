@extends('layouts.index')

@section('content')
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Saldo Masuk</h3>
                                <nav>
                                    <ul class="breadcrumb">
                                        <li class="breadcrumb-item">Home</li>
                                        <li class="breadcrumb-item">Laporan</li>
                                        <li class="breadcrumb-item">Saldo Masuk</li>
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
                                        <h6 class="title">Detail Saldo Masuk</h6>
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
                                            <label class="form-label" for="transaction">Transaksi</label>
                                            <input type="text" class="form-control" id="transaction" value="Deposit Saldo" placeholder="" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="exp_date">Tanggal Expired</label>
                                            <input type="text" class="form-control" id="exp_date" value="08 June 2022 12:20" placeholder="" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="nominal">Nominal</label>
                                            <input type="text" class="form-control" id="nominal" value="Rp 1.000.493" placeholder="" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="metode">Metode Pembayaran</label>
                                            <input type="text" class="form-control" id="metode" value="Rp 1.000.493" placeholder="" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="bank">Bank Tujuan</label>
                                            <input type="text" class="form-control" id="bank" value="Rp 1.000.493" placeholder="" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Status</label>
                                            <span class="form-control"><span class="badge badge-dot bg-success">&nbsp;</span>Sukses</span>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="description">Description</label>
                                            <div class="form-control-wrap">
                                                <textarea class="form-control" id="description" placeholder="Description..." readonly>Deposite Success</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                            <li>
                                                <a href="/admin/report/balance-in" class="btn btn-lg btn-light">Kembali</a>
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
