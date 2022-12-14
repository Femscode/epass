@extends('security.master')
@section('header')
<link rel="stylesheet" type="text/css" href="assets/css/forms/theme-checkbox-radio.css">
<link href="plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet" type="text/css" />
<link href="assets/css/apps/contacts.css" rel="stylesheet" type="text/css" />

@endsection
@section('content')

<!--  END SIDEBAR  -->

<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
    <div class="layout-px-spacing">
        <div class="row layout-spacing layout-top-spacing" id="cancel-row">
            <div class="col-lg-12">
                <div class="widget-content searchable-container list">

                    <div class="row">
                        <div
                            class="col-xl-4 col-lg-5 col-md-5 col-sm-7 filtered-list-search layout-spacing align-self-center">
                            <form class="form-inline my-2 my-lg-0">
                                <div class="">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-search">
                                        <circle cx="11" cy="11" r="8"></circle>
                                        <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                    </svg>
                                    <input type="text" class="form-control product-search" id="input-search"
                                        placeholder="Search Visitor...">

                                </div>
                            </form>
                        </div>
                   
                        <div
                            class="col-xl-8 col-lg-7 col-md-7 col-sm-5 text-sm-right text-center layout-spacing align-self-center">
                            <div class="d-flex justify-content-sm-end justify-content-center">
                                <a href='/security_checkin'>
                                    <svg id="btn-add-contact" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-user-plus">
                                        <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="8.5" cy="7" r="4"></circle>
                                        <line x1="20" y1="8" x2="20" y2="14"></line>
                                        <line x1="23" y1="11" x2="17" y2="11"></line>
                                    </svg>
                                </a>
                                <div class="switch align-self-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-list view-list active-view">
                                        <line x1="8" y1="6" x2="21" y2="6"></line>
                                        <line x1="8" y1="12" x2="21" y2="12"></line>
                                        <line x1="8" y1="18" x2="21" y2="18"></line>
                                        <line x1="3" y1="6" x2="3" y2="6"></line>
                                        <line x1="3" y1="12" x2="3" y2="12"></line>
                                        <line x1="3" y1="18" x2="3" y2="18"></line>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-grid view-grid">
                                        <rect x="3" y="3" width="7" height="7"></rect>
                                        <rect x="14" y="3" width="7" height="7"></rect>
                                        <rect x="14" y="14" width="7" height="7"></rect>
                                        <rect x="3" y="14" width="7" height="7"></rect>
                                    </svg>
                                </div>
                            </div>

                            <!-- Modal -->

                        </div>
                    </div>
                    @if($user->can('create Department'))
                    <div class="card col-md-4 m-2"
                        style='background:#d4edda;color:#155724;border-left-color:#155724;border-left-width:5px'>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="numbers">

                                        <a href='/departments' class="mb-0" style='color:#155724'>
                                            Manage Departments
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif
                    @if($user->can('create Staff'))
                    <div class="card col-md-4 m-2"
                        style='background:#d1ecf1;color:#0c5460;border-left-color:#0c5460;border-left-width:5px'>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="numbers">
                                        <a href='/staffs' class="mb-0" style='color:#0c5460'>
                                            Manage Staffs

                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endif

                    <div class="searchable-items list">
                        <div class="items items-header-section">
                            <div class="item-content">
                                <div class="">
                                    <div class="n-chk align-self-center text-center">
                                        <label class="new-control new-checkbox checkbox-primary">
                                            <input type="checkbox" class="new-control-input" id="contact-check-all">
                                            <span class="new-control-indicator"></span>
                                        </label>
                                    </div>
                                    <h4>Name</h4>
                                </div>
                                <div class="user-email">
                                    <h4>Email</h4>
                                </div>
                                <div class="user-location">
                                    <h4 style="margin-left: 0;">Staff</h4>
                                </div>
                                <div class="user-phone">
                                    <h4 style="margin-left: 3px;">Phone</h4>
                                </div>
                                <div class="action-btn">
                                  Action
                                </div>
                            </div>
                        </div>
                        @foreach($checkins as $checkin)
                        <div class="items" >
                            <div id='approvediv-{{ $checkin->uuid }}' class="item-content" @if($checkin->status == 'approved') style='border:1px solid #4361ee;color:#4361ee;border-left-color:#4361ee;border-left-width:10px;'@elseif($checkin->status == 'unapproved') style='border:1px solid #721c24;color:#721c24;border-left-color:#721c24;border-left-width:10px;'@else style='border:1px solid #0c5460;color:#0c5460;border-left-color:#0c5460;border-left-width:10px;' @endif >
                                <div class="user-profile" >
                                    <div class="n-chk align-self-center text-center">
                                        <label class="new-control new-checkbox checkbox-primary">
                                            <input type="checkbox" class="new-control-input contact-chkbox">
                                            <span class="new-control-indicator"></span>
                                        </label>
                                    </div>
                                    <img src="assets/img/profile-5.jpg" alt="avatar">
                                    <div class="user-meta-info">
                                        <p class="user-name"
                                            data-name="{{ $checkin->name }}">{{
                                            $checkin->name }}</p>
                                        <p id='approvename-{{ $checkin->uuid }}' class="user-work" data-occupation="{{ $checkin->status }}">{{
                                            $checkin->status }}</p>
                                            <div style='display:none'>{{ $checkin->pass_id }}</div>
                                    </div>
                                </div>
                                <div class="user-email">
                                    <p class="info-title">Email: </p>
                                    <p class="usr-email-addr" data-email="{{ $checkin->email }}">{{ $checkin->email }}<br>{{ $checkin->address }}
                                    </p>
                                </div>
                                <div class="user-location">
                                    <p class="info-title">Location: </p>
                                    <p class="usr-location" data-location="">{{ $checkin->staff->name}}<br>{{ $checkin->department->name }}</p>
                                </div>
                                <div class="user-phone">
                                    <p class="info-title">Staff: </p>
                                    <p class="usr-ph-no" data-phone="{{ $checkin->phone }}">{{ $checkin->phone }}</p>
                                </div>
                                <div class="action-btn">
                                    <a data-id='{{ $checkin->uuid }}' class='approve_visitor'>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check"><polyline points="20 6 9 17 4 12"></polyline></svg>
                                    </a>

                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-user-minus delete">
                                        <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                        <circle cx="8.5" cy="7" r="4"></circle>
                                        <line x1="23" y1="11" x2="17" y2="11"></line>
                                    </svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-trash-2  delete-multiple">
                                    <polyline points="3 6 5 6 21 6"></polyline>
                                    <path
                                        d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                    </path>
                                    <line x1="10" y1="11" x2="10" y2="17"></line>
                                    <line x1="14" y1="11" x2="14" y2="17"></line>
                                </svg>
                                </div>
                            </div>
                        </div>
                        @endforeach
                     

                        <div class='pagination'>
                            {{ $checkins->links('pagination::bootstrap-4') }}
                        </div>
                    </div>

                </div>
            </div>
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
<script src="assets/js/apps/contact.js"></script>
<script>
$(document).ready(function() {
    $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $(".approve_visitor").click(function() {
            var id = $(this).data(id).id
            console.log(id)
            $.get('{{ route('approve_visitor') }}?id=' + id,
                          function (data, status) {
                              console.log(status);
                              console.table(data);
                              if( status === "success") {
                                if(data.status == 'approved') {
                                 $("#approvename-"+id).text('approved')
                                 $("#approvediv-"+id).css('border','1px solid #4361ee')
                                 $("#approvediv-"+id).css('border-left-color','#4361ee')
                                 $("#approvediv-"+id).css('border-left-width','10px')
                                }
                                else {
                                    $("#approvename-"+id).text('unapproved')
                                 $("#approvediv-"+id).css('border','1px solid #721c24')
                                 $("#approvediv-"+id).css('border-left-color','#721c24')
                                 $("#approvediv-"+id).css('border-left-width','10px')
                                }
                               
                              }
                          }
                      );
        })
        });
        </script>
@endsection