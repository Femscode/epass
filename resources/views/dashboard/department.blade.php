@extends('dashboard.master')
@section('header')

<link rel="stylesheet" type="text/css" href="plugins/table/datatable/datatables.css">
<link rel="stylesheet" type="text/css" href="assets/css/forms/theme-checkbox-radio.css">
<link rel="stylesheet" type="text/css" href="plugins/table/datatable/dt-global_style.css">
<link rel="stylesheet" type="text/css" href="plugins/table/datatable/custom_dt_custom.css">
@endsection
@section('content')

<!--  END SIDEBAR  -->

<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
    <div class="layout-px-spacing">

        <div class="row layout-spacing">

            <!-- Content -->
            {{-- <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 layout-top-spacing">

                <div class="user-profile layout-spacing">
                    <div class="widget-content widget-content-area">
                        <div class="d-flex justify-content-between">
                            <h3 class="">Profile</h3>
                            <a href="user_account_setting.html" class="mt-2 edit-profile"> <svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-edit-3">
                                    <path d="M12 20h9"></path>
                                    <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
                                </svg></a>
                        </div>
                        <div class="text-center user-info">
                            <img src="assets/img/profile-3.jpg" alt="avatar">
                            <p class="">{{ $user->name }}</p>
                        </div>
                        <div class="user-info-list">

                            <div class="">
                                <ul class="contacts-block list-unstyled">
                                    <li class="contacts-block__item">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-coffee">
                                            <path d="M18 8h1a4 4 0 0 1 0 8h-1"></path>
                                            <path d="M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z"></path>
                                            <line x1="6" y1="1" x2="6" y2="4"></line>
                                            <line x1="10" y1="1" x2="10" y2="4"></line>
                                            <line x1="14" y1="1" x2="14" y2="4"></line>
                                        </svg> {{ $user->company_type }}
                                    </li>
                                    <li class="contacts-block__item">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-calendar">
                                            <rect x="3" y="4" width="18" height="18" rx="2" ry="2"></rect>
                                            <line x1="16" y1="2" x2="16" y2="6"></line>
                                            <line x1="8" y1="2" x2="8" y2="6"></line>
                                            <line x1="3" y1="10" x2="21" y2="10"></line>
                                        </svg>{{ Date('Y-m-d',strtotime($user->created_at)) }}
                                    </li>
                                    <li class="contacts-block__item">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-map-pin">
                                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path>
                                            <circle cx="12" cy="10" r="3"></circle>
                                        </svg>{{ $user->address }}
                                    </li>
                                    <li class="contacts-block__item">
                                        <a href="mailto:example@mail.com"><svg xmlns="http://www.w3.org/2000/svg"
                                                width="24" height="24" viewBox="0 0 24 24" fill="none"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" class="feather feather-mail">
                                                <path
                                                    d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z">
                                                </path>
                                                <polyline points="22,6 12,13 2,6"></polyline>
                                            </svg>{{ $user->email }}</a>
                                    </li>
                                    <li class="contacts-block__item">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                            stroke-linecap="round" stroke-linejoin="round"
                                            class="feather feather-phone">
                                            <path
                                                d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                                            </path>
                                        </svg> +1 (530) 555-12121
                                    </li>
                                    <li class="contacts-block__item">
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <div class="social-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-facebook">
                                                        <path
                                                            d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z">
                                                        </path>
                                                    </svg>
                                                </div>
                                            </li>
                                            <li class="list-inline-item">
                                                <div class="social-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-twitter">
                                                        <path
                                                            d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z">
                                                        </path>
                                                    </svg>
                                                </div>
                                            </li>
                                            <li class="list-inline-item">
                                                <div class="social-icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-linkedin">
                                                        <path
                                                            d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z">
                                                        </path>
                                                        <rect x="2" y="9" width="4" height="12"></rect>
                                                        <circle cx="4" cy="4" r="2"></circle>
                                                    </svg>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="education layout-spacing ">
                    <div class="widget-content widget-content-area">
                        <h3 class="">Education</h3>
                        <div class="timeline-alter">
                            <div class="item-timeline">
                                <div class="t-meta-date">
                                    <p class="">04 Mar 2009</p>
                                </div>
                                <div class="t-dot">
                                </div>
                                <div class="t-text">
                                    <p>Royal Collage of Art</p>
                                    <p>Designer Illustrator</p>
                                </div>
                            </div>
                            <div class="item-timeline">
                                <div class="t-meta-date">
                                    <p class="">25 Apr 2014</p>
                                </div>
                                <div class="t-dot">
                                </div>
                                <div class="t-text">
                                    <p>Massachusetts Institute of Technology (MIT)</p>
                                    <p>Designer Illustrator</p>
                                </div>
                            </div>
                            <div class="item-timeline">
                                <div class="t-meta-date">
                                    <p class="">04 Apr 2018</p>
                                </div>
                                <div class="t-dot">
                                </div>
                                <div class="t-text">
                                    <p>School of Art Institute of Chicago (SAIC)</p>
                                    <p>Designer Illustrator</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="work-experience layout-spacing ">

                    <div class="widget-content widget-content-area">

                        <h3 class="">Work Experience</h3>

                        <div class="timeline-alter">

                            <div class="item-timeline">
                                <div class="t-meta-date">
                                    <p class="">04 Mar 2009</p>
                                </div>
                                <div class="t-dot">
                                </div>
                                <div class="t-text">
                                    <p>Netfilx Inc.</p>
                                    <p>Designer Illustrator</p>
                                </div>
                            </div>

                            <div class="item-timeline">
                                <div class="t-meta-date">
                                    <p class="">25 Apr 2014</p>
                                </div>
                                <div class="t-dot">
                                </div>
                                <div class="t-text">
                                    <p>Google Inc.</p>
                                    <p>Designer Illustrator</p>
                                </div>
                            </div>

                            <div class="item-timeline">
                                <div class="t-meta-date">
                                    <p class="">04 Apr 2018</p>
                                </div>
                                <div class="t-dot">
                                </div>
                                <div class="t-text">
                                    <p>Design Reset Inc.</p>
                                    <p>Designer Illustrator</p>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

            </div> --}}

            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 layout-top-spacing">
                <div class="user-profile layout-spacing">
                    <div class="widget-content widget-content-area">
                        <div class="d-flex justify-content-between">
                            <h3 class="mt-2 ml-2">Departments</h3>
                           
                            <a data-toggle="modal" data-target="#zoomupModal" class="m-2 btn-sm btn btn-success"> Add </a>
                            <div class="modal fade" id="zoomupModal" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Add Department</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                x
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form id='addDepartment'>
                                                <div class="form-group mb-3">
                                                    <input type="text" class="form-control" id="name"
                                                        aria-describedby="emailHelp1"
                                                        placeholder="Enter department's name">

                                                </div>


                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i>
                                                Discard</button>
                                            <button type="submit" class="btn btn-primary">Add</button>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="style-3_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4 no-footer">

                            <div class="table-responsive">
                                <table id="style-3" class="table style-3 table-hover dataTable no-footer" role="grid"
                                    aria-describedby="style-3_info">
                                    <thead>
                                        <tr role="row">


                                            <th class="sorting" tabindex="0" aria-controls="style-3" rowspan="1"
                                                colspan="1" aria-label="First Name: activate to sort column ascending"
                                                style="width: 79.7788px;"> Name</th>
                                            <th class="text-center dt-no-sorting sorting" tabindex="0"
                                                aria-controls="style-3" rowspan="1" colspan="1"
                                                aria-label="Actions: activate to sort column ascending"
                                                style="width: 55.1756px;">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody id='t_table'>
                                        @foreach($departments as $department)
                                        <tr role="row">

                                            <td>
                                                <div class='editall' id='normal-{{ $department->uuid }}'> {{ $department->name }}</div>
                                                <div class='normalall' style='display:none' id='edit-{{ $department->uuid }}'>
                                                    <form data-id='{{ $department->uuid }}' class='update_department'>
                                                        <div class='row'>
                                                            <div class='col-md-8'>
                                                                <input type='text' id='department_name-{{ $department->uuid }}' class='department_name form-control'
                                                                    value='{{ $department->name }}'>
                                                                <input type='hidden' class='department_id' value='{{ $department->uuid }}'>
                                                            </div>
                                                            <div class='col-md-4'>
                                                                <input type='submit' value='Change'
                                                                    class='btn btn-sm btn-info' />
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </td>



                                            <td class="text-center">
                                                <ul class="table-controls">
                                                    <li><a data-id="{{ $department->uuid }}" href="javascript:void(0);"
                                                            class="edit_department bs-tooltip"
                                                            data-toggle="tooltip" data-placement="top" title=""
                                                            data-original-title="Edit"><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-edit-2 p-1 br-6 mb-1">
                                                                <path
                                                                    d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z">
                                                                </path>
                                                            </svg></a></li>
                                                    <li><a data-id='{{ $department->uuid }}' href="javascript:void(0);"
                                                            class="delete_department bs-tooltip" data-toggle="tooltip"
                                                            data-placement="top" title=""
                                                            data-original-title="Delete"><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-trash p-1 br-6 mb-1">
                                                                <polyline points="3 6 5 6 21 6"></polyline>
                                                                <path
                                                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                                </path>
                                                            </svg></a></li>
                                                </ul>
                                            </td>
                                        </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                            <div class="dt--bottom-section d-sm-flex justify-content-sm-between text-center">

                                <div class="dt--pagination">
                                    <div class="dataTables_paginate paging_simple_numbers" id="style-3_paginate">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
<script src="plugins/table/datatable/datatables.js"></script>
<script>
    // var e;
       
        c3 = $('#style-3').DataTable({
            "dom": "<'dt--top-section'<'row'<'col-12 col-sm-6 d-flex justify-content-sm-start justify-content-center'l><'col-12 col-sm-6 d-flex justify-content-sm-end justify-content-center mt-sm-0 mt-3'f>>>" +
        "<'table-responsive'tr>" +
        "<'dt--bottom-section d-sm-flex justify-content-sm-between text-center'<'dt--pages-count  mb-sm-0 mb-3'i><'dt--pagination'p>>",
            "oLanguage": {
                "oPaginate": { "sPrevious": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-left"><line x1="19" y1="12" x2="5" y2="12"></line><polyline points="12 19 5 12 12 5"></polyline></svg>', "sNext": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-right"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>' },
                "sInfo": "Showing page _PAGE_ of _PAGES_",
                "sSearch": '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>',
                "sSearchPlaceholder": "Search...",
               "sLengthMenu": "Results :  _MENU_",
            },
            "stripeClasses": [],
            "lengthMenu": [5, 10, 20, 50],
            "pageLength": 5
        });

        multiCheck(c3);
</script>
<script>
    $(document).ready(function() {
        $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $("#addDepartment").submit(async function(e) {
                       e.preventDefault()
                       Swal.fire('Adding department, please wait...')
                            //  $("#create_hostel").attr('disabled',true);
                            var fd = new FormData();
                            fd.append('name', $("#name").val());
                            console.log(fd, 'this is the fd');

                            $.ajax({
                                type: 'POST',
                                url: "{{ route('add_department') }}",
                                data: fd,
                                cache: false,
                                contentType: false,
                                processData: false,
                                success: (data) => {
                                    console.log(data)
                                    if(data == 'duplicate') {
                                        Swal.fire('info','Department already exist','info')
                                    }
                                    else {
                                        Swal.close()
                                        // Swal.fire("Success", 'Department added', 'success');
                                    
                                    $("#zoomupModal").modal('hide')
                                    $("#name").val('')
                                    $("#t_table").prepend(`
                                    <tr role="row">
                                          

                                        <td>
                                                <div class='editall' id='normal-${data.uuid }'> ${data.name}</div>
                                                <div class='normalall' style='display:none' id='edit-${data.uuid }'>
                                                    <form data-id='${data.uuid }' class='update_department'>
                                                        <div class='row'>
                                                            <div class='col-md-8'>
                                                                <input type='text' id='department_name-${data.uuid }' class='department_name form-control'
                                                                    value='${data.name}'>
                                                                <input type='hidden' class='department_id' value='${data.uuid }'>
                                                            </div>
                                                            <div class='col-md-4'>
                                                                <input type='submit' value='Change'
                                                                    class='btn btn-sm btn-info' />
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </td>


                                            <td class="text-center">
                                                <ul class="table-controls">
                                                    <li><a data-id='${data.uuid }'' href="javascript:void(0);"
                                                            class="edit_department bs-tooltip"
                                                            data-toggle="tooltip" data-placement="top" title=""
                                                            data-original-title="Edit"><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-edit-2 p-1 br-6 mb-1">
                                                                <path
                                                                    d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z">
                                                                </path>
                                                            </svg></a></li>
                                                    <li><a data-id='${ data.uuid }' href="javascript:void(0);"
                                                            class="delete_department bs-tooltip" data-toggle="tooltip"
                                                            data-placement="top" title=""
                                                            data-original-title="Delete"><svg
                                                                xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-trash p-1 br-6 mb-1">
                                                                <polyline points="3 6 5 6 21 6"></polyline>
                                                                <path
                                                                    d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                                </path>
                                                            </svg></a></li>
                                                </ul>
                                            </td>
                                        </tr>
                                    `)
									// window.location.reload();
                                    }

                                },
                                error: function(data) {
                                    console.log(data);
                                  
                                    Swal.fire('Oops', 'Department not added','error')
                                    $("#zoomupModal").modal('close')
                                }
                            });
                        
                            });
                            $("body").on('click','.edit_department',function() {
                                id = $(this).data('id')
                             
                                $(".editall").show()
                                $("#normal-"+id).hide()
                                $(".normalall").hide()
                                $("#edit-"+id).show()

                               
                            })   
                            $("body").on('submit','.update_department',async function(e) {
                                e.preventDefault()
                                var fd = new FormData();
                            //     var id =  $(".department_id").val()
                            // fd.append('name', $(".department_name").val());
                            // fd.append('id', $(".department_id").val());
                            id = $(this).data('id')
                            fd.append('name', $("#department_name-"+id).val());
                            fd.append('id', id);

                            $.ajax({
                                type: 'POST',
                                url: "{{ route('update_department') }}",
                                data: fd,
                                cache: false,
                                contentType: false,
                                processData: false,
                                success: (data) => {
                                    console.log(data)
                                    if(data == 'duplicate') {
                                        Swal.fire('info','Department already exist','info')
                                    }
                                    else {
                                        $(".editall").show()
                                $("#normal-"+id).text(data.name)
                              
                                $("#normal-"+id).show()
                             
                                $("#edit-"+id).hide()
                                    }
                                    $("#zoomupModal").modal('hide')
                                    $("#name").val('')
                                  	// window.location.reload();

                                },
                                error: function(data) {
                                    console.log(data);
                                  
                                    Swal.fire('Oops', 'Department not added','error')
                                    $("#zoomupModal").modal('close')
                                }
                            });

                            })   
                            $('body').on("click",".delete_department",function() {
              
              var id = $(this).data('id')
              
              var token = $("meta[name='csrf-token']").attr("content");
              var el = this;
              // alert(user_id);
              resetImage(el,id);
              });
              async function resetImage(el,id) {
                  const willUpdate = await Swal.fire({
                      title: "Delete department?",
                      icon: "warning",
                      confirmButtonColor: "#DD6B55",
                      confirmButtonText: "Yes!",
                      showCancelButton: true,
                      buttons: ["Cancel", "Yes, Delete"]
                  });
                  if (willUpdate.isDismissed == false) {
                      //performReset()
                      deleteImage(el,id);
                  } else {
                    
                  }
              }
  
              function deleteImage(el,id)
              {
                 
                  try {
                          $.get('{{ route('delete_department') }}?id=' + id,
                          function (data, status) {
                              console.log(status);
                              console.table(data);
                              if( status === "success") {
                                 
                                $(el).closest("tr").remove();
                                // Swal.fire('success','Deleted Successfully','success')
                              }
                          }
                      );
                  } catch (e) {
                      let alert = Swal.fire(e.message);
                  }
              }
  
      
    })
</script>
@endsection