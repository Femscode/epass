@extends('staff.master')
@section('header')
<link href="assets/css/apps/scrumboard.css" rel="stylesheet" type="text/css" />
<link href="assets/css/forms/theme-checkbox-radio.css" rel="stylesheet" type="text/css">

@endsection
@section('content')

<!--  END SIDEBAR  -->

<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
    <div class="layout-px-spacing mt-4">
        <div class="row">
            <div id="flFormsGrid" class="col-lg-12 layout-spacing">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header"
                        style='background:#d4edda;color:#155724;border-left-color:#155724;border-left-width:5px'>
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>Pre Register Visitor</h4>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">
                        <form method='post' action='{{ route("save_checkin_user") }}' enctype="multipart/form-data">@csrf
                           
                          
                            <div class="row mb-4">


                                <div class="form-group col-md-4">
                                    <label for="inputEmail4"> Company</label>
                                    <input type='text' class='form-control' id='search_company' placeholder='Search...'/>
                                    
                                    <select required class="form-control" id="company_id" name='company_id'>
                                       <option value=''><b>No result found</b></option>
                                       {{-- <option selected="{{ $checkin->company_id ?? ""}}" value='{{ $checkin->company_id  ?? ""}}'>{{
                                            $checkin->company->name ?? '--Select Company--' }}</option>
                                        @foreach($companies as $company)
                                        <option value='{{ $company->uuid }}'>{{ $company->name }}</option>
                                        @endforeach --}}
                                    </select>
                                </div>
                        
                                <div class="form-group col-md-4">
                                    <label for="inputPassword4">Select Department</label>
                                    <select required class="form-control" id="department_id" name='department_id'>
                                        <option selected="{{ $checkin->department_id ?? ""}}" value='{{ $checkin->department_id  ?? ""}}'>{{
                                            $checkin->department->name ?? '--Select
                                            Company--' }}</option>
                        
                        
                                    </select>
                                </div>
                        
                                <div class="form-group col-md-4">
                                    <label for="inputPassword4">Staff</label>
                                    <select class="form-control" name='staff_id' id="staff_id" name='gender'>
                                        <option selected="{{ $checkin->staff->name ?? ""}}" value='{{ $checkin->staff->name  ?? ""}}'>{{
                                            $checkin->staff->name ?? '--Select Company--' }}</option>
                        
                                    </select>
                        
                                </div>
                            </div>
                        
                            <div class="row mb-4">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Address</label>
                                    <input value='{{ $checkin->address ?? "" }}' required type="text" class="form-control" name='address'
                                        id="inputEmail4" placeholder="Home address">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Purpose of visit</label>
                                    <textarea required type="text" name='purpose' class="form-control"
                                        placeholder="Purpose Of Visit">{{ $checkin->purpose ?? "" }}</textarea>
                                </div>
                            </div>
                            <div class="form-row mb-4">
                              
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Select Pass Duration</label>
                                    <select required class="form-control" id="pass_duration" name='pass_duration'>
                                        <option value=''>--Select Department--</option>
                                        <option value='day'>A day</option>
                                        <option value='week'>A week</option>
                                        <option value='month'>A month</option>
                                        <option value='year'>A year</option>
                                      
                                   </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">People Expected</label>
                                  <input type='number' class='form-control' name='people_expected' placeholder='Input the amount of people you want the pass to cover.' required/>
                                      
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="form-group col-md-6">
                                    <label for="inputEmail4">Expected Date</label>
                                    <input required type="date" value='{{ $checkin->expected_date ?? "" }}' class="form-control"
                                        name='expected_date' id="inputEmail4" placeholder="Home address">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Expected Time</label>
                                    <input required type="time" value='{{ $checkin->expected_time ?? "" }}' name='expected_time'
                                        class="form-control" placeholder="Purpose Of Visit" />
                                </div>
                            </div>
                        
                          
                            <button type="submit" class="btn btn-success mt-3">Create</button>
                         
                        </form>
                        

                        
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-wrapper">
            <div class="footer-section f-section-1">
                <p class="">Copyright © 2021 <a target="_blank" href="https://designreset.com/">DesignReset</a>, All
                    rights reserved.</p>
            </div>
            <div class="footer-section f-section-2">
                <p class="">Coded with <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round" class="feather feather-heart">
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

    <script src="{{ asset('assets/js/libs/jquery-3.1.1.min.js')}}"></script>
    <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $("#department_id").on('change', function() {
                    var id = $(this).val()
                    $.get('{{ route('get_staff') }}?id=' + id,
                              function (data, status) {
                                  console.log(status);
                                  console.log(data);
                                  if( status === "success") {
                                    $("#staff_id").empty()
                                    for (var index = 0; index < data.length; index++) {
          $('#staff_id').append('<option value="' + data[index].uuid + '">' + data[index].name + '</option>');
       }
       $('#staff_id').append(`<option value="null">Anyone from the department</option>`);
    
                                     
                                  }
                              })
                })
                $("#company_id").on('click', function() {
                  
                    var id = $(this).val()
                    $.get('{{ route('get_department') }}?id=' + id,
                              function (data, status) {
                                  console.log(status);
                                  console.log(data);
                                  if( status === "success") {
                                    $("#department_id").empty()
                                    $("#staff_id").empty()
                                    $('#department_id').append(`<option value="">Select Department</option>`);
                                    $('#staff_id').append(`<option value="">Select Staff</option>`);
                                    for (var index = 0; index < data.length; index++) {
          $('#department_id').append('<option value="' + data[index].uuid + '">' + data[index].name + '</option>');
       }
    
                                     
                                  }
                              })
                })
                $("#search_company").on('input', function() {
                    var value = $(this).val()
                    // alert(value)
                    $.get('{{ route('get_company') }}?value=' + value,
                              function (data, status) {
                                  console.log(status);
                                  console.log(data);
                                  if( status === "success" && data.length >= 1) {
                                    $("#company_id").empty()
                                  
                                    for (var index = 0; index < data.length; index++) {
          $('#company_id').append('<option value="' + data[index].uuid + '">' + data[index].name + '</option>');
       }
    
                                     
                                  } else {
                                    $("#company_id").empty()
                                    $("#company_id").append('<option value="">No result found</option>')
                                  }
                              })
                })
            })
         
    </script>
    @endsection