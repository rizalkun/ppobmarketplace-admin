@extends('layouts.auth')

@section('content')
    <div class="nk-split-content nk-block-area nk-block-area-column nk-auth-container bg-white w-lg-45">
        <div class="absolute-top-right d-lg-none p-3 p-sm-5">
            <a href="#" class="toggle btn btn-white btn-icon btn-light" data-target="athPromo"><em class="icon ni ni-info"></em></a>
        </div>
        <div class="nk-block nk-block-middle nk-auth-body">
            <div class="brand-logo pb-5">
                <a href="html/index.html" class="logo-link">
                    <img class="logo-light logo-img logo-img-lg" src="./images/logo.png" srcset="./images/logo2x.png 2x" alt="logo">
                    <img class="logo-dark logo-img logo-img-lg" src="./images/logo-dark.png" srcset="./images/logo-dark2x.png 2x" alt="logo-dark">
                </a>
            </div>
            <div class="nk-block-head">
                <div class="nk-block-head-content">
                    <h5 class="nk-block-title">New password</h5>
                    <div class="nk-block-des">
                        <p>Creat your new password and make sure remember your new password.</p>
                    </div>
                </div>
            </div><!-- .nk-block-head -->
            <form action="/login">
                <div class="form-group">
                    <div class="form-label-group">
                        <label class="form-label" for="newPassword">New Password</label>
                    </div>
                    <div class="form-control-wrap">
                        <a tabindex="-1" href="#" class="form-icon form-icon-right passcode-switch lg" data-target="newPassword">
                            <em class="passcode-icon icon-show icon ni ni-eye"></em>
                            <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                        </a>
                        <input type="password" class="form-control form-control-lg" required id="newPassword" placeholder="Enter your new password">
                    </div>
                </div><!-- .form-group -->
                <div class="form-group">
                    <div class="form-label-group">
                        <label class="form-label" for="confirmPassword">Confirm Password</label>
                    </div>
                    <div class="form-control-wrap">
                        <a tabindex="-1" href="#" class="form-icon form-icon-right passcode-switch lg" data-target="confirmPassword">
                            <em class="passcode-icon icon-show icon ni ni-eye"></em>
                            <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                        </a>
                        <input type="password" class="form-control form-control-lg" required id="confirmPassword" placeholder="Confirm your new password">
                    </div>
                </div><!-- .form-group -->
                <div class="form-group">
                    <button class="btn btn-lg btn-primary btn-block">Update Password</button>
                </div>
            </form><!-- form -->
        </div><!-- .nk-block -->
        <div class="nk-block nk-auth-footer">
            <div class="mt-3">
                <p>&copy; 2022 PPOB Admin. All Rights Reserved.</p>
            </div>
        </div><!-- .nk-block -->
    </div><!-- .nk-split-content -->
@endsection
