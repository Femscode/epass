@extends('dashboard.master')
@section('header')

<link href="plugins/pricing-table/css/component.css" rel="stylesheet" type="text/css" />
@endsection
@section('content')

<!--  END SIDEBAR  -->

<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
    <div class="layout-px-spacing">

        <div class="row layout-spacing">

            <!-- Content -->
            <div class="col-lg-12 layout-spacing">
                <div class="statbox widget box box-shadow">
                    <div class="widget-header">
                        <div class="row">
                            <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                <h4>Billing & Pricing</h4>
                            </div>           
                        </div>
                    </div>
                    <div class="widget-content widget-content-area">
                        <div class="container">                                    
                            <div id="pricingWrapper" class="row">
                                <div class="col-md-6 col-lg-4">
                                    <div class="card stacked mt-5">
                                        <div class="card-header pt-0">
                                            <span class="card-price">$49</span>
                                            <h3 class="card-title mt-3 mb-1">Small Company</h3>
                                            <p>Between 10 - 100 staffs.</p>
                                        </div>
                                        <div class="card-body">
                                            <ul class="list-group list-group-minimal mb-3">
                                                <li class="list-group-item d-flex justify-content-between align-items-center">Support forum
                                                </li>
                                                <li class="list-group-item d-flex justify-content-between align-items-center">Free record keeping system
                                                </li>
                                                <li class="list-group-item d-flex justify-content-between align-items-center">2 hours of support
                                                </li>
                                                <li class="list-group-item d-flex justify-content-between align-items-center">5GB of storage space
                                                </li>
                                            </ul>
                                            <a href="#" class="btn btn-block btn-primary">Purchase Now</a>
                                        </div>
                                    </div>
                                </div>                              
                                <div class="col-md-6 col-lg-4">
                                    <div class="card stacked mt-5">
                                        <div class="card-header pt-0">
                                            <span class="card-price">$89</span>
                                            <h3 class="card-title mt-3 mb-1">Medium Company</h3>
                                            <p>Between 100 - 1000 staffs.</p>
                                        </div>
                                        <div class="card-body">
                                            <ul class="list-group list-group-minimal mb-3">
                                                <li class="list-group-item d-flex justify-content-between align-items-center">Unlimited checkins
                                                </li>
                                                <li class="list-group-item d-flex justify-content-between align-items-center">Free record keeping system
                                                </li>
                                                <li class="list-group-item d-flex justify-content-between align-items-center">10 hours of support
                                                </li>
                                                <li class="list-group-item d-flex justify-content-between align-items-center">100GB of storage space
                                                </li>
                                            </ul>
                                            <a href="#" class="btn btn-block btn-primary">Buy Now</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-4">
                                    <div class="card stacked mt-5">
                                        <div class="card-header pt-0">
                                            <span class="card-price">$129</span>
                                            <h3 class="card-title mt-3 mb-1">Large Company</h3>
                                            <p>1000 staffs and above.</p>
                                        </div>
                                        <div class="card-body">
                                            <ul class="list-group list-group-minimal mb-3">
                                                <li class="list-group-item d-flex justify-content-between align-items-center">Unlimited checkins
                                                </li>
                                                <li class="list-group-item d-flex justify-content-between align-items-center">Free record keeping system
                                                </li>
                                                <li class="list-group-item d-flex justify-content-between align-items-center">Unlimited hours of support
                                                </li>
                                                <li class="list-group-item d-flex justify-content-between align-items-center">1TB of storage space
                                                </li>
                                            </ul>
                                            <a href="#" class="btn btn-block btn-primary">Buy Now</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="code-section-container">
                                        
                            </div></div></div></div></div></div>
    </div>
    <div class="footer-wrapper">
        <div class="footer-section f-section-1">
            <p class="">Copyright © <?php echo(Date("Y"));?> Powered by <a target="_blank" href="#">CareTech</a>, All rights
                reserved.</p>
        </div>
        <div class="footer-section f-section-2">
          
        </div>
    </div>
</div>
<!--  END CONTENT AREA  -->

@endsection
@section('script')
@endsection