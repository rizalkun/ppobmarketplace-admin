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
                                        <li class="breadcrumb-item active"><a href="">User</a></li>
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
                                        <h6 class="title">User</h6>
                                    </div>
                                    <div class="card-tools me-n1">
                                        <ul class="btn-toolbar gx-1">
                                            <li>
                                                <div class="dropdown">
                                                    <a href="javascript:void(0)" class="btn btn-trigger btn-icon dropdown-toggle" data-bs-toggle="dropdown">
                                                        <div class="dot dot-primary"></div>
                                                        <em class="icon ni ni-filter-alt"></em>
                                                    </a>
                                                    <div class="filter-wg dropdown-menu dropdown-menu-xl dropdown-menu-end">
                                                        <div class="dropdown-head bg-primary">
                                                            <span class="sub-title dropdown-title text-white">Filter User</span>
                                                        </div>
                                                        <div class="dropdown-body dropdown-body-rg">
                                                            <div class="row gx-6 gy-3">
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <label class="overline-title overline-title-alt">Status</label>
                                                                        <select class="form-select js-select2">
                                                                            <option value="any">All</option>
                                                                            <option value="1">Aktif</option>
                                                                            <option value="0">Tidak Aktif</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="col-12">
                                                                    <div class="form-group">
                                                                        <button type="button" class="btn btn-secondary">Filter</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="dropdown-foot between">
                                                            <a class="clickable" href="javascript:void(0)">Reset Filter</a>
                                                        </div>
                                                    </div><!-- .filter-wg -->
                                                </div><!-- .dropdown -->
                                            </li><!-- li -->
                                        </ul><!-- .btn-toolbar -->
                                    </div><!-- .card-tools -->
                                </div>
                            </div>
                            <div class="card-inner">
                                <table class="datatable-category table">
                                    <thead class="align-middle">
                                        <tr>
                                            <th>ID</th>
                                            <th>ID User</th>
                                            <th>Nama</th>
                                            <th>Nomer Hp</th>
                                            <th>Username</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody class="align-middle">
                                        <tr>
                                            <td>1</td>
                                            <td>5076f653d403</td>
                                            <td>Leslie Alexander</td>
                                            <td>085155512345</td>
                                            <td>alexander</td>
                                            <td><span class="badge badge-dim rounded-pill bg-outline-success">Aktif</span></td>
                                            <td>
                                                <li>
                                                    <div class="dropdown">
                                                        <a class="dropdown-toggle btn-sm btn btn-primary btn-action" data-bs-toggle="dropdown"><span>Action</span><em class="icon ni ni-chevron-down"></em></a>
                                                        <div class="dropdown-menu dropdown-menu-end">
                                                            <ul class="link-list-opt no-bdr">
                                                                <li><a href="/admin/user/list/detail" class="text-info"><em class="icon ni ni-eye"></em><span>Detail</span></a></li>
                                                                <li><a href="#" class="text-danger"><em class="icon ni ni-trash-alt"></em><span>Delete</span></a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div><!-- .card-preview -->
                    </div> <!-- nk-block -->
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment.min.js"></script>
    <script>
        !function (NioApp, $){
            NioApp.DataTable.init = function () {
                NioApp.DataTable('.datatable-category', {
                    responsive: {
                        details: true
                    },
                    language: {
                        search: "",
                        searchPlaceholder: "Search ...",
                        lengthMenu: "<span class='d-none d-sm-inline-block'>Show</span><div class='form-control-select'> _MENU_ </div>",
                        info: "_START_ -_END_ of _TOTAL_",
                        infoEmpty: "0",
                        infoFiltered: "( Total _MAX_  )",
                        paginate: {
                            "first": "First",
                            "last": "Last",
                            "next": "Next",
                            "previous": "Prev"
                        },
                        zeroRecords: '<div class="text-center p-4">' + '<img class="mb-3" src="/images/gfx/no_data.svg" alt="Image Description" style="width: 80px;">' + '<p class="mb-0">No data to show</p>' + '</div>',
                    },
                });
            };
            return NioApp;
        }(NioApp, jQuery);
    </script>
@endpush
