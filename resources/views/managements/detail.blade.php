@extends('layouts.index')

@section('content')
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Employee</h3>
                                <nav>
                                    <ul class="breadcrumb">
                                        <li class="breadcrumb-item">Home</li>
                                        <li class="breadcrumb-item">Employee Management</li>
                                        <li class="breadcrumb-item">Employee</li>
                                        <li class="breadcrumb-item active"><a href="#">Detail</a></li>
                                    </ul>
                                </nav>
                            </div><!-- .nk-block-head-content -->
                        </div><!-- .nk-block-between -->
                    </div><!-- .nk-block-head -->
                    <div class="nk-block nk-block-lg">
                        <div class="row g-gs">
                            <div class="col-xl-8">
                                <div class="card card-bordered card-preview">
                                    <div class="card-inner pb-0">
                                        <div class="card-title-group">
                                            <div class="card-title">
                                                <h6 class="title">Detail Employee</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-inner">
                                        <div class="form-group">
                                            <label class="form-label" for="employee_id">Employee ID</label>
                                            <input type="text" class="form-control" id="employee_id" value="123" placeholder="" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="employee_name">Employee</label>
                                            <input type="text" class="form-control" id="employee_name" value="Employee A" placeholder="" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="phone">Phone</label>
                                            <input type="text" class="form-control" id="phone" value="08124214832" placeholder="" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label" for="role">Role</label>
                                            <input type="text" class="form-control" id="role" value="Head Officer" placeholder="" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label class="form-label">Status</label>
                                            <select class="form-select js-select2" disabled>
                                                <option value="approved">Approved</option>
                                                <option value="pending">Pending</option>
                                                <option value="rejected">Rejected</option>
                                            </select>
                                        </div>
                                        <ul class="align-center flex-wrap flex-sm-nowrap gx-4 gy-2">
                                            <li>
                                                <a href="/employee/list" class="btn btn-lg btn-light">Back</a>
                                            </li>
                                        </ul>
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
