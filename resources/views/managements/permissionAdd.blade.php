@extends('layouts.index')

@section('content')
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Permission</h3>
                                <nav>
                                    <ul class="breadcrumb">
                                        <li class="breadcrumb-item">Home</li>
                                        <li class="breadcrumb-item">User Management</li>
                                        <li class="breadcrumb-item">Permission</li>
                                        <li class="breadcrumb-item active"><a href="#">Tambah</a></li>
                                    </ul>
                                </nav>
                            </div><!-- .nk-block-head-content -->
                        </div><!-- .nk-block-between -->
                    </div><!-- .nk-block-head -->
                    <div class="nk-block g-gs">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6">
                                <div class="card card-bordered card-preview">
                                    <div class="card-inner">
                                        <div class="card-title-group">
                                            <div class="card-title">
                                                <h6 class="title">Tambah Permission</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-inner">
                                        <form action="/admin/user-management/permission">
                                            <div class="form-group">
                                                <label class="form-label" for="permission_name">Nama</label>
                                                <input type="text" class="form-control" id="permission_name" placeholder="Permission Name">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label" for="description">Deskripsi</label>
                                                <div class="form-control-wrap">
                                                    <textarea class="form-control" id="description" placeholder="Description"></textarea>
                                                </div>
                                            </div>
                                            <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                                <li>
                                                    <button type="submit" class="btn btn-lg btn-primary">Tambah</button>
                                                </li>
                                                <li>
                                                    <a href="/admin/user-management/permission" class="btn btn-lg btn-light">Batal</a>
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

