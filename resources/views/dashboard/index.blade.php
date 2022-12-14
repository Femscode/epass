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
                            <a href="/profile" class="mt-2 edit-profile"> <svg
                                    xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-edit-3">
                                    <path d="M12 20h9"></path>
                                    <path d="M16.5 3.5a2.121 2.121 0 0 1 3 3L7 19l-4 1 1-4L16.5 3.5z"></path>
                                </svg></a>
                        </div>
                        <div class="text-center user-info">
                            @if($user->image == null)
                            <img src="assets/img/profile-3.jpg" alt="avatar">
                            @else
                            <img src="{{ asset('epass_files/public/visitor_images/'.$user->image)}}" style='height:50px;height:100px' alt="avatar">
                            @endif
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

                {{-- <div class="education layout-spacing ">
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

                </div> --}}

            </div>

            <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 layout-top-spacing">

                <div class="skills layout-spacing ">
                    <div class="widget-content widget-content-area">
                        <h3 class="">Quick Links</h3>
                        <div class="row justify-content-center">
                            <div class="card col-md-4 m-2"
                                style='background:#d4edda;color:#155724;border-left-color:#155724;border-left-width:5px'>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="numbers">
                                                <i class="fas fa-wifi scroll-icon p-2"></i>
                                                <a href='/departments' class="mb-0" style='color:#155724'>
                                                    Departments
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card col-md-4 m-2"
                                style='background:#d1ecf1;color:#0c5460;border-left-color:#0c5460;border-left-width:5px'>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="numbers">
                                                <i class="fas fa-mobile scroll-icon p-2"></i>
                                                <a href='/staffs' class="mb-0" style='color:#0c5460'>
                                                    Staffs

                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                      


                            <div class="card col-md-4 m-2"
                                style='background:#e2e3e5;color:#383d41;border-left-color:#383d41;border-left-width:5px'>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="numbers">
                                                <i class="fas fa-desktop scroll-icon p-2"></i>
                                                <a href='/profile' class="mb-0" style='color:#383d41'>
                                                    Profile

                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card col-md-4 m-2"
                            style='background:#fff3cd;color:#856404;border-left-color:#856404;border-left-width:5px'>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="numbers">
                                            <i class="fas fa-life-ring scroll-icon p-2"></i>
                                            <a href='/billing' class="mb-0" style='color:#856404'>
                                                Billings & Subscription

                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                            <div class="card col-md-4 m-2"
                                style='background:#f8d7da;color:#721c24;border-left-color:#721c24;border-left-width:5px'>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="numbers">
                                                <i class="fas fa-comments scroll-icon p-2"></i>
                                                <a href='/staff_checkin' class="mb-0" style='color:#721c24'>
                                                    Pre-register Visitor

                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card col-md-4 m-2"
                            style='background:#cce5ff;color:#004085;border-left-color:#004085;border-left-width:5px'>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="numbers">
                                            <i class="fas fa-lightbulb  scroll-icon p-2"></i>
                                            <a href='/visitor_checkin' class="mb-0" style='color:#004085'>
                                                
                                                External Visits
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                          
                        </div>

                    </div>
                </div>

                {{-- <div class="bio layout-spacing ">
                    <div class="widget-content widget-content-area">
                        <h3 class="">Bio</h3>
                        <p>I'm Web Developer from California. I code and design websites worldwide. Mauris varius tellus
                            vitae tristique sagittis. Sed aliquet, est nec auctor aliquet, orci ex vestibulum ex, non
                            pharetra lacus erat ac nulla.</p>

                        <p>Sed vulputate, ligula eget mollis auctor, lectus elit feugiat urna, eget euismod turpis
                            lectus sed ex. Orci varius natoque penatibus et magnis dis parturient montes, nascetur
                            ridiculus mus. Nunc ut velit finibus, scelerisque sapien vitae, pharetra est. Nunc accumsan
                            ligula vehicula scelerisque vulputate.</p>

                        <div class="bio-skill-box">

                            <div class="row">

                                <div class="col-12 col-xl-6 col-lg-12 mb-xl-5 mb-5 ">

                                    <div class="d-flex b-skills">
                                        <div>
                                        </div>
                                        <div class="">
                                            <h5>Sass Applications</h5>
                                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse eu fugiat
                                                nulla pariatur.</p>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-12 col-xl-6 col-lg-12 mb-xl-5 mb-5 ">

                                    <div class="d-flex b-skills">
                                        <div>
                                        </div>
                                        <div class="">
                                            <h5>Github Countributer</h5>
                                            <p>Ut enim ad minim veniam, quis nostrud exercitation aliquip ex ea commodo
                                                consequat.</p>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-12 col-xl-6 col-lg-12 mb-xl-0 mb-5 ">

                                    <div class="d-flex b-skills">
                                        <div>
                                        </div>
                                        <div class="">
                                            <h5>Photograhpy</h5>
                                            <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                                anim id est laborum.</p>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-12 col-xl-6 col-lg-12 mb-xl-0 mb-0 ">

                                    <div class="d-flex b-skills">
                                        <div>
                                        </div>
                                        <div class="">
                                            <h5>Mobile Apps</h5>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do et
                                                dolore magna aliqua.</p>
                                        </div>
                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>
                </div> --}}

            </div>

        </div>
    </div>
    <div class="footer-wrapper">
        <div class="footer-section f-section-1">
            <p class="">Copyright ?? <?php echo(Date("Y"));?> Powered by <a target="_blank" href="#">CareTech</a>, All rights
                reserved.</p>
        </div>
        <div class="footer-section f-section-2">
          
        </div>
    </div>
</div>
<!--  END CONTENT AREA  -->

@endsection
@section('script')
<script>
    $(document).ready(function() {
        @if (session('message'))
            Swal.fire('Success!',"{{ session('message') }}",'info');
        @endif
    })
    </script>
@endsection