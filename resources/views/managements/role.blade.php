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
                                        <li class="breadcrumb-item active"><a href="#">Role</a></li>
                                    </ul>
                                </nav>
                            </div><!-- .nk-block-head-content -->
                        </div><!-- .nk-block-between -->
                    </div><!-- .nk-block-head -->
                    <div class="nk-block">
                        <div class="card card-bordered card-preview">
                            <div class="card-inner">
                                <div class="card-title-group">
                                    <div class="card-title">
                                        <h6 class="title">List Role</h6>
                                    </div>
                                    <div class="card-tools">
                                        <div class="toggle-wrap nk-block-tools-toggle">
                                            <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                                            <div class="toggle-expand-content" data-content="pageMenu">
                                                <ul class="nk-block-tools g-3">
                                                    <li>
                                                        <a href="/admin/user-management/role/add" class="btn btn-sm btn-primary"><em class="icon ni ni-plus"></em><span class="d-none d-md-block">Tambah Role</span></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-inner">
                                <table class="datatable-init table table-hover">
                                    <thead class="align-middle text-nowrap">
                                        <tr>
                                            <th>ID</th>
                                            <th>Role</th>
                                            <th>Permission</th>
                                            <th>Description</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="align-middle">
                                        <tr>
                                            <td>1</td>
                                            <td>Superadmin</td>
                                            <td>
                                                <span class="badge badge-dim rounded-pill bg-outline-primary">Produk</span>
                                                <span class="badge badge-dim rounded-pill bg-outline-primary">Transaksi</span>
                                                <span class="badge badge-dim rounded-pill bg-outline-primary">Mitra</span>
                                                <span class="badge badge-dim rounded-pill bg-outline-primary">Laporan</span>
                                                <span class="badge badge-dim rounded-pill bg-outline-primary">Manage User</span>
                                                <span class="badge badge-dim rounded-pill bg-outline-primary">User Management</span>
                                                <span class="badge badge-dim rounded-pill bg-outline-primary">Setting</span>
                                            </td>
                                            <td>-</td>
                                            <td>
                                                <div class="dropdown">
                                                    <a class="dropdown-toggle btn-sm btn btn-primary btn-action" data-bs-toggle="dropdown"><span>Action</span><em class="icon ni ni-chevron-down"></em></a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <ul class="link-list-opt no-bdr">
                                                            <li><a href="/admin/user-management/role/edit" class="text-primary"><em class="icon ni ni-edit"></em><span>Edit</span></a></li>
                                                            <li><a href="#" class="text-danger"><em class="icon ni ni-trash-alt"></em><span>Delete</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Admin</td>
                                            <td>
                                                <span class="badge badge-dim rounded-pill bg-outline-primary">Produk</span>
                                                <span class="badge badge-dim rounded-pill bg-outline-primary">Transaksi</span>
                                                <span class="badge badge-dim rounded-pill bg-outline-primary">Mitra</span>
                                                <span class="badge badge-dim rounded-pill bg-outline-primary">Laporan</span>
                                                <span class="badge badge-dim rounded-pill bg-outline-primary">Manage User</span>
                                                <span class="badge badge-dim rounded-pill bg-outline-primary">User Management</span>
                                                <span class="badge badge-dim rounded-pill bg-outline-primary">Setting</span>
                                            </td>
                                            <td>-</td>
                                            <td>
                                                <div class="dropdown">
                                                    <a class="dropdown-toggle btn-sm btn btn-primary btn-action" data-bs-toggle="dropdown"><span>Action</span><em class="icon ni ni-chevron-down"></em></a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <ul class="link-list-opt no-bdr">
                                                            <li><a href="/admin/user-management/role/edit" class="text-primary"><em class="icon ni ni-edit"></em><span>Edit</span></a></li>
                                                            <li><a href="#" class="text-danger"><em class="icon ni ni-trash-alt"></em><span>Delete</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>User</td>
                                            <td>
                                                <span class="badge badge-dim rounded-pill bg-outline-primary">Produk</span>
                                                <span class="badge badge-dim rounded-pill bg-outline-primary">Transaksi</span>
                                                <span class="badge badge-dim rounded-pill bg-outline-primary">Mitra</span>
                                                <span class="badge badge-dim rounded-pill bg-outline-primary">Laporan</span>
                                                <span class="badge badge-dim rounded-pill bg-outline-primary">Manage User</span>
                                                <span class="badge badge-dim rounded-pill bg-outline-primary">User Management</span>
                                                <span class="badge badge-dim rounded-pill bg-outline-primary">Setting</span>
                                            </td>
                                            <td>-</td>
                                            <td>
                                                <div class="dropdown">
                                                    <a class="dropdown-toggle btn-sm btn btn-primary btn-action" data-bs-toggle="dropdown"><span>Action</span><em class="icon ni ni-chevron-down"></em></a>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <ul class="link-list-opt no-bdr">
                                                            <li><a href="/admin/user-management/role/edit" class="text-primary"><em class="icon ni ni-edit"></em><span>Edit</span></a></li>
                                                            <li><a href="#" class="text-danger"><em class="icon ni ni-trash-alt"></em><span>Delete</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div><!-- .card-preview -->
                    </div><!-- .nk-block -->
                </div>
            </div>
        </div>
    </div>
@endsection

