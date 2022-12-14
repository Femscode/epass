<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from designreset.com/cork/ltr/demo4/auth_register.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 Nov 2021 09:33:13 GMT -->

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
  <title>Register Cover | CORK - Multipurpose Bootstrap Dashboard Template </title>
  <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
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

            <h1 class="">Get started with a <br /> free account</h1>
            <p class="signup-link">Already have an account? <a href="/login">Log in</a></p>
            <form method='post' action='{{ route("register") }}'>@csrf
              <!-- Form -->
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
              <div class="mb-4">
                <label class="form-label" for="registerEmail">Organisation Name</label>
                <input type="text" class="form-control form-control-lg" name="name" id="registerName"
                  placeholder="Type your name" aria-label="Type your name" required data-msg="Please enter your name.">
                <input type='hidden' name='user_type' value='admin'/>
                </div>
              <div class="mb-4">
                <label class="form-label" for="registerEmail">Organisation Type</label>
                <select class="form-control form-control-lg" name="company_type" id="company_type"
                  aria-label="Organisation Type" required data-msg="Please enter your organisation type.">
                  <option>--Select Organisation Type--</option>
                  <option value='Medical'>Medical</option>
                  <option value='Food Factories '>Food Factories</option>
                  <option value='Tech Company '>Tech Company</option>
                  <option value='Governmental Organisations'>Governmetal Organisation</option>
                  <option value='Non Govermental Organisations'>Non Governmetal Organisation</option>
                  <option value='Others'>Others</option>

                </select>
              </div>
              <!-- End Form -->


              <div class="mb-4">
                <label class="form-label" for="registerEmail">Company Size</label>

                <div class="row">
                  <div class="col-sm mb-4 mb-sm-0">
                    <!-- Form Check -->
                    <label class="form-control form-control-lg" for="registerRadio1">
                      <span class="form-check form-check-custom">
                        <input type="radio" class="form-check-input" value='small' name="company_size"
                          id="registerRadio1" checked>
                        <span class="form-check-label">1-100</span>
                      </span>
                    </label>
                    <!-- End Form Check -->
                  </div>

                  <div class="col-sm">
                    <!-- Form Check -->
                    <label class="form-control form-control-lg" for="registerRadio2">
                      <span class="form-check form-check-custom">
                        <input type="radio" value='medium' class="form-check-input" name="company_size"
                          id="registerRadio2">
                        <span class="form-check-label">100+</span>
                      </span>
                    </label>
                    <!-- End Form Check -->
                  </div>
                </div>
                <!-- End Row -->
              </div>
              <!-- Form -->
              <div class="mb-4">
                <label class="form-label" for="registerEmail">Address</label>
                <input type="text" class="form-control form-control-lg" name="address" id="address"
                  placeholder="Enter the company's address" aria-label="Company's address" required
                  data-msg="Please enter the company's address.">
              </div>
              <div class="mb-4">
                <label class="form-label" for="registerEmail">Email Address</label>
                <input type="email" class="form-control form-control-lg" name="email" id="registerEmail"
                  placeholder="example@site.com" aria-label="example@site.com" required
                  data-msg="Please enter a valid email address.">
              </div>


              <div class="mb-4">

                <div class="row">
                  <div class="col-sm mb-4 mb-sm-0">
                    <!-- Form Check -->
                    <input required class="form-control form-control-lg form-control-solid" type="password"
                      placeholder="Input password" id='password' name="password" autocomplete="off" />
                    <!-- End Form Check -->
                  </div>

                  <div class="col-sm">
                    <!-- Form Check -->
                    <input required placeholder="Confirm password"
                      class="form-control form-control-lg form-control-solid" type="password" placeholder=""
                      id='confirm_password' name="password_confirmation" autocomplete="off" />
                    <!-- End Form Check -->
                  </div>
                </div>
                <!-- End Row -->
              </div>

              <!-- End Form -->


              <div class="d-grid text-center">
                <button type="submit" class="btn btn-primary btn-lg">Start your free 30-days trial</button>
                <span class="form-text">Need help? <a class="link" href="/vistkdk">Visit our Help Center <i
                      class="bi-chevron-right small ms-1"></i></a></span>
              </div>
            </form>
            <p class="terms-conditions">© <?php echo(Date('Y'));?> All Rights Reserved. <a href="/">VMS</a> is a product of <a href="javascript:void(0);">CareTech</a></p>


          </div>
        </div>
      </div>
    </div>
    <div class="form-image">
      <div class="l-image">
      </div>
    </div>
  </div>


  <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
  <script src="assets/js/libs/jquery-3.1.1.min.js"></script>
  <script src="bootstrap/js/popper.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>

  <!-- END GLOBAL MANDATORY SCRIPTS -->
  <script src="assets/js/authentication/form-1.js"></script>

</body>

<!-- Mirrored from designreset.com/cork/ltr/demo4/auth_register.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 22 Nov 2021 09:33:13 GMT -->

</html>