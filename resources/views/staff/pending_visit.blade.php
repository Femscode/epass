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
        <div class="action-btn layout-top-spacing mb-5">
            <a href='/staff_checkin' class="btn btn-primary">Pre-register visitor</a>
        </div>
        @if(Session::has('message'))
        <div class='alert alert-success'>{{ Session::get('message') }}</div>
        @endif
        <div class="modal fade" id="addTaskModal" tabindex="-1" role="dialog" aria-labelledby="addTaskModalTitle"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="compose-box">
                            <div class="compose-content" id="addTaskModalTitle">
                                <h5 class="add-task-title">Add Task</h5>
                                <h5 class="edit-task-title">Edit Task</h5>

                                <div class="addTaskAccordion" id="add_task_accordion">
                                    <div class="card task-text-progress">
                                        <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo"
                                            data-parent="#add_task_accordion">
                                            <div class="card-body">
                                                <form action="javascript:void(0);">
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="task-title mb-4">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="feather feather-edit-3">
                                                                    <path d="M12 20h9"></path>
                                                                    <path
                                                                        d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z">
                                                                    </path>
                                                                </svg>
                                                                <input id="s-task" type="text" placeholder="Task"
                                                                    class="form-control" name="task">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <div class="task-badge">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="feather feather-star">
                                                                    <polygon
                                                                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                                    </polygon>
                                                                </svg>
                                                                <textarea id="s-text" placeholder="Task Text"
                                                                    class="form-control" name="taskText"></textarea>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn" data-dismiss="modal"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                stroke-linecap="round" stroke-linejoin="round" class="feather feather-x">
                                <line x1="18" y1="6" x2="6" y2="18"></line>
                                <line x1="6" y1="6" x2="18" y2="18"></line>
                            </svg> Discard</button>
                        <button data-btnfn="addTask" class="btn add-tsk">Add Task</button>
                        <button data-btnfn="editTask" class="btn edit-tsk" style="display: none;">Save</button>
                    </div>
                </div>
            </div>
        </div>



        <!-- Modal -->


        <div class="row scrumboard" id="cancel-row">
            <div class="col-lg-12 md-12 ">





                <div data-section="s-approved" class="col-lg-12 md-12 sm-12" data-connect="sorting">

                    <div class="connect-sorting">
                        <div class="task-container-header">
                            <h6 class="s-heading" data-listTitle="New">Pending Visitations</h6>
                            <div class="dropdown">
                                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink-3"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                        fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-more-horizontal">
                                        <circle cx="12" cy="12" r="1"></circle>
                                        <circle cx="19" cy="12" r="1"></circle>
                                        <circle cx="5" cy="12" r="1"></circle>
                                    </svg>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink-3">
                                    <a class="dropdown-item list-edit" href="javascript:void(0);">Edit</a>
                                    <a class="dropdown-item list-delete" href="javascript:void(0);">Delete</a>
                                    <a class="dropdown-item list-clear-all" href="javascript:void(0);">Clear All</a>
                                </div>
                            </div>
                        </div>
                        <div class='row'>


                            @foreach($checkins as $checkin)
                            <div class="col-md-4 connect-sorting-content" @if($checkin->status == 'approved')
                                data-sortable="true" @else data-sortable="false" @endif>

                                <div @if($checkin->status == 'approved') data-draggable="true" @else
                                    data-draggable="false" @endif class="card task-text-progress" style="">
                                    <div class="card-body">

                                        <div class="task-header">

                                            <div class="">
                                                <h4 class=""
                                                    data-taskTitle="{{ $checkin->name }} ">
                                                    {{ $checkin->name }} </h4>
                                                <p><b>Pass Id:</b>
                                                <div class='d-flex'>

                                                    <input value='{{ $checkin->pass_id }}' id='{{ $checkin->pass_id }}'
                                                        class='form-control form-control-sm' />

                                                    <div>
                                                    <a data-id='{{ $checkin->pass_id }}'
                                                        class='cpy btn btn-success'>Copy
                                                    
                                                    </a>
                                                    
                                                    </div>
                                                        
                                                    </div>
                                                </p>
                                            </div>

                                            <div class="">
                                                @if($checkin->status == 'approved')
                                                <a href='allow_visitor/{{ $checkin->uuid }}'
                                                    class='btn btn-sm btn-success'>Approve</a>
                                                @endif
                                            </div>

                                        </div>

                                        <div class="task-body">

                                            <div class="task-content">
                                                <p class="" data-taskText="{!! Str::limit($checkin->purpose,50)!!}">
                                                    {!! Str::limit($checkin->purpose,50)!!}</p>
                                                @if($checkin->status == 'unapproved')
                                                <div class="">
                                                    <div class="progress br-30">
                                                        <div class="progress-bar bg-primary" role="progressbar"
                                                            data-progressState="50" style="width: 50%"
                                                            aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                                        </div>
                                                    </div>

                                                    <p class="progress-count">50%</p>

                                                </div>
                                                @else
                                                <div class="alert alert-success">
                                                    Approved by: {{ $checkin->security->name ??'null' }}


                                                </div>
                                                @endif
                                            </div>

                                            <div class="task-bottom">
                                                <div class="tb-section-1">
                                                    <span
                                                        data-taskDate="{{ Date('d-m-Y',strtotime($checkin->created_at)) }}"><svg
                                                            xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                            stroke-width="2" stroke-linecap="round"
                                                            stroke-linejoin="round" class="feather feather-calendar">
                                                            <rect x="3" y="4" width="18" height="18" rx="2" ry="2">
                                                            </rect>
                                                            <line x1="16" y1="2" x2="16" y2="6"></line>
                                                            <line x1="8" y1="2" x2="8" y2="6"></line>
                                                            <line x1="3" y1="10" x2="21" y2="10"></line>
                                                        </svg>
                                                        {{ Date('d-m-Y',strtotime($checkin->expected_date)) }}</span>
                                                </div>
                                                <div class="tb-section-2">
                                                    <a href='view_checkin/{{ $checkin->uuid }}'><i
                                                            class="far fa-eye"></i></a>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-trash-2 s-task-delete">
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

                                    </div>
                                </div>


                            </div>
                            @endforeach
                        </div>

                        <div class="add-s-task">
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
<script src="assets/js/ie11fix/fn.fix-padStart.js"></script>
<script src="assets/js/apps/scrumboard.js"></script>
<script>
    $(document).ready(function() {
    $(".cpy").click(function() {
        id = $(this).data('id')
        var copyText = document.getElementById(id);
        // Select the text field
  copyText.select();
  copyText.setSelectionRange(0, 99999); // For mobile devices

  // Copy the text inside the text field
  navigator.clipboard.writeText(copyText.value);

    })
})
</script>
@endsection