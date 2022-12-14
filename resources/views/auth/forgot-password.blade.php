@extends('layouts.auth')

@section('content')
    <div class="nk-split-content nk-block-area nk-block-area-column nk-auth-container bg-white w-lg-45">
        <div class="absolute-top-right d-lg-none p-3 p-sm-5">
            <a href="#" class="toggle btn btn-white btn-icon btn-light" data-target="athPromo"><em class="icon ni ni-info"></em></a>
        </div>
        <div class="nk-block nk-block-middle nk-auth-body">
            <div class="brand-logo pb-5">
                <a href="html/index.html" class="logo-link">
                    <img class="logo-light logo-img logo-img-lg" src="{{asset('/images/logo_2.svg')}}" alt="logo">
                    <img class="logo-dark logo-img logo-img-lg" src="{{asset('/images/logo_2.svg')}}" alt="logo-dark">
                </a>
            </div>
            <div class="nk-block-head">
                <div class="nk-block-head-content">
                    <h5 class="nk-block-title">Reset password</h5>
                    <div class="nk-block-des">
                        <p>If you forgot your password, well, then we’ll email you instructions to reset your password.</p>
                    </div>
                </div>
            </div><!-- .nk-block-head -->
            <form action="/reset">
                <div class="form-group">
                    <div class="form-label-group">
                        <label class="form-label" for="default-01">Email</label>
                    </div>
                    <div class="form-control-wrap">
                        <input type="text" class="form-control form-control-lg" id="default-01" placeholder="Enter your email address">
                    </div>
                </div>
                <div class="form-group">
                    <button class="btn btn-lg btn-primary btn-block">Send Reset Link</button>
                </div>
            </form><!-- form -->
            <div class="form-note-s2 pt-5">
                <a href="/login"><em class="icon ni ni-back-ios me-2"></em><strong>Return to login</strong></a>
            </div>
        </div><!-- .nk-block -->
        <div class="nk-block nk-auth-footer">
            <div class="mt-3">
                <p>&copy; 2022 Admin PPOB Marketplace. All Rights Reserved.</p>
            </div>
        </div><!-- .nk-block -->
    </div><!-- .nk-split-content -->
@endsection
