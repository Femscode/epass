
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from designreset.com/VMS/ltr/demo4/auth_login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 Nov 2021 09:31:44 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
    <title>Login | E-pass </title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico"/>
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,600,700" rel="stylesheet">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/plugins.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/authentication/form-1.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <link rel="stylesheet" type="text/css" href="assets/css/forms/theme-checkbox-radio.css">
    <link rel="stylesheet" type="text/css" href="assets/css/forms/switches.css">
</head>
<body class="form">
    

    <div class="form-container">
        <div class="form-form">
            <div class="form-form-wrap">
                <div class="form-container">
                    <div class="form-content">

                        <h1 class="">Log In to <a href="index-2.html"><span class="brand-name">E-pass</span></a></h1>
                        <p class="signup-link">New Here? <a href="register">Create an account</a></p>
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
                        <p class="terms-conditions">© <?php echo(Date('Y'));?> All Rights Reserved. <a href="/">E-pass</a> is a product of <a href="javascript:void(0);">CareTech</a></p>

                    </div>                    
                </div>
            </div>
        </div>
        <div class="form-image">
            <img src='{{ asset("assets/img/e-pass.jpg")}}' alt='e-pass'/>
            {{-- <div class="l-image">
            </div> --}}
        </div>
    </div>

    
    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src="assets/js/libs/jquery-3.1.1.min.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    
    <!-- END GLOBAL MANDATORY SCRIPTS -->
    <script src="assets/js/authentication/form-1.js"></script>

</body>

<!-- Mirrored from designreset.com/VMS/ltr/demo4/auth_login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 Nov 2021 09:31:44 GMT -->
</html>