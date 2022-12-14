@extends('staff.master')
@section('header')
<link href="assets/css/apps/scrumboard.css" rel="stylesheet" type="text/css" />
<link href="assets/css/forms/theme-checkbox-radio.css" rel="stylesheet" type="text/css">

@endsection
@section('content')

    <!--  END SIDEBAR  -->

    <!--  BEGIN CONTENT AREA  -->
    <div id="content" class="main-content">
        <div class="layout-px-spacing">

            <div class="row layout-spacing">

                <!-- Content -->
                <div class="col-xl-4 col-lg-6 col-md-5 col-sm-12 layout-top-spacing">

                    <div class="user-profile layout-spacing">
                        <div class="widget-content widget-content-area">
                            <div class="d-flex justify-content-between">
                                <h3 class="">CheckIn Details</h3>
                                <a href="/editprofile" class="mt-2 edit-profile"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-3"><path d="M12 20h9"></path><path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path></svg></a>
                            </div>
                            <div class="ml-2 row" style="d-flex font-size:0px;background:transparent;color:#000C40;">
                                <a id="qrbtn" style="border-radius:0px;background:#4361ee" class="btn btn-secondary m-0">QRCode</a>
                                <a id="imgbtn" style="border-radius:0px;background:grey;color:#000C40" class="btn btn-secondary m-0">Image</a>
                              </div>

                            <div class="text-center user-info">
                                {{-- {!! QrCode::size(200)->generate('https://ctstake.com') !!} --}}
                                <div id='qrdiv'>
                                {!! QrCode::size(200)->generate('http://127.0.0.1:8000/view_checkin/'.$checkin->uuid) !!}
                                </div>
                                <div id='imgdiv' style='display:none'>
                                @if($checkin->image !== null)
                                <img src="{{ asset('visitor_images/'.$checkin->image)}}" alt="avatar">

                                @else
                                <img src="{{ asset('assets/img/profile-3.jpg')}}"  alt="avatar">
                                @endif
                                </div>
                                <p class="">{{ $checkin->first_name }} - {{ $checkin->last_name }}</p>
                                <p><input class='form-control' value={{ $checkin->pass_id }}></p>
                                       
                            </div>
                            <div class="user-info-list">

                                <div class="">
                                    <ul class="contacts-block list-unstyled">
                                        <li class="contacts-block__item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-map-pin"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>{{ $checkin->address }}
                                        </li>
                                        <li class="contacts-block__item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-calendar"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect><line x1="16" y1="2" x2="16" y2="6"></line><line x1="8" y1="2" x2="8" y2="6"></line><line x1="3" y1="10" x2="21" y2="10"></line></svg>{{ Date('d-m-Y',strtotime($checkin->expected_date)) }}
                                        </li>
                                       
                                        <li class="contacts-block__item">
                                            <a href="mailto:example@mail.com"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>{{ $checkin->email }}</a>
                                        </li>
                                        <li class="contacts-block__item">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg> {{ $checkin->phone }}
                                        </li>
                                       
                                    </ul>
                                </div>                                    
                            </div>
                        </div>
                    </div>


                </div>

                <div class="col-xl-8 col-lg-6 col-md-7 col-sm-12 layout-top-spacing">

                 

                    <div class="bio layout-spacing">
                        <div class="widget-content widget-content-area">
                            <h3 class="">Purpose Of Visit</h3>
                            <p class='mb-4'>{{ $checkin->purpose }}.</p>


                        </div>                                
                    </div>
                    <div class="work-experience layout-spacing ">
                        
                        <div class="widget-content widget-content-area">

                            <h3 class="">Visitor Details</h3>
                            
                            <div class="timeline-alter">
                            
                                <div class="item-timeline">
                                    <div class="t-meta-date">
                                        <p class="">Department</p>
                                    </div>
                                    <div class="t-dot">
                                    </div>
                                    <div class="t-text">
                                        <p>{{ $checkin->department->name }}.</p>
                                       
                                    </div>
                                </div>

                                <div class="item-timeline">
                                    <div class="t-meta-date">
                                        <p class="">Staff</p>
                                    </div>
                                    <div class="t-dot">
                                    </div>
                                    <div class="t-text">
                                        <p>{{ $checkin->staff->name }}.</p>
                                       
                                    </div>
                                </div>

                                <div class="item-timeline">
                                    <div class="t-meta-date">
                                        <p class="">Expected Date and Time</p>
                                    </div>
                                    <div class="t-dot">
                                    </div>
                                    <div class="t-text">
                                        <p>{{ Date('d-m-Y',strtotime($checkin->expected_date)) }}.</p>
                                        <p>{{ $checkin->expected_time }}</p>
                                    </div>
                                </div>
                                <div class="item-timeline">
                                    <div class="t-meta-date">
                                        <p class="">Security In Charge</p>
                                    </div>
                                    <div class="t-dot">
                                    </div>
                                    <div class="t-text">
                                        <p>{{ $checkin->security->name ?? 'not approved yet' }}.</p>
                                        <p></p>
                                    </div>
                                </div>
                                <div class="item-timeline">
                                    <div class="t-meta-date">
                                        <p class="">CheckIn Time</p>
                                    </div>
                                    <div class="t-dot">
                                    </div>
                                    <div class="t-text">
                                        <p>{{ $checkin->check_in ?? 'not yet checked in' }}.</p>
                                        <p></p>
                                    </div>
                                </div>
                                <div class="item-timeline">
                                    <div class="t-meta-date">
                                        <p class="">CheckOut Time</p>
                                    </div>
                                    <div class="t-dot">
                                    </div>
                                    <div class="t-text">
                                        <p>{{ $checkin->check_out ?? 'not yet checked out' }}.</p>
                                        <p></p>
                                    </div>
                                </div>
                                <div class="item-timeline">
                                    <div class="t-meta-date">
                                        <p class="">Duration of Pass</p>
                                    </div>
                                    <div class="t-dot">
                                    </div>
                                    <div class="t-text">
                                        <p>A {{ $checkin->pass_duration ?? 'not available' }}.</p>
                                        <p></p>
                                    </div>
                                </div>
                                <div class="item-timeline">
                                    <div class="t-meta-date">
                                        <p class="">People expected</p>
                                    </div>
                                    <div class="t-dot">
                                    </div>
                                    <div class="t-text">
                                        <p>{{ $checkin->people_expected ?? 'not available' }}.</p>
                                        <p></p>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="work-experience layout-spacing ">
                        
                        <div class="widget-content widget-content-area">

                            <h3 class="">Get In Touch</h3>
                            
                           <div class='row flex'>
                            <div class="p-4">
                                <a href="mailto:{{ $checkin->email }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-mail"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg></a>
                            </div>
                            <div class="p-4">
                                <a href='tel:{{ $checkin->phone }}'>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                                </a>
                            </div>
                            <div class="p-4">
                                <a href='https://wa.me/{{ $checkin->phone }}?text='>
                                    <i class='far fa-user' style='font-size:20px'></i>
                                {{-- <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-phone"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg> --}}
                                </a>
                            </div>
                           </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>
        <div class="footer-wrapper">
            <div class="footer-section f-section-1">
                <p class="">Copyright © 2021 <a target="_blank" href="https://designreset.com/">DesignReset</a>, All rights reserved.</p>
            </div>
            <div class="footer-section f-section-2">
                <p class="">Coded with <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-heart"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg></p>
            </div>
        </div>
    </div>
    <!--  END CONTENT AREA  -->

@endsection
@section('script')

<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<script src="assets/js/ie11fix/fn.fix-padStart.js"></script>
<script src="assets/js/apps/scrumboard.js"></script>
    <script>
        $("#qrbtn").click(function() {
            $("#qrdiv").show()
            $("#imgdiv").hide()
            $("#qrbtn").css('backgroundColor','#4361ee')
            $("#imgbtn").css('backgroundColor','grey')
        })
        $("#imgbtn").click(function() {
            $("#qrdiv").hide()
            $("#imgdiv").show()
            $("#qrbtn").css('backgroundColor','grey')
            $("#imgbtn").css('backgroundColor','#4361ee')
        })
    </script>
@endsection