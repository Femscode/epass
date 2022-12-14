<!doctype html>
<html lang="en">

    
<!-- Mirrored from themesbrand.com/skote/layouts/auth-register-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 May 2022 15:55:18 GMT -->
<head>
        
        <meta charset="utf-8" />
        <title>CTMarket | Register</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="A marketplace for CTHostel" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
      
  <link href="myimages/fav.png" src='myimages/fav.png' rel="icon" />

        <!-- owl.carousel css -->
        <link rel="stylesheet" href="assets/libs/owl.carousel/assets/owl.carousel.min.css">

        <link rel="stylesheet" href="assets/libs/owl.carousel/assets/owl.theme.default.min.css">

        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body class="auth-body-bg">
        
        <div>
            <div class="container-fluid p-0">
                <div class="row g-0">
                    
                    <div class="col-xl-9">
                        <div class="auth-full-bg pt-lg-5 p-4">
                            <div class="w-100">
                                <div class="bg-overlay"></div>
                                <div class="d-flex h-100 flex-column">
    
                                    <div class="p-4 mt-auto">
                                        <div class="row justify-content-center">
                                            <div class="col-lg-7">
                                                <div class="text-center">
                                                    
                                                    <h4 class="mb-3"><i class="bx bxs-quote-alt-left text-primary h1 align-middle me-3"></i><span class="text-primary">A</span> market space for CTHostel</h4>
                                                    
                                                    <div dir="ltr">
                                                        <div class="owl-carousel owl-theme auth-review-carousel" id="auth-review-carousel">
                                                            <div class="item">
                                                                <div class="py-3">
                                                                    <p class="font-size-16 mb-4">"Best place to sell both new and fairly used hostel materials, furnitures, electronics, kitchen utensils and more "</p>
    
                                                                    <div>
                                                                        <h4 class="font-size-16 text-primary">CT-Market</h4>
                                                                        <p class="font-size-14 mb-0">- A product of CTHostel</p>
                                                                    </div>
                                                                </div>
                                                                
                                                            </div>
    
                                                            <div class="item">
                                                                <div class="py-3">
                                                                    <p class="font-size-16 mb-4">"Fastest and the most secured way to sell your hostel related products "</p>
    
                                                                    <div>
                                                                        <h4 class="font-size-16 text-primary">CTMarket</h4>
                                                                        <p class="font-size-14 mb-0">- A product of CTHostel</p>
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
                    </div>
                    <!-- end col -->

                    <div class="col-xl-3">
                        <div class="auth-full-page-content p-md-5 p-4">
                            <div class="w-100">

                                <div class="d-flex flex-column h-100">
                                    <div class="mb-4 mb-md-5">
                                        <a href="index.html" class="d-block auth-logo">
                                            <img src="/myimages/logo_header.png" alt="" height="18" class="auth-logo-dark">
                                            <img src="/myimages/logo_header.png" alt="" height="18" class="auth-logo-light">   
                                        </a>
                                    </div>
                                    <div class="my-auto">
                                        
                                        <div>
                                            <h5 class="text-primary">Register account</h5>
                                            <p class="text-muted">Get your free Skote account now.</p>
                                        </div>
            
                                        <div class="mt-4">
                                            <form class="form w-100" method='post' action="{{ route('register') }}">@csrf
                                                <!--begin::Heading-->
                                                <div class="mb-10 text-center">
                                                    <!--begin::Title-->
                                                   
                                                    <!--end::Title-->
                                                    <!--begin::Link-->
                                                    <div class="text-gray-400 fw-bold fs-4">Already have an account?
                                                        <a style='color:black' href="/login" class="link-primary fw-bolder">Sign in here</a>
                                                    </div>
                                                    <!--end::Link-->
                                                </div>
                                                <!--end::Heading-->
                                                <!-- brand color
                                                #ec1c24 red, #009444 green, #414042 -->
                                                <!--begin::Action-->
                                              
                                                @if($errors->any())
                                                <div class="alert alert-danger">
                                                    <p><strong>Opps Something went wrong</strong></p>
                                                    <ul>
                                                        @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                                @endif
                                                <div class="row fv-row mb-7">
                                                    <!--begin::Col-->
                                                    <div class="col-xl-12">
                                                        <label class="form-label fw-bolder text-dark fs-6">Full Name</label>
                                                        <input required class="form-control form-control-lg form-control-solid" type="text"
                                                            placeholder="" name="name" autocomplete="off" />
                                                    </div>
                                                    <!--end::Col-->
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="fv-row mb-7">
                                                    <label class="form-label fw-bolder text-dark fs-6">Email</label>
                                                    <input required class="form-control form-control-lg form-control-solid" type="email"
                                                        placeholder="" name="email" autocomplete="off" />
                                                </div>
                    
                                                <div class="fv-row mb-7">
                                                    <label class="form-label fw-bolder text-dark fs-6">Phone Number</label>
                                                    <input required class="form-control form-control-lg form-control-solid" type="number"
                                                        placeholder="" name="phone" autocomplete="off" />
                                                </div>
                                                <div class="fv-row mb-7">
                                                    <label class="form-label fw-bolder text-dark fs-6">Institution</label>
                                                    
                                                <select required class="form-control form-control-lg form-control-solid" name="school_id">
                                                        <option value="" selected="selected">- Select Institution -</option>
                                                        @foreach(App\Models\schools::all() as $school)
                                                        <option value="{{ $school->id }}">{{ $school->name }}</option>
                                                        @endforeach
                                                     
                                                      
                                                    </select>
                                                </div>
                    
                    
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="mb-10 fv-row" data-kt-password-meter="true">
                                                    <!--begin::Wrapper-->
                                                    <div class="mb-1">
                                                        <!--begin::Label-->
                                                        <label class="form-label fw-bolder text-dark fs-6">Password</label>
                                                        <!--end::Label-->
                                                        <!--begin::Input wrapper-->
                                                        <div class="position-relative mb-3">
                                                            <input required class="form-control form-control-lg form-control-solid"
                                                                type="password" placeholder="" id='password' name="password"
                                                                autocomplete="off" />
                                                            <span
                                                                class="btn btn-sm btn-icon position-absolute translate-middle top-50 end-0 me-n2"
                                                                data-kt-password-meter-control="visibility">
                                                                <i class="bi bi-eye-slash fs-2"></i>
                                                                <i class="bi bi-eye fs-2 d-none"></i>
                                                            </span>
                                                        </div>
                                                        <!--end::Input wrapper-->
                                                        <!--begin::Meter-->
                                                        <div class="d-flex align-items-center"
                                                            data-kt-password-meter-control="highlight">
                                                            <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2">
                                                            </div>
                                                            <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2">
                                                            </div>
                                                            <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px me-2">
                                                            </div>
                                                            <div class="flex-grow-1 bg-secondary bg-active-success rounded h-5px"></div>
                                                        </div>
                                                        <!--end::Meter-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                    <!--begin::Hint-->
                                                    <div class="text-muted">Use 8 or more characters with a mix of letters, numbers &amp;
                                                        symbols.</div>
                                                    <!--end::Hint-->
                                                </div>
                    
                                                <!--end::Input group=-->
                                                <!--begin::Input group-->
                                                <div class="fv-row mb-2">
                                                    <label class="form-label fw-bolder text-dark fs-6">Confirm Password</label>
                                                    <input required class="form-control form-control-lg form-control-solid" type="password"
                                                        placeholder="" id='confirm_password' name="password_confirmation"
                                                        autocomplete="off" />
                                                </div>
                                                <p id='password_status_danger' class='badge badge-danger' style='display:none'></p>
                                                <p id='password_status_success' class='badge badge-success' style='display:none'></p>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="fv-row mb-10">
                                                    <label class="form-check form-check-custom form-check-solid form-check-inline">
                                                        <input required class="form-check-input" type="checkbox" name="toc" value="1" />
                                                        <span class="form-check-label fw-bold text-gray-700 fs-6">I Agree
                                                            <a class="ms-1 link-primary">Terms and conditions</a>.</span>
                                                    </label>
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Actions-->
                                                <div class="text-center">
                                                    <button type="submit" id="kt_sign_up_submit" class="btn btn-lg btn-primary">
                                                        <span class="indicator-label">Submit</span>
                                                    </button>
                                                </div>
                                                <!--end::Actions-->
                                            </form>

        
                                        </div>
                                    </div>

                                    <div class="mt-4 mt-md-5 text-center">
                                        <p class="mb-0">© <script>document.write(new Date().getFullYear())</script> CTHostel. Powered by CTS</p>
                                    </div>
                                </div>
                                
                                
                            </div>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container-fluid -->
        </div>

        <!-- JAVASCRIPT -->
        <script src="assets/libs/jquery/jquery.min.js"></script>
        <script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="assets/libs/metismenu/metisMenu.min.js"></script>
        <script src="assets/libs/simplebar/simplebar.min.js"></script>
        <script src="assets/libs/node-waves/waves.min.js"></script>

        <!-- owl.carousel js -->
        <script src="assets/libs/owl.carousel/owl.carousel.min.js"></script>

        <!-- validation init -->
        <script src="assets/js/pages/validation.init.js"></script>

        <!-- auth-2-carousel init -->
        <script src="assets/js/pages/auth-2-carousel.init.js"></script>

        <!-- App js -->
        <script src="assets/js/app.js"></script>

    </body>

<!-- Mirrored from themesbrand.com/skote/layouts/auth-register-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 May 2022 15:55:18 GMT -->
</html>
