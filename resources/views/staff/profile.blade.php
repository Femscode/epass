@extends('staff.master')
@section('header')
<link rel="stylesheet" type="text/css" href="plugins/dropify/dropify.min.css">
<link href="assets/css/users/account-setting.css" rel="stylesheet" type="text/css" />
@endsection
@section('content')

<!--  END SIDEBAR  -->

<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
   
    <div class="layout-px-spacing">                
                    
        <div class="account-settings-container layout-top-spacing">

            <div class="account-content">
                <div class="scrollspy-example" data-spy="scroll" data-target="#account-settings-scroll" data-offset="-100">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                            <form action='{{ route("update_profile") }}' method='post' enctype="multipart/form-data" class="section general-info">@csrf
                                <div class="info">
                                    <h6 class="">General Information</h6>
                                    <div class="row">
                                        <div class="col-lg-11 mx-auto">
                                            <div class="row">
                                                <div class="col-xl-2 col-lg-12 col-md-4">
                                                    <div class="upload mt-4 pr-md-4">
                                                        <input type="file" id="input-file-max-fs" class="dropify" name='image' data-max-file-size="2M" />
                                                        <p class="mt-2"><i class="flaticon-cloud-upload mr-1"></i> Upload Picture</p>
                                                    </div>
                                                </div>
                                                <div class="col-xl-10 col-lg-12 col-md-8 mt-md-0 mt-4">
                                                    <div class="form">
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <div class="form-group">
                                                                    <label for="fullName">Full Name</label>
                                                                    <input name='name' type="text" class="form-control mb-4" id="fullName" placeholder="Full Name" value="{{ $user->name }}">
                                                                </div>
                                                            </div>
                                                            {{-- <div class="col-sm-6">
                                                                <label class="dob-input">Gender</label>
                                                                <div class="d-sm-flex d-block">
                                                                  
                                                                    <div class="form-group mr-1">
                                                                        <select name='gender' required class="form-control" id="month">
                                                                            <option selected='{{ $user->gender ?? "" }}'>{{ $user->gender ?? "--not specified--" }}</option>
                                                                            <option value='Male'>Male</option>
                                                                            <option value='Female'>Female</option>
                                                                          
                                                                        </select>
                                                                    </div>
                                                                  
                                                                </div>
                                                            </div> --}}
                                                        </div>
                                                        {{-- <div class="form-group">
                                                            <label for="profession">Profession</label>
                                                            <input type="text" class="form-control mb-4" id="profession" placeholder="Designer" value="Web Developer">
                                                        </div> --}}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>

            

                        <div class="col-xl-12 col-lg-12 col-md-12 layout-spacing">
                            <div class="section contact">
                                <div class="info">
                                    <h5 class="">Contact</h5>
                                    <div class="row">
                                        <div class="col-md-11 mx-auto">
                                            <div class="row">
                                              
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="address">Address</label>
                                                        <input type="text" name='address' class="form-control mb-4" id="address" placeholder="Address" value="{{ $user->address ?? "" }}" >
                                                    </div>
                                                </div>
                                                {{-- <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="location">Location</label>
                                                        <input type="text" class="form-control mb-4" id="location" placeholder="Location">
                                                    </div>
                                                </div> --}}
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="phone">Phone</label>
                                                        <input type="number" name='phone' class="form-control mb-4" id="phone" placeholder="Phone number here" value="{{ $user->phone ?? "" }}">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="email">Email</label>
                                                        <input type="text" name='email' readonly class="form-control mb-4" id="email" placeholder="Write your email here" value="{{ $user->email }}">
                                                    </div>
                                                </div>                                    
                                                 {{-- <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="country">Country</label>
                                                        <select class="form-control" id="country">
                                                            <option>All Countries</option>
                                                            <option selected>United States</option>
                                                            <option>India</option>
                                                            <option>Japan</option>
                                                            <option>China</option>
                                                            <option>Brazil</option>
                                                            <option>Norway</option>
                                                            <option>Canada</option>
                                                        </select>
                                                    </div>
                                                </div> --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                            
                            
                            

                    </div>
                </div>
            </div>

            <div class="account-settings-footer">
                
                <div class="as-footer-container">
                    
                    <button id="multiple-reset" class="btn btn-primary">Reset All</button>
                    <div class="blockui-growl-message">
                        <i class="flaticon-double-check"></i>&nbsp; Settings Saved Successfully
                    </div>
                    <input id="multiple-messages" type='submit' class="btn btn-success" value='Save Changes'>
                    
                </div>
                
            </div>
        </form>
        </div>

    </div>
    <div class="footer-wrapper">
        <div class="footer-section f-section-1">
            <p class="">Copyright © 2021 <a target="_blank" href="https://designreset.com/">DesignReset</a>, All rights
                reserved.</p>
        </div>
        <div class="footer-section f-section-2">
            <p class="">Coded with <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-heart">
                    <path
                        d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                    </path>
                </svg></p>
        </div>
    </div>
</div>
<!--  END CONTENT AREA  -->

@endsection
@section('script')

<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<script src="assets/js/ie11fix/fn.fix-padStart.js"></script>
<script src="assets/js/apps/scrumboard.js"></script>
@endsection