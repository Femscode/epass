<!doctype html>
<html lang="en">

    
<!-- Mirrored from themesbrand.com/skote/layouts/auth-login-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 May 2022 15:55:18 GMT -->
<head>
        
        <meta charset="utf-8" />
        <title>CTMarket | Login</title>
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
                                            <h5 class="text-primary">Welcome Back !</h5>
                                            <p class="text-muted">Sign in to continue to the CTHostel Marketplace.</p>
                                        </div>
            
                                        <div class="mt-4">
                                            <form class="form w-100" method='post' action="{{route('login')}}">@csrf
                                                <!--begin::Heading-->
                                                <div class="text-center mb-10">
                                                    <!--begin::Title-->
                                                    {{-- <h4 class="text-dark mb-3">Sign In to CT-MARKET</h4> --}}
                                                    <!--end::Title-->
                                                    <!--begin::Link-->
                                                    <div class="text-gray-400 fw-bold fs-4">New Here?
                                                        <a href="/register" class="link-primary fw-bolder">Create an Account</a>
                                                    </div>
                                                    <!--end::Link-->
                                                </div>
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
                                                {{--
                                                <x-auth-validation-errors class="alert alert-danger" :errors="$errors" /> --}}
                    
                                                <!--begin::Heading-->
                                                <!--begin::Input group-->
                                                <div class="fv-row mb-10">
                                                    <!--begin::Label-->
                                                    <label class="form-label fs-6 fw-bolder text-dark">Email</label>
                                                    <!--end::Label-->
                                                    <!--begin::Input-->
                                                    <input class="form-control form-control-lg form-control-solid" type="text" name="email"
                                                        autocomplete="off" />
                                                    <!--end::Input-->
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Input group-->
                                                <div class="fv-row mb-10">
                                                    <!--begin::Wrapper-->
                                                    <div class="d-flex flex-stack mb-2">
                                                        <!--begin::Label-->
                                                        <label class="form-label fw-bolder text-dark fs-6 mb-0">Password</label>
                                                        <!--end::Label-->
                                                        <!--begin::Link-->
                                                        <!--end::Link-->
                                                    </div>
                                                    <!--end::Wrapper-->
                                                    <!--begin::Input-->
                                                    <input class="form-control form-control-lg form-control-solid" type="password"
                                                    name="password" autocomplete="off" />
                                                    <!--end::Input-->
                                                   
                                                </div>
                                                <!--end::Input group-->
                                                <!--begin::Actions-->
                                                <div class="text-center">
                                                    <!--begin::Submit button-->
                                                    <button type="submit" class="btn btn-lg btn-primary w-100 mb-2 mt-2">
                                                        <span class="indicator-label">Login</span>
                                                       
                                                    </button>
                                                    <!--end::Submit button-->
                                                    <!--begin::Separator-->
                                                 
                                                </div>
                                                <a href="forgot-password" class="link-primary fs-6 fw-bolder">Forgot Password ?</a>
                                                <!--end::Actions-->
                                            </form>
                                           
                                        </div>
                                    </div>

                                    <div class="mt-4 mt-md-5 text-center">
                                        <p class="mb-0">© <script>document.write(new Date().getFullYear())</script> CTHostel. Powered by CareTech Services</p>
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

        <!-- auth-2-carousel init -->
        <script src="assets/js/pages/auth-2-carousel.init.js"></script>
        
        <!-- App js -->
        <script src="assets/js/app.js"></script>

    </body>

<!-- Mirrored from themesbrand.com/skote/layouts/auth-login-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 May 2022 15:55:18 GMT -->
</html>
