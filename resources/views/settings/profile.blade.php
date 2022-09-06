@extends('layouts.index')

@section('content')
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Profile</h3>
                                <nav>
                                    <ul class="breadcrumb">
                                        <li class="breadcrumb-item">Home</li>
                                        <li class="breadcrumb-item">Setting</li>
                                        <li class="breadcrumb-item active"><a href="#">Profile</a></li>
                                    </ul>
                                </nav>
                            </div><!-- .nk-block-head-content -->
                        </div><!-- .nk-block-between -->
                    </div><!-- .nk-block-head -->
                     <div class="nk-block">
                        <div class="row g-gs">
                            <div class="col-lg-6">
                                <div class="card card-bordered">
                                    <div class="card-inner">
                                        <h6 class="title">Profile</h6>
                                    </div>
                                    <div class="card-inner">
                                        <form action="/admin/setting/profile">
                                            @csrf
                                            <div class="form-group d-flex align-center">
                                                <div class="image-preview me-4">
                                                    <img src="/images/avatar/a-sm.jpg" class="user-avatar xl sq bg-transparent" alt="Image preview...">
                                                </div>
                                                <div class="form-control-wrap">
                                                    <a href="javascript:void(0)" class="btn btn-primary" id="btn-profile">Change Profile</a>
                                                    <div class="form-file" style="display: none">
                                                        <input type="file" class="form-file-input" id="profile-pic">
                                                        <label class="form-file-label text-truncate text-nowrap" for="profile-pic">Choose files</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label" for="User">User</label>
                                                <input type="text" class="form-control" name="name" id="User" value="Leslie Alexander">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label" for="phone">Phone</label>
                                                <input type="text" class="form-control" name="phone" id="phone" value="085155512345" placeholder="Enter Phone">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label" for="email">Email</label>
                                                <input type="email" class="form-control" name="email" id="email" value="email@address.com" placeholder="Enter Email">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label" for="create_at">Tanggal Bergabung</label>
                                                <input type="text" class="form-control" id="create_at" value="31 Agustus 2022" placeholder="Account Created" readonly>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label" for="address">Alamat</label>
                                                <input type="text" class="form-control" name="address" id="address" value="2972 Westheimer Rd. Santa Ana, Illinois 85486 " placeholder="Account Address">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Status</label>
                                                <span class="form-control"><span class="badge badge-dot bg-success">&nbsp;</span>Terverifikasi</span>
                                                {{-- <input type="text" class="form-control" id="status" @if ($data->status == 1) value="Terverifikasi" @elseif ($data->status != 1) value="Belum Terverifikasi" @endif readonly> --}}
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-lg btn-primary">Update Profile</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card card-bordered">
                                    <div class="card-inner bg-primary text-white py-2">
                                        <h6 class="title">Change Password</h6>
                                    </div>
                                    <div class="card-inner">
                                        <form action="/admin/setting/profile">
                                            <div class="form-group">
                                                <label for="old_password" class="form-label">Old Password</label>
                                                <input type="password" class="form-control" name="password" id="old_password" placeholder="password">
                                            </div>
                                            <div class="form-group">
                                                <label for="new_password" class="form-label">New Password</label>
                                                <input type="password" class="form-control" name="password" id="new_password" placeholder="password">
                                            </div>
                                            <div class="form-group">
                                                <label for="c_password" class="form-label">Confirm Password</label>
                                                <input type="password" class="form-control" name="password" id="c_password" placeholder="password">
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-lg btn-primary">Update Password</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- .nk-block -->
                </div>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script>
        $('#profile-pic').change(function() {
            $('.image-preview').html('');
                $.each(this.files, function() {
                    readURL(this);
                })
            });

        function readURL(file) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('.image-preview').append('<img src=' + e.target.result + ' class="user-avatar lg sq bg-transparent"/>');
            }

            reader.readAsDataURL(file);
        }
        $("#btn-profile").click(function() {
           $("#profile-pic").trigger('click');
        });
    </script>
@endpush
