@extends('layouts.index')

@section('content')
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Mutation</h3>
                                <nav>
                                    <ul class="breadcrumb">
                                        <li class="breadcrumb-item">Home</li>
                                        <li class="breadcrumb-item">Transaction</li>
                                        <li class="breadcrumb-item active"><a href="#">Mutation</a></li>
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
                                        <h6 class="title">History Mutasi</h6>
                                    </div>
                                    <div class="card-tools">
                                        <div class="toggle-wrap nk-block-tools-toggle">
                                            <a href="#" class="btn btn-icon btn-trigger toggle-expand me-n1" data-target="pageMenu"><em class="icon ni ni-more-v"></em></a>
                                            <div class="toggle-expand-content" data-content="pageMenu">
                                                <ul class="nk-block-tools g-3">
                                                    <li><a href="#" class="btn btn-sm btn-primary"><em class="icon ni ni-reload"></em><span>Refresh</span></a></li>
                                                    <li class="nk-block-tools-opt"><a href="#" class="btn btn-sm btn-success"><em class="icon ni ni-file-xls"></em><span>Export</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-inner position-relative card-tools-toggle py-0">
                                <div class="card-title">
                                    <div class="card-tools float-end">
                                        <ul class="btn-toolbar gx-1">
                                            <li>
                                                <a href="javascript:void(0)" class="btn btn-icon search-toggle toggle-search" data-target="search"><em class="icon ni ni-search"></em></a>
                                            </li><!-- li -->
                                            <li class="btn-toolbar-sep"></li><!-- li -->
                                            <li>
                                                <div class="dropdown">
                                                    <a href="javascript:void(0)" class="btn btn-trigger btn-icon dropdown-toggle" data-bs-toggle="dropdown">
                                                        <div class="dot dot-primary"></div>
                                                        <em class="icon ni ni-filter-alt"></em>
                                                    </a>
                                                    <div class="filter-wg dropdown-menu dropdown-menu-xl dropdown-menu-end">
                                                        <div class="dropdown-head">
                                                            <span class="sub-title dropdown-title">Filter Mutation</span>
                                                            <div class="dropdown">
                                                                <a href="javascript:void(0)" class="btn btn-sm btn-icon">
                                                                    <em class="icon ni ni-cross"></em>
                                                                </a>
                                                            </div>
                                                        </div>
                                                        <div class="dropdown-body dropdown-body-rg">
                                                            <div class="row gx-6 gy-3">
                                                                <div class="col-6">
                                                                    <div class="form-group" id="reportrange">
                                                                        <label class="overline-title overline-title-alt">Date</label>
                                                                        <div class="form-control-wrap">
                                                                            <div class="form-icon form-icon-left">
                                                                                <em class="icon ni ni-calendar"></em>
                                                                            </div>
                                                                            <span class="form-control text-nowrap text-ellipsis" id="date"></span>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-6">
                                                                    <div class="form-group">
                                                                        <label class="overline-title overline-title-alt">Type Mutasi</label>
                                                                        <select class="form-select js-select2">
                                                                            <option value="any">Any Role</option>
                                                                            <option value="investor">Investor</option>
                                                                            <option value="seller">Seller</option>
                                                                            <option value="buyer">Buyer</option>
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
                                                        <div class="dropdown-foot">
                                                            <a class="clickable" href="javascript:void(0)">Reset Filter</a>
                                                        </div>
                                                    </div><!-- .filter-wg -->
                                                </div><!-- .dropdown -->
                                            </li><!-- li -->
                                        </ul><!-- .btn-toolbar -->
                                    </div><!-- .card-tools -->
                                </div><!-- .card-title-group -->
                                <div class="card-search search-wrap" data-search="search">
                                    <div class="card-body">
                                        <div class="search-content">
                                            <a href="javascript:void(0)" class="search-back btn btn-icon toggle-search" data-target="search"><em class="icon ni ni-arrow-left"></em></a>
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
                                            <th>Date</th>
                                            <th>Nominal</th>
                                            <th>Balance Start</th>
                                            <th>Balance End</th>
                                            <th>Type</th>
                                            <th>Description</th>
                                            <th>Ref</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                ID: <br>
                                                <span class="fw-bold text-break">
                                                    5f3c273d0ce633c7beccb936
                                                </span> <br>
                                                Name: <br>
                                                <span class="fw-bold">
                                                    TOKO 13
                                                </span>
                                            </td>
                                            <td>13 June 2022</td>
                                            <td>Rp 10.000</td>
                                            <td>Rp 100.000</td>
                                            <td>Rp 90.000</td>
                                            <td><span class="badge badge-dim rounded-pill bg-outline-success">Transaction</span></td>
                                            <td>Trx S10.082138228031</td>
                                            <td>
                                                Ref:
                                                <span class="fw-bold text-break">
                                                    62a6bde67b49850b8fa6d0ed
                                                </span> <br>
                                                No:
                                                <span class="fw-bold text-break">
                                                    082138228031
                                                </span> <br>
                                                SN:
                                                <span class="fw-bold">
                                                    02720700001806537217
                                                </span>
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

@push('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-daterangepicker/3.0.5/daterangepicker.min.css" />
@endpush

@push('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-daterangepicker/3.0.5/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-daterangepicker/3.0.5/daterangepicker.min.js"></script>
    <script type="text/javascript">
        $(function() {

            var start = moment().subtract(29, 'days');
            var end = moment();

            function cb(start, end) {
                $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
            }

            $('#reportrange').daterangepicker({
                startDate: start,
                endDate: end,
                ranges: {
                'Today': [moment(), moment()],
                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                'This Month': [moment().startOf('month'), moment().endOf('month')],
                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                }
            }, cb);

            cb(start, end);

        });
    </script>
@endpush
