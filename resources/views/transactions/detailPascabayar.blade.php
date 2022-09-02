@extends('layouts.index')

@section('content')
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">PPOB</h3>
                                <nav>
                                    <ul class="breadcrumb">
                                        <li class="breadcrumb-item">Home</li>
                                        <li class="breadcrumb-item">Transaction</li>
                                        <li class="breadcrumb-item">PPOB</li>
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
                                        <h6 class="title">Detail PPOB Pascabayar</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="card-inner">
                                <div class="row gy-4">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="code">Code</label>
                                            <input type="text" class="form-control form-control-lg" id="code" value="PLNPOSTPAID" placeholder="" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="user_id">User ID</label>
                                            <input type="text" class="form-control form-control-lg" id="user_id" value="5f3c273d0ce633c7beccb936" placeholder="" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="name">Name</label>
                                            <input type="text" class="form-control form-control-lg" id="name" value="TOKO 13" placeholder="" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="destination">Destination</label>
                                            <input type="text" class="form-control form-control-lg" id="destination" value="514020313684" placeholder="" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label">Status</label>
                                            <select class="form-select js-select2" data-ui="lg" disabled>
                                                <option value="active">Active</option>
                                                <option value="not">Not Active</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="snref">SN / REF</label>
                                            <input type="text" class="form-control form-control-lg" id="snref" value="2625233164" placeholder="" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="price">Price</label>
                                            <input type="text" class="form-control form-control-lg" id="price" value="Rp 120.000" placeholder="" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-label" for="admin_fee">Admin Fee</label>
                                            <input type="text" class="form-control form-control-lg" id="admin_fee" value="Rp 3.000" placeholder="" readonly>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                            {{-- <li>
                                                <a href="#" class="btn btn-lg btn-primary">Save</a>
                                            </li> --}}
                                            <li>
                                                <a href="/transaction/ppob-pascabayar" class="btn btn-lg btn-light">Back</a>
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
