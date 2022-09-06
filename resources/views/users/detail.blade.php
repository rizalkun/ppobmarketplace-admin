@extends('layouts.index')

@section('content')
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">User</h3>
                                <nav>
                                    <ul class="breadcrumb">
                                        <li class="breadcrumb-item">Home</li>
                                        <li class="breadcrumb-item">Manage User</li>
                                        <li class="breadcrumb-item">User</li>
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
                                        <h6 class="title">Detail User</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="card-inner">
                                <div class="row gy-4">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="user_id">ID User</label>
                                            <input type="text" class="form-control" id="user_id" value="5076f653d403" placeholder="" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="name">Nama</label>
                                            <input type="text" class="form-control" id="name" value="Leslie Alexander" placeholder="" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="phone">Nomer Hp</label>
                                            <input type="text" class="form-control" id="phone" value="085155512345" placeholder="" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="username">Username</label>
                                            <input type="text" class="form-control" id="username" value="alexander" placeholder="" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="date">Tanggal Bergabung</label>
                                            <input type="text" class="form-control" id="date" value="30 Agustus 2022" placeholder="" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="transaction">Jumlah Transaksi</label>
                                            <input type="text" class="form-control" id="transaction" value="100" placeholder="" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Status</label>
                                            <span class="form-control"><span class="badge badge-dot bg-success">&nbsp;</span>Aktif</span>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <ul class="align-center justify-between flex-wrap flex-sm-nowrap gx-4 gy-2">
                                            <li>
                                                <a href="#" class="btn btn-lg btn-warning">Banned User</a>
                                            </li>
                                            <li>
                                                <a href="/admin/user/list" class="btn btn-lg btn-light">Kembali</a>
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
