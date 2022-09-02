@extends('layouts.index')

@section('content')
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Redeem Point</h3>
                                <nav>
                                    <ul class="breadcrumb">
                                        <li class="breadcrumb-item">Home</li>
                                        <li class="breadcrumb-item">Transaction</li>
                                        <li class="breadcrumb-item active"><a href="#">Redeem Point</a></li>
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
                                        <h6 class="title">Redeem Point Transaction</h6>
                                    </div>
                                    <div class="card-tools">
                                        <a href="#" class="btn btn-sm btn-primary"><em class="icon ni ni-reload"></em><span>Refresh</span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-inner position-relative card-tools-toggle py-0">
                                <div class="card-title">
                                    <div class="card-tools float-end">
                                        <ul class="btn-toolbar gx-1">
                                            <li>
                                                <a href="#" class="btn btn-icon search-toggle toggle-search" data-target="search"><em class="icon ni ni-search"></em>Search</a>
                                            </li><!-- li -->
                                        </ul><!-- .btn-toolbar -->
                                    </div><!-- .card-tools -->
                                </div><!-- .card-title-group -->
                                <div class="card-search search-wrap" data-search="search">
                                    <div class="card-body">
                                        <div class="search-content">
                                            <a href="#" class="search-back btn btn-icon toggle-search" data-target="search"><em class="icon ni ni-arrow-left"></em></a>
                                            <input type="text" class="form-control border-transparent form-focus-none" placeholder="Search...">
                                            <button class="search-submit btn btn-icon"><em class="icon ni ni-search"></em></button>
                                        </div>
                                    </div>
                                </div><!-- .card-search -->
                            </div><!-- .card-inner -->
                            <div class="card-inner">
                                <table class="datatable-init table">
                                    <thead class="align-middle">
                                        <tr>
                                            <th>Member</th>
                                            <th>Reward</th>
                                            <th>Point</th>
                                            <th>Date</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody class="align-middle">
                                        <tr>
                                            <td>
                                                ID:
                                                <span class="fw-bold">
                                                    5f3c273d0ce633c7beccb936
                                                </span> <br>
                                                Name:
                                                <span class="fw-bold">
                                                    TOKO 13
                                                </span>
                                            </td>
                                            <td>Balance 30K</td>
                                            <td>1000</td>
                                            <td>13 Juni 2022 15:00:00</td>
                                            <td><span class="badge badge-dim rounded-pill bg-outline-success">Sent</span></td>
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