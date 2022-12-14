@extends('dashboard.master')
@section('header')
@endsection
@section('content')

<!--  END SIDEBAR  -->

<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
    <div class="layout-px-spacing">

        <div class="row layout-spacing">

            <!-- Content -->
            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 layout-top-spacing">

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

            </div>

            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 layout-top-spacing">

                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>Create Roles</h4>
                            </div>
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">

                        <div class="row">
                            <div class="col-lg-6 col-12 mx-auto">
                                <form method="post" action='{{ route("create_role") }}'>@csrf
                                    <div class="form-group">
                                        <p>Role Name</p>
                                        <label for="t-text" class="sr-only">Text</label>
                                        <input id="t-text" type="text" name="name" placeholder="Staff/Department"
                                            class="form-control" required="">
                                        <input type="submit" class="mt-4 btn btn-primary">
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="bio layout-spacing ">
                    <div class="widget-content widget-content-area br-6">
                        <div id="zero-config_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                            <div class="dt--top-section">
                                <div class="row">
                                    <div class="col-12 col-sm-6 d-flex justify-content-sm-start justify-content-center">
                                        <div class="dataTables_length" id="zero-config_length"><label>Results : <select
                                                    name="zero-config_length" aria-controls="zero-config"
                                                    class="form-control">
                                                    <option value="7">7</option>
                                                    <option value="10">10</option>
                                                    <option value="20">20</option>
                                                    <option value="50">50</option>
                                                </select></label></div>
                                    </div>
                                    <div
                                        class="col-12 col-sm-6 d-flex justify-content-sm-end justify-content-center mt-sm-0 mt-3">
                                        <div id="zero-config_filter" class="dataTables_filter"><label><svg
                                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-search">
                                                    <circle cx="11" cy="11" r="8"></circle>
                                                    <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                                </svg><input type="search" class="form-control" placeholder="Search..."
                                                    aria-controls="zero-config"></label></div>
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive">
                                <table id="zero-config" class="table table-striped dataTable" style="width:100%"
                                    role="grid" aria-describedby="zero-config_info">
                                    <thead>
                                        <tr role="row">
                                            <th class="sorting_asc" tabindex="0" aria-controls="zero-config" rowspan="1"
                                                colspan="1" aria-sort="ascending"
                                                aria-label="Name: activate to sort column descending"
                                                style="width: 100.596px;">Name</th>
                                            <th class="no-content sorting" tabindex="0" aria-controls="zero-config"
                                                rowspan="1" colspan="1"
                                                aria-label="Actions: activate to sort column ascending"
                                                style="width: 55.1756px;">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>


                                        @foreach($roles as $role)
                                        <tr role="row">
                                            <td class="sorting_1">{{ $role->name }}</td>

                                            <td><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="feather feather-x-circle table-cancel">
                                                    <circle cx="12" cy="12" r="10"></circle>
                                                    <line x1="15" y1="9" x2="9" y2="15"></line>
                                                    <line x1="9" y1="9" x2="15" y2="15"></line>
                                                </svg></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                  
                                </table>
                            </div>
                            <div class="dt--bottom-section d-sm-flex justify-content-sm-between text-center">
                                <div class="dt--pages-count  mb-sm-0 mb-3">
                                    <div class="dataTables_info" id="zero-config_info" role="status" aria-live="polite">
                                        Showing page 1 of 4</div>
                                </div>
                                <div class="dt--pagination">
                                    <div class="dataTables_paginate paging_simple_numbers" id="zero-config_paginate">
                                        <ul class="pagination">
                                            <li class="paginate_button page-item previous disabled"
                                                id="zero-config_previous"><a href="#" aria-controls="zero-config"
                                                    data-dt-idx="0" tabindex="0" class="page-link"><svg
                                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                        class="feather feather-arrow-left">
                                                        <line x1="19" y1="12" x2="5" y2="12"></line>
                                                        <polyline points="12 19 5 12 12 5"></polyline>
                                                    </svg></a></li>
                                            <li class="paginate_button page-item active"><a href="#"
                                                    aria-controls="zero-config" data-dt-idx="1" tabindex="0"
                                                    class="page-link">1</a></li>
                                            <li class="paginate_button page-item "><a href="#"
                                                    aria-controls="zero-config" data-dt-idx="2" tabindex="0"
                                                    class="page-link">2</a></li>
                                            <li class="paginate_button page-item "><a href="#"
                                                    aria-controls="zero-config" data-dt-idx="3" tabindex="0"
                                                    class="page-link">3</a></li>
                                            <li class="paginate_button page-item "><a href="#"
                                                    aria-controls="zero-config" data-dt-idx="4" tabindex="0"
                                                    class="page-link">4</a></li>
                                            <li class="paginate_button page-item next" id="zero-config_next"><a href="#"
                                                    aria-controls="zero-config" data-dt-idx="5" tabindex="0"
                                                    class="page-link"><svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewBox="0 0 24 24" fill="none"
                                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                        stroke-linejoin="round" class="feather feather-arrow-right">
                                                        <line x1="5" y1="12" x2="19" y2="12"></line>
                                                        <polyline points="12 5 19 12 12 19"></polyline>
                                                    </svg></a></li>
                                        </ul>
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
@endsection