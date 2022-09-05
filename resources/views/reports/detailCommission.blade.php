@extends('layouts.index')

@section('content')
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Komisi</h3>
                                <nav>
                                    <ul class="breadcrumb">
                                        <li class="breadcrumb-item">Home</li>
                                        <li class="breadcrumb-item">Laporan</li>
                                        <li class="breadcrumb-item">Komisi</li>
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
                                        <h6 class="title">Detail Komisi</h6>
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
                                            <label class="form-label" for="balance">Saldo User</label>
                                            <input type="text" class="form-control" id="balance" value="Rp 1.234.567" placeholder="" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="total_transaction">Total Transaksi</label>
                                            <input type="text" class="form-control" id="total_transaction" value="Rp 234.567" placeholder="" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="commission">Komisi</label>
                                            <input type="text" class="form-control" id="commission" value="Rp 123.456" placeholder="" readonly>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                            <li>
                                                <a href="/admin/report/commission" class="btn btn-lg btn-light">Kembali</a>
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
