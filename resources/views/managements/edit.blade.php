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
                                        <li class="breadcrumb-item">User Management</li>
                                        <li class="breadcrumb-item">User</li>
                                        <li class="breadcrumb-item active"><a href="#">Edit</a></li>
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
                                                <h6 class="title">Edit User</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-inner">
                                        <form action="/admin/user-management/user">
                                            <div class="form-group">
                                                <label class="form-label" for="username">Username</label>
                                                <input type="text" class="form-control" id="username" value="alexander" placeholder="Username">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label" for="name">Nama</label>
                                                <input type="text" class="form-control" id="name" value="Leslie Alexander" placeholder="Nama">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label" for="phone">Nomor HP</label>
                                                <input type="text" class="form-control" id="phone" value="085155512345" placeholder="Nomor HP">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Role</label>
                                                <select class="form-select js-select2">
                                                    <option value="1" >Superadmin</option>
                                                    <option value="2" >Admin</option>
                                                    <option value="3" >User</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Status</label>
                                                <select class="form-select js-select2">
                                                    <option value="1" >Aktif</option>
                                                    <option value="0" >Tidak Aktif</option>
                                                </select>
                                            </div>
                                            <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                                <li>
                                                    <button type="submit" class="btn btn-lg btn-primary">Update</button>
                                                </li>
                                                <li>
                                                    <a href="/admin/user-management/user" class="btn btn-lg btn-light">Batal</a>
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

