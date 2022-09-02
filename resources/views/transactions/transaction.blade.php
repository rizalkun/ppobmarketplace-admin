@extends('layouts.index')

@section('content')
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Transaction</h3>
                                <nav>
                                    <ul class="breadcrumb">
                                        <li class="breadcrumb-item">Home</li>
                                        <li class="breadcrumb-item">Transaction</li>
                                        <li class="breadcrumb-item active"><a href="#">Transaction</a></li>
                                    </ul>
                                </nav>
                            </div><!-- .nk-block-head-content -->
                        </div><!-- .nk-block-between -->
                    </div><!-- .nk-block-head -->
                    <div class="nk-block nk-block-lg">
                        <ul class="card flex-md-row nav nav-tabs mt-n2 text-center">
                            <li class="col nav-item">
                                <a class="nav-link d-block active" data-bs-toggle="tab" href="#tabHistoryTransaction">History Transaction</a>
                            </li>
                            <li class="col nav-item">
                                <a class="nav-link d-block" data-bs-toggle="tab" href="#tabCommand">Command</a>
                            </li>
                            <li class="col nav-item">
                                <a class="nav-link d-block" data-bs-toggle="tab" href="#tabResponse">Response</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tabHistoryTransaction">
                                <div class="card card-bordered card-preview">
                                    <div class="card-inner">
                                        <div class="card-title-group">
                                            <div class="card-title">
                                                <h6 class="title">History Transaction</h6>
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
                                                        <a href="#" class="btn btn-icon search-toggle toggle-search" data-target="search"><em class="icon ni ni-search"></em></a>
                                                    </li><!-- li -->
                                                    <li class="btn-toolbar-sep"></li><!-- li -->
                                                    <li>
                                                        <div class="toggle-wrap">
                                                            <a href="#" class="btn btn-icon btn-trigger toggle" data-target="cardTools"><em class="icon ni ni-menu-right"></em></a>
                                                            <div class="toggle-content" data-content="cardTools">
                                                                <ul class="btn-toolbar gx-1">
                                                                    <li class="toggle-close">
                                                                        <a href="#" class="btn btn-icon btn-trigger toggle" data-target="cardTools"><em class="icon ni ni-arrow-left"></em></a>
                                                                    </li><!-- li -->
                                                                    <li>
                                                                        <div class="dropdown">
                                                                            <a href="#" class="btn btn-trigger btn-icon dropdown-toggle" data-bs-toggle="dropdown">
                                                                                <div class="dot dot-primary"></div>
                                                                                <em class="icon ni ni-filter-alt"></em>
                                                                            </a>
                                                                            <div class="filter-wg dropdown-menu dropdown-menu-xl dropdown-menu-end">
                                                                                <div class="dropdown-head">
                                                                                    <span class="sub-title dropdown-title">Filter Mutation</span>
                                                                                    <div class="dropdown">
                                                                                        <a href="#" class="btn btn-sm btn-icon">
                                                                                            <em class="icon ni ni-cross"></em>
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="dropdown-body dropdown-body-rg">
                                                                                    <div class="row gx-6 gy-3">
                                                                                        <div class="col-6">
                                                                                            <div class="form-group">
                                                                                                <label class="overline-title overline-title-alt">Date Start</label>
                                                                                                <div class="form-control-wrap">
                                                                                                    <div class="form-icon form-icon-left">
                                                                                                        <em class="icon ni ni-calendar"></em>
                                                                                                    </div>
                                                                                                    <input type="text" class="form-control date-picker" data-date-format="dd/mm/yyyy">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-6">
                                                                                            <div class="form-group">
                                                                                                <label class="overline-title overline-title-alt">Date End</label>
                                                                                                <div class="form-control-wrap">
                                                                                                    <div class="form-icon form-icon-left">
                                                                                                        <em class="icon ni ni-calendar"></em>
                                                                                                    </div>
                                                                                                    <input type="text" class="form-control date-picker" data-date-format="dd/mm/yyyy">
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
                                                                                    <a class="clickable" href="#">Reset Filter</a>
                                                                                </div>
                                                                            </div><!-- .filter-wg -->
                                                                        </div><!-- .dropdown -->
                                                                    </li><!-- li -->
                                                                </ul><!-- .btn-toolbar -->
                                                            </div><!-- .toggle-content -->
                                                        </div><!-- .toggle-wrap -->
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
                                                    <th>Code</th>
                                                    <th>Member</th>
                                                    <th>Number</th>
                                                    <th>Status</th>
                                                    <th>SN/Ref</th>
                                                    <th>Module</th>
                                                    <th>Sell</th>
                                                    <th>Buy</th>
                                                    <th>Profit</th>
                                                    <th>Komisi</th>
                                                    <th>Balance Start</th>
                                                    <th>Balance End</th>
                                                    <th>Supplier</th>
                                                </tr>
                                            </thead>
                                            <tbody class="align-middle">
                                                <tr>
                                                    <td>I5</td>
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
                                                    <td>085755292480</td>
                                                    <td><span class="badge badge-dim rounded-pill bg-outline-success">Success</span></td>
                                                    <td>
                                                        <div class="form-group">
                                                            <div class="form-control-wrap">
                                                                <div class="form-icon form-icon-right">
                                                                    <em class="icon ni ni-copy"></em>
                                                                </div>
                                                                <input id="copyTarget" type="text" class="form-control text-truncate copied" value="0272000000">
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>Application</td>
                                                    <td>Rp 20.000</td>
                                                    <td>Rp 19.000</td>
                                                    <td>Rp 1.000</td>
                                                    <td>Rp 500</td>
                                                    <td>Rp 100.000</td>
                                                    <td>Rp 80.000</td>
                                                    <td>PAYUNI</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div><!-- .card-preview -->
                            </div>
                            <div class="tab-pane" id="tabCommand">
                                <div class="card card-bordered card-preview">
                                    <div class="card-inner">
                                        <div class="card-title-group">
                                            <div class="card-title">
                                                <h6 class="title">Message Command</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-inner position-relative card-tools-toggle py-0">
                                        <div class="card-title">
                                            <div class="card-tools float-end">
                                                <ul class="btn-toolbar gx-1">
                                                    <li>
                                                        <a href="#" class="btn btn-icon search-toggle toggle-search" data-target="search"><em class="icon ni ni-search"></em></a>
                                                    </li><!-- li -->
                                                    <li class="btn-toolbar-sep"></li><!-- li -->
                                                    <li>
                                                        <div class="toggle-wrap">
                                                            <a href="#" class="btn btn-icon btn-trigger toggle" data-target="cardTools"><em class="icon ni ni-menu-right"></em></a>
                                                            <div class="toggle-content" data-content="cardTools">
                                                                <ul class="btn-toolbar gx-1">
                                                                    <li class="toggle-close">
                                                                        <a href="#" class="btn btn-icon btn-trigger toggle" data-target="cardTools"><em class="icon ni ni-arrow-left"></em></a>
                                                                    </li><!-- li -->
                                                                    <li>
                                                                        <div class="dropdown">
                                                                            <a href="#" class="btn btn-trigger btn-icon dropdown-toggle" data-bs-toggle="dropdown">
                                                                                <div class="dot dot-primary"></div>
                                                                                <em class="icon ni ni-filter-alt"></em>
                                                                            </a>
                                                                            <div class="filter-wg dropdown-menu dropdown-menu-xl dropdown-menu-end">
                                                                                <div class="dropdown-head">
                                                                                    <span class="sub-title dropdown-title">Filter Message Command</span>
                                                                                    <div class="dropdown">
                                                                                        <a href="#" class="btn btn-sm btn-icon">
                                                                                            <em class="icon ni ni-cross"></em>
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="dropdown-body dropdown-body-rg">
                                                                                    <div class="row gx-6 gy-3">
                                                                                        <div class="col-6">
                                                                                            <div class="form-group">
                                                                                                <label class="overline-title overline-title-alt">Date Start</label>
                                                                                                <div class="form-control-wrap">
                                                                                                    <div class="form-icon form-icon-left">
                                                                                                        <em class="icon ni ni-calendar"></em>
                                                                                                    </div>
                                                                                                    <input type="text" class="form-control date-picker" data-date-format="dd/mm/yyyy">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-6">
                                                                                            <div class="form-group">
                                                                                                <label class="overline-title overline-title-alt">Date End</label>
                                                                                                <div class="form-control-wrap">
                                                                                                    <div class="form-icon form-icon-left">
                                                                                                        <em class="icon ni ni-calendar"></em>
                                                                                                    </div>
                                                                                                    <input type="text" class="form-control date-picker" data-date-format="dd/mm/yyyy">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-6">
                                                                                            <div class="form-group">
                                                                                                <label class="overline-title overline-title-alt">Supplier</label>
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
                                                                                    <a class="clickable" href="#">Reset Filter</a>
                                                                                </div>
                                                                            </div><!-- .filter-wg -->
                                                                        </div><!-- .dropdown -->
                                                                    </li><!-- li -->
                                                                </ul><!-- .btn-toolbar -->
                                                            </div><!-- .toggle-content -->
                                                        </div><!-- .toggle-wrap -->
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
                                                    <th>Date</th>
                                                    <th>Sender</th>
                                                    <th>Receiver</th>
                                                    <th>Type</th>
                                                    <th>Message</th>
                                                    <th>Status</th>
                                                </tr>
                                            </thead>
                                            <tbody class="align-middle">
                                                <tr>
                                                    <td>13 June 2022 14:30:00</td>
                                                    <td>paysri@xmpp.h2h.co.id</td>
                                                    <td>cloud@xmpp.h2h.co.id</td>
                                                    <td>Jabber</td>
                                                    <td>I5.1.085733398123.000</td>
                                                    <td><span class="badge badge-dim rounded-pill bg-outline-success">Sent</span></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div><!-- .card-preview -->
                            </div>
                            <div class="tab-pane" id="tabResponse">
                                <div class="card card-bordered card-preview">
                                    <div class="card-inner">
                                        <div class="card-title-group">
                                            <div class="card-title">
                                                <h6 class="title">Response Message Biller</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-inner position-relative card-tools-toggle py-0">
                                        <div class="card-title">
                                            <div class="card-tools float-end">
                                                <ul class="btn-toolbar gx-1">
                                                    <li>
                                                        <a href="#" class="btn btn-icon search-toggle toggle-search" data-target="search"><em class="icon ni ni-search"></em></a>
                                                    </li><!-- li -->
                                                    <li class="btn-toolbar-sep"></li><!-- li -->
                                                    <li>
                                                        <div class="toggle-wrap">
                                                            <a href="#" class="btn btn-icon btn-trigger toggle" data-target="cardTools"><em class="icon ni ni-menu-right"></em></a>
                                                            <div class="toggle-content" data-content="cardTools">
                                                                <ul class="btn-toolbar gx-1">
                                                                    <li class="toggle-close">
                                                                        <a href="#" class="btn btn-icon btn-trigger toggle" data-target="cardTools"><em class="icon ni ni-arrow-left"></em></a>
                                                                    </li><!-- li -->
                                                                    <li>
                                                                        <div class="dropdown">
                                                                            <a href="#" class="btn btn-trigger btn-icon dropdown-toggle" data-bs-toggle="dropdown">
                                                                                <div class="dot dot-primary"></div>
                                                                                <em class="icon ni ni-filter-alt"></em>
                                                                            </a>
                                                                            <div class="filter-wg dropdown-menu dropdown-menu-xl dropdown-menu-end">
                                                                                <div class="dropdown-head">
                                                                                    <span class="sub-title dropdown-title">Filter Transaction Responese</span>
                                                                                    <div class="dropdown">
                                                                                        <a href="#" class="btn btn-sm btn-icon">
                                                                                            <em class="icon ni ni-cross"></em>
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="dropdown-body dropdown-body-rg">
                                                                                    <div class="row gx-6 gy-3">
                                                                                        <div class="col-6">
                                                                                            <div class="form-group">
                                                                                                <label class="overline-title overline-title-alt">Date Start</label>
                                                                                                <div class="form-control-wrap">
                                                                                                    <div class="form-icon form-icon-left">
                                                                                                        <em class="icon ni ni-calendar"></em>
                                                                                                    </div>
                                                                                                    <input type="text" class="form-control date-picker" data-date-format="dd/mm/yyyy">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-6">
                                                                                            <div class="form-group">
                                                                                                <label class="overline-title overline-title-alt">Date End</label>
                                                                                                <div class="form-control-wrap">
                                                                                                    <div class="form-icon form-icon-left">
                                                                                                        <em class="icon ni ni-calendar"></em>
                                                                                                    </div>
                                                                                                    <input type="text" class="form-control date-picker" data-date-format="dd/mm/yyyy">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="col-6">
                                                                                            <div class="form-group">
                                                                                                <label class="overline-title overline-title-alt">Supplier</label>
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
                                                                                    <a class="clickable" href="#">Reset Filter</a>
                                                                                </div>
                                                                            </div><!-- .filter-wg -->
                                                                        </div><!-- .dropdown -->
                                                                    </li><!-- li -->
                                                                </ul><!-- .btn-toolbar -->
                                                            </div><!-- .toggle-content -->
                                                        </div><!-- .toggle-wrap -->
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
                                                    <th>Date</th>
                                                    <th>Supplier</th>
                                                    <th>Sender</th>
                                                    <th>Receiver</th>
                                                    <th>Message</th>
                                                </tr>
                                            </thead>
                                            <tbody class="align-middle">
                                                <tr>
                                                    <td>13 June 2022 14:30:00</td>
                                                    <td>PAYUNI</td>
                                                    <td>paysri@xmpp.h2h.co.id</td>
                                                    <td>cloud@xmpp.h2h.co.id</td>
                                                    <td>I5.1.085733398123.000</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div><!-- .card-preview -->
                            </div>
                        </div>
                    </div> <!-- nk-block -->
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script src="{{ asset('/assets/js/example-toastr.js')}}"></script>
    <script>
        (function () {
            "use strict";

            function copyToClipboard(elem) {
                var target = elem;

                // select the content
                var currentFocus = document.activeElement;

                target.focus();
                target.setSelectionRange(0, target.value.length);

                // copy the selection
                var succeed;

                try {
                succeed = document.execCommand("copy");
                } catch (e) {
                console.warn(e);

                succeed = false;
                }

                // Restore original focus
                if (currentFocus && typeof currentFocus.focus === "function") {
                currentFocus.focus();
                }

                if (succeed) {
                    // $(".copied").animate({ top: -25, opacity: 0 }, 700, function () {
                    //     $(this).css({ top: 0, opacity: 1 });
                    // });
                      $('.copied').on("click", function (e) {
                        e.preventDefault();
                        toastr.clear();
                        NioApp.Toast('Copy SN/Ref', 'info');
                    });
                }

                return succeed;
            }

            $("#copyButton, #copyTarget").on("click", function () {
                copyToClipboard(document.getElementById("copyTarget"));
            });
        })();
    </script>
@endpush
