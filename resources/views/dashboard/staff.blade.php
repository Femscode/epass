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
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 layout-top-spacing mb-8">

                <div class="user-profile layout-spacing">
                    <div class="widget-content widget-content-area">
                        <div class="d-flex justify-content-between">
                            <h3 class="">Department</h3>
                            <a href="user_account_setting.html" class="mt-2 edit-profile"></a>
                        </div>
                        <div class="m-2 p-2 text-center user-info">
                            <select class='form-control' id='select_department'>
                                <option value=''>--Select Department--</option>
                                @foreach($departments as $department)
                                <option value='{{ $department->uuid }}'>{{ $department->name }}</option>
                                @endforeach
                              </select>
                        </div><br>
                       
                    </div>
                </div>


            </div>

            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 layout-top-spacing">
                <div class="user-profile layout-spacing">
                    <div class="widget-content widget-content-area">
                        <div class="d-flex justify-content-between">
                            <h3 class="mt-2 ml-2">Staffs</h3>
                           
                            <a data-toggle="modal" data-target="#zoomupModal" class="m-2 btn-sm btn btn-success"> Add </a>
                            <div class="modal fade" id="zoomupModal" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Add Staff</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                x
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form id='add_staff'>
                                                <div class="form-row mb-4">
                                                    <div class="form-group col-md-6">
                                                        <label for="inputEmail4">Name</label>
                                                        <input type="text" class="form-control" id="name" placeholder="Name Of Staff">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="inputPassword4">Email Address</label>
                                                        <input type="email" class="form-control" id="email" placeholder="Enter Email Address">
                                                    </div>
                                                </div>
                                              
                                                <div class="form-row mb-4">
                                                   
                                                    <div class="form-group col-md-6">
                                                        <label for="inputState">Department</label>
                                                        <select id="department" class="form-control">
                                                            <option selected="">Choose...</option>
                                                            @foreach($departments as $department)
                                                            <option value='{{ $department->uuid }}'>{{ $department->name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="inputState">Role</label>
                                                        <select id="role" class="form-control">
                                                            <option selected="">Choose...</option>
                                                            <option value='Junior Staff'>Junior Staff</option>
                                                            <option value='Mid Staff'>Mid Staff</option>
                                                            <option value='Senior Staff'>Senior Staff</option>
                                                        </select>
                                                    </div>
                                                  
                                                </div>
                                                <div class='alert alert-danger'>
                                                    Please note that the default password for your staffs is "ABCD123"
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
                            <div class="modal fade" id="editModal" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Edit Staff</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                x
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form id='update_staff'>
                                                <div class="form-row mb-4">
                                                    <div class="form-group col-md-12">
                                                        <label for="inputEmail4">Name</label>
                                                        <input type="text" class="form-control" id="edit_name" placeholder="Name Of Staff">
                                                        <input type="hidden" class="form-control" id="edit_id" placeholder="Name Of Staff">
                                                    </div>
                                                   
                                                </div>
                                              
                                                <div class="form-row mb-4">
                                                   
                                                    <div class="form-group col-md-6">
                                                        <label for="inputState">Department</label>
                                                        <select id="edit_department" class="form-control">
                                                            <option selected="">Choose...</option>
                                                            @foreach($departments as $department)
                                                            <option value='{{ $department->uuid }}'>{{ $department->name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="inputState">Role</label>
                                                        <select id="edit_role" class="form-control">
                                                            <option selected="">Choose...</option>
                                                            <option value='Junior Staff'>Junior Staff</option>
                                                            <option value='Mid Staff'>Mid Staff</option>
                                                            <option value='Senior Staff'>Senior Staff</option>
                                                        </select>
                                                    </div>
                                                  
                                                </div>
                                                <div class='alert alert-danger'>
                                                    Please note that the default password for your staffs is "ABCD123"
                                                </div>
                                               


                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn" data-dismiss="modal"><i class="flaticon-cancel-12"></i>
                                                Discard</button>
                                            <button type="submit" class="btn btn-primary">Update</button>
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
                                         
                                            <th class="sorting" tabindex="0" aria-controls="style-3" rowspan="1"
                                                colspan="1" aria-label="First Name: activate to sort column ascending"
                                                style="width: 79.7788px;"> Role</th>
                                            <th class="text-center dt-no-sorting sorting" tabindex="0"
                                                aria-controls="style-3" rowspan="1" colspan="1"
                                                aria-label="Actions: activate to sort column ascending"
                                                style="width: 55.1756px;">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody id='t_table'>
                                        @foreach($staffs as $staff)
                                        <tr role="row">

                                            <td>
                                                <div class='editall' id='name-{{ $staff->uuid }}'> {{ $staff->name }} </div>
                                                <i id='email-{{ $staff->uuid }}'> {{ $staff->email }}</i>
                                                
                                              
                                            </td>
                                            <td> 
                                              <div  id='department-{{ $staff->uuid }}'> {{ $staff->department->name ?? "" }}</div>
                                              <i  id='role-{{ $staff->uuid }}'>{{ $staff->role }}</i>
                                            </td>



                                            <td class="text-center">
                                                <ul class="table-controls">
                                                    <li>@if($user->can('create manage'))<a class='btn btn-secondary btn-sm' href='role/{{ $staff->uuid }}'>Assign Role</a>@endif</li>
                                                    <li>@if($user->can('edit Staff'))
                                                        <a data-id="{{ $staff->uuid }}" href="javascript:void(0);"
                                                            class="edit_staff bs-tooltip"
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
                                                            </svg></a>
                                                        @endif
                                                        </li>
                                                    <li>
                                                        @if($user->can('delete Staff')) 
                                                        <a data-id='{{ $staff->uuid }}' href="javascript:void(0);"
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
                                                            </svg></a>
                                                        @endif
                                                    </li>
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
            $("#add_staff").submit(async function(e) {
                       e.preventDefault()
                       Swal.fire('Adding department, please wait...')
                            //  $("#create_hostel").attr('disabled',true);
                            var fd = new FormData();
                            fd.append('name', $("#name").val());
                            fd.append('email', $("#email").val());
                            fd.append('department', $("#department").val());
                            fd.append('role', $("#role").val());
                          
                            console.log(fd, 'this is the fd');

                            $.ajax({
                                type: 'POST',
                                url: "{{ route('add_staff') }}",
                                data: fd,
                                cache: false,
                                contentType: false,
                                processData: false,
                                success: (data) => {
                                    console.log(data)
                                    
                                        Swal.fire("Success", 'Staff added successfully', 'success');
                                   
                                    $("#zoomupModal").modal('hide')
                                    $("#name").val('')
                                    $("#t_table").prepend(`
                                    <tr role="row">
                                        

<td>
    <div class='editall' id='name-${data[0].uuid}'> ${data[0].name } </div>
    <i id='email-${data[0].uuid}'> ${data[0].email }</i>
    
  
</td>
<td> 
  <div  id='department-${data[0].uuid}'> ${data[1]}</div>
  <i  id='role-${data[0].uuid}'>${data[0].role }</i>
</td>



<td class="text-center">
    <ul class="table-controls">
        <li>@if($user->can('create manage'))<a class='btn btn-secondary btn-sm' href='role/{{ $staff->uuid }}'>Assign Role</a>@endif</li>
                                                   
        <li><a data-id="${data[0].uuid}" href="javascript:void(0);"
                class="edit_staff bs-tooltip"
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
        <li><a data-id='${data[0].uuid }' href="javascript:void(0);"
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

                                },
                                error: function(data) {
                                    console.log(data);
                                  
                                    Swal.fire('Oops', 'Staff already in existence','error')
                                    // $("#zoomupModal").modal('hide')
                                }
                            });
                        
                            });
                            $("body").on('click','.edit_staff',function() {
                                id = $(this).data('id')
                                $.get('{{ route('edit_staff') }}?id=' + id, function (data) {
                                    $("#edit_name").val(data.name)
                                    $("#edit_id").val(data.uuid)
                                    $("#edit_role").val(data.role)
                                    $("#edit_department").val(data.department_id)
                                   
                                });
                             
                               $("#editModal").modal('show')

                               
                            })   
                            $("#update_staff").submit(async function(e) {
                       e.preventDefault()
                       Swal.fire('Updating, please wait...')
                            //  $("#create_hostel").attr('disabled',true);
                            var fd = new FormData();
                            fd.append('name', $("#edit_name").val());
                            fd.append('id', $("#edit_id").val());
                            fd.append('department_id', $("#edit_department").val());
                            fd.append('role', $("#edit_role").val());
                          
                            console.log(fd, 'this is the fd');

                            $.ajax({
                                type: 'POST',
                                url: "{{ route('update_staff') }}",
                                data: fd,
                                cache: false,
                                contentType: false,
                                processData: false,
                                success: (data) => {
                                    console.log(data)
                                    id = $("#edit_id").val()
                                    Swal.close()
                                   
                                        
                                    $("#editModal").modal('hide')
                                    $("#name-"+id).text(data[0].name)
                                    $("#role-"+id).text(data[0].role)
                                    $("#department-"+id).text(data[1])
                                    
									// window.location.reload();

                                },
                                error: function(data) {
                                    console.log(data);
                                  
                                    Swal.fire('Oops', 'Staff already in existence','error')
                                    // $("#zoomupModal").modal('hide')
                                }
                            });
                        
                            });
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
                            $(document).on("click",".delete_department",function() {
              
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
                          $.get('{{ route('delete_staff') }}?id=' + id,
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