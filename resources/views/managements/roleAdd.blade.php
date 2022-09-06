@extends('layouts.index')

@section('content')
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Role</h3>
                                <nav>
                                    <ul class="breadcrumb">
                                        <li class="breadcrumb-item">Home</li>
                                        <li class="breadcrumb-item">User Management</li>
                                        <li class="breadcrumb-item">Role</li>
                                        <li class="breadcrumb-item active"><a href="#">Tambah</a></li>
                                    </ul>
                                </nav>
                            </div><!-- .nk-block-head-content -->
                        </div><!-- .nk-block-between -->
                    </div><!-- .nk-block-head -->
                    <div class="nk-block g-gs">
                        <div class="row">
                            <div class="col-lg-8 col-xl-6">
                                <div class="card card-bordered card-preview">
                                    <div class="card-inner">
                                        <div class="card-title-group">
                                            <div class="card-title">
                                                <h6 class="title">Tambah Role</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-inner">
                                        <form action="/admin/user-management/role">
                                            <div class="form-group">
                                                <label class="form-label" for="role_name">Role</label>
                                                <input type="text" class="form-control" id="role_name" placeholder="Role Name">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Permission</label>
                                                <div class="row g-1 row-cols-1 row-cols-xxl-4 row-cols-xl-2 row-cols-md-2">
                                                    <div class="col custom-control custom-control-sm custom-checkbox custom-control-pro">
                                                        <input type="checkbox" class="custom-control-input" id="btnProduct">
                                                        <label class="custom-control-label w-100" for="btnProduct">Produk</label>
                                                    </div>
                                                    <div class="col custom-control custom-control-sm custom-checkbox custom-control-pro">
                                                        <input type="checkbox" class="custom-control-input" id="btnTransaction">
                                                        <label class="custom-control-label w-100" for="btnTransaction">Transaksi</label>
                                                    </div>
                                                    <div class="col custom-control custom-control-sm custom-checkbox custom-control-pro">
                                                        <input type="checkbox" class="custom-control-input" id="btnMitra">
                                                        <label class="custom-control-label w-100" for="btnMitra">Mitra</label>
                                                    </div>
                                                    <div class="col custom-control custom-control-sm custom-checkbox custom-control-pro">
                                                        <input type="checkbox" class="custom-control-input" id="btnReport">
                                                        <label class="custom-control-label w-100" for="btnReport">Laporan</label>
                                                    </div>
                                                    <div class="col custom-control custom-control-sm custom-checkbox custom-control-pro">
                                                        <input type="checkbox" class="custom-control-input" id="btnManage">
                                                        <label class="custom-control-label w-100" for="btnManage">Manage User</label>
                                                    </div>
                                                    <div class="col custom-control custom-control-sm custom-checkbox custom-control-pro">
                                                        <input type="checkbox" class="custom-control-input" id="btnUser">
                                                        <label class="custom-control-label w-100" for="btnUser">User Management</label>
                                                    </div>
                                                    <div class="col custom-control custom-control-sm custom-checkbox custom-control-pro">
                                                        <input type="checkbox" class="custom-control-input" id="btnSetting">
                                                        <label class="custom-control-label w-100" for="btnSetting">Setting</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label" for="description">Description</label>
                                                <div class="form-control-wrap">
                                                    <textarea class="form-control" id="description" placeholder="Description"></textarea>
                                                </div>
                                            </div>
                                            <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                                <li>
                                                    <button type="submit" class="btn btn-lg btn-primary">Tambah</button>
                                                </li>
                                                <li>
                                                    <a href="/admin/user-management/role" class="btn btn-lg btn-light">Batal</a>
                                                </li>
                                            </ul>
                                        </form>
                                    </div>
                                </div><!-- .card-preview -->
                            </div>
                        </div>
                    </div><!-- .nk-block -->
                </div>
            </div>
        </div>
    </div>
@endsection

